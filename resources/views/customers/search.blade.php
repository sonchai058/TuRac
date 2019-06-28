<div class="row">
    <div class="col-md-12">
        <div class="form-group row">

            <div class="col-md-3">
                <select name="" id="" class="form-control">
                    <option value="">ผังบัญชี</option>
                    <option value="">ชื่อบัญชี</option>
                </select>
            </div>
            <div class="col-md-3">
                <input class="form-control" id="search" type="text"  placeholder="ค้นหาเลขที่บัญชี" >
            </div>
            <div class="col-md-2">
                <button class="btn btn-warning" type="button"><i class="fa fa-search"></i> ค้นหาข้อมูล</button>
                
            </div>
            <div class="col-md-4">
                <a class="pull-right btn btn-info  m-1" href="#"> excel</a>
                <a class="pull-right btn btn-info m-1" href="#"><i class="fa fa-charts fa-lg"></i> กรองรายงาน</a>
                <a class="pull-right btn btn-info m-1" href="{!! route('customers.create') !!}"><i class="fa fa-plus-square fa-lg"></i>เพิ่มข้อมูล</a>
            </div>
        </div>
        
    </div>
    
</div>