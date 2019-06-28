<div class="row">
    <div class="col-md-12">
        <div class="form-group row" >
            <span style="display: flex;justify-content: center; align-items: center;">ค้นหา</span>
            <div class="col-md-3">
                <select  id="acc_search" class="form-control-custom">
                    <option value="0">เลขที่บัญชี</option>
                    <option value="1">ชื่อบัญชี</option>
                </select>
            </div>
            <div class="col-md-4">
                <input class="form-control-custom" id="search_val" type="text"  placeholder="ค้นหาเลขที่บัญชี" >
            </div>
            <div class="col-md-2">
                <button class="btn btn-search" id="btn-search" type="button"><span> <img src="{{ url('/img/icon/loupe.png') }}" alt=""></span>ค้นหาข้อมูล</button>
            </div>
            
        </div>
        
    </div>
    
</div>

{{-- modal search report --}}
<div class="modal fade" id="ModalReport" tabindex="-1" role="dialog" aria-labelledby="ModalReportLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalReportLabel">ตัวเลือกกรองข้อมูล</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            <form action="" method="get">
                <div class="row form-group">
             
                    {!! Form::label('Type', 'วันที่กรอง',['class'=>'col-md-3 col-form-label text-right']) !!}
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" id="">
                    </div>
                    {!! Form::label('Type', 'จนถึง',['class'=>'col-md-1 col-form-label text-right']) !!}
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" id="">
                    </div>
                   
                </div>
                <div class="row form-group">
            
                    {!! Form::label('Type', 'ประเภท',['class'=>'col-md-3 col-form-label text-right']) !!}
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" id="">
                    </div>
                   
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="" id="">
                    </div>
                    
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-filter"><span> <img src="{{ url('/img/icon/analysis.png') }}" alt=""></span> ค้นหาข้อมูล</button>
                    <button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal"><span> <img src="{{ url('/img/icon/cancel.png') }}" alt=""></span> ยกเลิก</button>
                        
                </div>
               
            </form>
           
        </div>
        
      </div>
    </div>
  </div>