$(function () {

        //grid tree
        var $tg = $('#tg').treegrid({

            url: url+"/getAccountChartTuJson",
            method : 'GET',
            animate: false,
            lines:true,
            // minHeight:100,
            maxHeight:500,
            collapsible: true,
            fitColumns: true,
            noheader:true,
            idField: 'id',
            showFilterBar:false,
            treeField: 'name',
            onContextMenu: onContextMenu,
            loadMsg:"กำลังโหลดข้อมูล",
            emptyMsg:"ไม่มีข้อมูล",
            

            columns: [
                [{
                        title: 'เลขที่บัญชี',
                        field: 'name',
                        width: 40,
                        
                        // align: 'left'
                    },
                    {
                        field: 'budget',
                        title: 'ชื่อบัญชี',
                        width: 60,
                        // align: 'center'
                    },
                    
                    // {
                    //     field: 'tools',
                    //     title: '&nbsp;',
                    //     width: 25,
                    //     align: 'right'
                    // },
                    // {field:'end',title:'End Date',width:80}
                ]
            ],
            onLoadSuccess: function (row) {
              
                // $(this).treegrid('enableDnd', row ? row.id : null);
            },

            onClickCell:function(field,row){
                // console.clear();
                // console.log(row.id);
                // set id to form
                $('input[name="id"]').val(row.id);
                $('input[name="type_data"]').val('edit');

                $('#main-index').removeClass('col-md-12').addClass('col-md-8');
                $tg.treegrid('resize',{
                    width: '100%'
                });
                $('#acc_data').collapse('show');

                // get data acc
                $.ajax({
                    method: "GET",
                    url: url + '/getAccountTu',
                    data:{ id:row.id},
                    success: function(data){
                        // alert(data);
                        // set value to form filed
                        $('input[name="AccChartNumber"]').val(data.AccChartNumber);
                        $('input[name="NameTh"]').val(data.NameTh);
                        $('input[name="NameEn"]').val(data.NameEn);
                        $('textarea[name="Detail"]').val(data.Detail);
                        $('input[name="AccChartParentrtID"]').val(data.AccChartParentrtID);

                        $('select[name="Type"]').val(data.Type);
                        $('select[name="ChartType"]').val(data.ChartType);

                        var form = document.getElementById("acc_form");
                        var elements = form.elements;
                        for (var i = 0, len = elements.length; i < len; ++i) {
                            elements[i].readOnly = true;
                        }

                        $('select[name="Type"]').prop('disabled', true);
                        $('select[name="ChartType"]').prop('disabled', true);
                        $('select[name="type"]').prop('disabled', true);
                        $('.btn-submit').prop('disabled', true);
                      
                    },
                    error: function(data){
            
                    }
                })
            
                
            }
            


        }).treegrid('enableFilter', [{
                field: 'name',
                type: 'text',
            },
            {
                field: 'budget',
                type: 'text',
                options: {
                    precision: 1
                },
            },
        ]);

        

    
        $('#search').on('keyup', function () {

            $tg.treegrid('addFilterRule', {
                field: 'name',
                op: 'contains',
                value: this.value
            }).treegrid('doFilter');

        });


    //grid tree info create edit delete
    $('#acc_create').click(function(){
        $('#main-index').removeClass('col-md-12').addClass('col-md-8');
        $tg.treegrid('resize',{
            width: '100%'
        });

        var isVisibleShow = $('#acc_data').is( ":visible" ); 
        if (!isVisibleShow) 
            $('#acc_data').collapse('show');
        // else
        //     $('#acc_data').collapse('hide');

        $('input[name="type_data"]').val('create');

        // check create chid
        var id = $('input[name="id"]').val();
        if (id != ''){
            $('input[name="AccChartNumber"]').val('');
            $('input[name="NameTh"]').val('');
            $('input[name="NameEn"]').val('');
            $('textarea[name="Detail"]').val('');
            $('input[name="AccChartParentrtID"]').val(id);

      
        }

    });
    $('#acc_edit').click(function(){
        // check id click
        var id =  $('input[name="id"]').val();
        if (id != ''){
            $('#main-index').removeClass('col-md-12').addClass('col-md-8');
            $tg.treegrid('resize',{
                width: '100%'
            });
    
            var isVisibleShow = $('#acc_data').is( ":visible" ); 
            if (!isVisibleShow) 
                $('#acc_data').collapse('show');
            // else
            //     $('#acc_data').collapse('hide');
            $('input[name="type_data"]').val('edit');
        }
        
    });
    $('#acc_delete').click(function(e){

        var id =  $('input[name="id"]').val();
        if (id != ''){
            toastr.warning("<button type='button' id='confirmationRevertYes' class='btn btn-danger'>ยืนยัน</button>",'ต้องการลบข้อมูลใช่หรือไม่',
            {
                closeButton: false,
                allowHtml: true,
                onShown: function (toast) {
                    $("#confirmationRevertYes").click(function(){
                    
                            e.preventDefault(e);
                            $.ajax({
                                type: "DELETE",
                                url: url + '/accountChartsTu/'+id,
                                data:{
                                    '_token': $('input[name=_token]').val()
                                },
                                success: function(data){
                                    console.log(data);
                                    toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                                    // $tg.treegrid('reload');
                                    location.reload();
                                },
                                error: function(data){
                        
                                }
                            })
                    });
                }
            });
        }

       
    })

    //hidden data 
    $('#acc_data').on('hidden.bs.collapse', function () {
        $('#main-index').removeClass('col-md-8').addClass('col-md-12');
       
       $tg.treegrid('resize',{
           width: '100%'
       });
    })

    //submit data

    $('.btn-submit').click(function(e){
        // get data type
        var type = $('input[name="type_data"]').val();
        
        if (type == 'create'){
            // get data  filed
            var data =   $('#acc_form').serialize();
            console.log(url);
            e.preventDefault(e);
            $.ajax({
                method: "POST",
                url: url + '/accountChartsTu',
                data:$('#acc_form').serialize(),
                success: function(data){
                    console.log(data);
                    toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                    // $tg.treegrid('reload');
                    location.reload();
                },
                error: function(data){
        
                }
            })
        }
        else{
             // get data  filed
             var data =   $('#acc_form').serialize();
             var id =  $('input[name="id"]').val();
             console.log(id);
             e.preventDefault(e);
             $.ajax({
                type: "PUT",
                 url: url + '/accountChartsTu/'+id,
                 data:$('#acc_form').serialize(),
                 success: function(data){
                    toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                    //  console.log(data);
                    //  // $tg.treegrid('reload');
                     location.reload();
                 },
                 error: function(data){
         
                 }
             })
        }
    })


});





