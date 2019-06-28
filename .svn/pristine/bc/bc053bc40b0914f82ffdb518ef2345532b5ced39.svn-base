{{-- hidden filed --}}
{!! Form::hidden('type_data',null) !!}
{!! Form::hidden('_token', csrf_token()) !!}
{!! Form::hidden('id',null) !!}

    


<div class="form-group row">
    {!! Form::label('AccChartParentrtID', 'รหัสคุมบัญชี',['class'=>'col-md-4 col-form-label text-right']) !!}
    <div class="col-md-8">
        {!! Form::number('AccChartParentrtID', null, ['class' => 'form-control']) !!}
        {{-- <span class="help-block">This is a help text</span> --}}
    </div>
</div>

<!-- Accchartnumber Field -->
<div class="form-group row">
    {!! Form::label('AccChartNumber', 'เลขบัญชี:',['class'=>'col-md-4 col-form-label text-right']) !!}
    <div class="col-md-8">
        {!! Form::text('AccChartNumber', null, ['class' => 'form-control']) !!}
        {{-- <span class="help-block">This is a help text</span> --}}
    </div>
</div>

<!-- Nameth Field -->
<div class="form-group row">
    {!! Form::label('NameTh', 'ชื่อบัญชี (ไทย)',['class'=>'col-md-4 col-form-label text-right']) !!}
    <div class="col-md-8">
        {!! Form::text('NameTh', null, ['class' => 'form-control']) !!}
        {{-- <span class="help-block">This is a help text</span> --}}
    </div>
</div>

<!-- Nameen Field -->
<div class="form-group row">
    {!! Form::label('NameEn', 'ชื่อบัญชี (อังกฤษ):',['class'=>'col-md-4 col-form-label text-right']) !!}
    <div class="col-md-8">
        {!! Form::text('NameEn', null, ['class' => 'form-control']) !!}
        {{-- <span class="help-block">This is a help text</span> --}}
    </div>
</div>

<!-- Detail Field -->

<div class="form-group row">
    {!! Form::label('Detail', 'รายละเอียด',['class'=>'col-md-4 col-form-label text-right']) !!}
    <div class="col-md-8">
        {!! Form::textarea('Detail', null, ['class' => 'form-control','rows' => 3, 'cols' => 40]) !!}
        {{-- <input class="form-control" id="text-input" type="text" name="text-input" placeholder="Text"> --}}
        {{-- <span class="help-block">This is a help text</span> --}}
    </div>
</div>



<!-- Type Field -->
<div class="form-group row">
    {!! Form::label('Type', 'เคดิต เดบิต',['class'=>'col-md-4 col-form-label text-right']) !!}
    <div class="col-md-8">
        {!! Form::select('Type',['เดรดิต'=>'เดรดิต','เคบิต'=>'เคบิต','all'=>'เคบิต/เดรดิต'], null, ['class' => 'form-control']) !!}
        {{-- <span class="help-block">This is a help text</span> --}}
    </div>
</div>



<!-- Charttype Field -->
<div class="form-group row">
    {!! Form::label('ChartType', 'ลงบัญชี',['class'=>'col-md-4 col-form-label text-right']) !!}
    <div class="col-md-8">
        {!! Form::select('ChartType',['ได้'=>'ได้','ไม่ได้'=>'ไม่ได้'], null, ['class' => 'form-control']) !!}
        {{-- <span class="help-block">This is a help text</span> --}}
    </div>
</div>



<div class="form-group row">
    {!! Form::label('type', 'ประเภท',['class'=>'col-md-4 col-form-label text-right']) !!}
    <div class="col-md-8">
        {!! Form::select('type',[], null, ['class' => 'form-control']) !!}
        {{-- <span class="help-block">This is a help text</span> --}}
    </div>
</div>


{{-- <!-- Accgroupid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AccGroupID', 'Accgroupid:') !!}
    {!! Form::number('AccGroupID', null, ['class' => 'form-control']) !!}
</div> --}}


<!-- Format Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('Format', 'Format:') !!}
    {!! Form::text('Format', null, ['class' => 'form-control']) !!}
</div> --}}

{{-- <!-- Datetimeadd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DateTimeAdd', 'Datetimeadd:') !!}
    {!! Form::text('DateTimeAdd', null, ['class' => 'form-control','id'=>'DateTimeAdd']) !!}
</div>

@section('scripts')
   <script type="text/javascript">
           $('#DateTimeAdd').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endsection

<!-- Useradd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UserAdd', 'Useradd:') !!}
    {!! Form::number('UserAdd', null, ['class' => 'form-control']) !!}
</div>

<!-- Datetimeupdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DateTimeUpdate', 'Datetimeupdate:') !!}
    {!! Form::text('DateTimeUpdate', null, ['class' => 'form-control','id'=>'DateTimeUpdate']) !!}
</div>

@section('scripts')
   <script type="text/javascript">
           $('#DateTimeUpdate').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endsection

<!-- Userupdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UserUpdate', 'Userupdate:') !!}
    {!! Form::number('UserUpdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Allow Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Allow', 'Allow:') !!}
    {!! Form::text('Allow', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {{ Form::button('<span> <img src="'. url('/img/icon/save.png').' " alt=""></span> บันทึกข้อมูล', ['type' => 'button', 'class' => 'btn  btn-submit'] )  }}
    <a href="{!! route('accountCharts.index') !!}" class="btn btn-cancel"><span> <img src="{{ url('/img/icon/cancel.png') }}" alt=""></span> ยกเลิก</a>
</div>