function onContextMenu(e, row) {
    if (row) {
        e.preventDefault();
        $(this).treegrid('select', row.id);
        $('#mm').menu('show', {
            left: e.pageX,
            top: e.pageY
        });
    }
}

var idIndex = 100;
function append(){
    $('#main-index').removeClass('col-md-12').addClass('col-md-8');
    $('#tg').treegrid('resize',{
        width: '100%'
    });

    var isVisibleShow = $('#acc_data').is( ":visible" ); 
    if (!isVisibleShow) 
        $('#acc_data').collapse('show');
    // else
    //     $('#acc_data').collapse('hide');

    $('input[name="type_data"]').val('create');

    // check create chid
    var id = $('input[name="id"]').val();
    if (id != ''){
        $('input[name="AccChartNumber"]').val('');
        $('input[name="NameTh"]').val('');
        $('input[name="NameEn"]').val('');
        $('textarea[name="Detail"]').val('');
        $('input[name="AccChartParentrtID"]').val(id);

  
    }

    // idIndex++;
    // var d1 = new Date();
    // var d2 = new Date();
    // d2.setMonth(d2.getMonth()+1);
    // var node = $('#tg').treegrid('getSelected');
    // $('#tg').treegrid('append',{
    //     parent: node.id,
    //     data: [{
    //         id: idIndex,
    //         name: 'New Task'+idIndex,
    //         persons: parseInt(Math.random()*10),
    //         begin: $.fn.datebox.defaults.formatter(d1),
    //         end: $.fn.datebox.defaults.formatter(d2),
    //         progress: parseInt(Math.random()*100)
    //     }]
    // })
}
function editIt(){

    var form = document.getElementById("acc_form");
    var elements = form.elements;
    for (var i = 0, len = elements.length; i < len; ++i) {
        elements[i].readOnly = false;
    }

    $('select[name="Type"]').prop('disabled', false);
    $('select[name="ChartType"]').prop('disabled', false);
    $('select[name="type"]').prop('disabled', false);
    $('.btn-submit').prop('disabled', false);

}

function removeIt(){
    var id =  $('input[name="id"]').val();
    if (id != ''){
        toastr.warning("<button type='button' id='confirmationRevertYes' class='btn btn-danger'>ยืนยัน</button>",'ต้องการลบข้อมูลใช่หรือไม่',
        {
            closeButton: false,
            allowHtml: true,
            onShown: function (toast) {
                $("#confirmationRevertYes").click(function(e){
                
                        e.preventDefault(e);
                        $.ajax({
                            type: "DELETE",
                            url: url + '/accountChartsTu/'+id,
                            data:{
                                '_token': $('input[name=_token]').val()
                            },
                            success: function(data){
                     
                                toastr.success('ลบข้อมูลเรียบร้อยแล้ว', 'ข้อความแจ้งเตือน!!', {timeOut: 5000});
                                // $tg.treegrid('reload');
                                location.reload();
                            },
                            error: function(data){
                    
                            }
                        })
                });
            }
        });
    }
}

function collapse(){
    var node = $('#tg').treegrid('getSelected');
    if (node){
        $('#tg').treegrid('collapse', node.id);
    }
}

function expand(){
    var node = $('#tg').treegrid('getSelected');
    if (node){
        $('#tg').treegrid('expand', node.id);
    }
}
