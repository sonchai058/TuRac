<!-- Titlecode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TitleCode', 'Titlecode:') !!}
    {!! Form::text('TitleCode', null, ['class' => 'form-control']) !!}
</div>

<!-- Codeid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CodeId', 'Codeid:') !!}
    {!! Form::text('CodeId', null, ['class' => 'form-control']) !!}
</div>

<!-- Nameen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NameEn', 'Nameen:') !!}
    {!! Form::text('NameEn', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastnameen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LastNameEn', 'Lastnameen:') !!}
    {!! Form::text('LastNameEn', null, ['class' => 'form-control']) !!}
</div>

<!-- Nameth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NameTh', 'Nameth:') !!}
    {!! Form::text('NameTh', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastnameth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LastNameTh', 'Lastnameth:') !!}
    {!! Form::text('LastNameTh', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SexCode', 'Sexcode:') !!}
    {!! Form::text('SexCode', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::textarea('Address', null, ['class' => 'form-control']) !!}
</div>

<!-- Postcodeid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PostCodeID', 'Postcodeid:') !!}
    {!! Form::text('PostCodeID', null, ['class' => 'form-control']) !!}
</div>

<!-- Usertype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UserType', 'Usertype:') !!}
    {!! Form::text('UserType', null, ['class' => 'form-control']) !!}
</div>

<!-- Taxid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TaxID', 'Taxid:') !!}
    {!! Form::text('TaxID', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Phone1', 'Phone1:') !!}
    {!! Form::text('Phone1', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Phone2', 'Phone2:') !!}
    {!! Form::text('Phone2', null, ['class' => 'form-control']) !!}
</div>

<!-- Accountname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AccountName', 'Accountname:') !!}
    {!! Form::text('AccountName', null, ['class' => 'form-control']) !!}
</div>

<!-- Officetype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OfficeType', 'Officetype:') !!}
    {!! Form::text('OfficeType', null, ['class' => 'form-control']) !!}
</div>

<!-- Officecode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OfficeCode', 'Officecode:') !!}
    {!! Form::text('OfficeCode', null, ['class' => 'form-control']) !!}
</div>

<!-- Officename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('officeName', 'Officename:') !!}
    {!! Form::text('officeName', null, ['class' => 'form-control']) !!}
</div>

<!-- Accchartid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AccChartID', 'Accchartid:') !!}
    {!! Form::number('AccChartID', null, ['class' => 'form-control']) !!}
</div>

<!-- Datetimeadd Field -->
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

<!-- Tsdatetimeupdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tsDateTimeUpdate', 'Tsdatetimeupdate:') !!}
    {!! Form::text('tsDateTimeUpdate', null, ['class' => 'form-control','id'=>'tsDateTimeUpdate']) !!}
</div>

@section('scripts')
   <script type="text/javascript">
           $('#tsDateTimeUpdate').datetimepicker({
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

<!-- Tsuserupdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tsUserUpdate', 'Tsuserupdate:') !!}
    {!! Form::number('tsUserUpdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Orgid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OrgID', 'Orgid:') !!}
    {!! Form::number('OrgID', null, ['class' => 'form-control']) !!}
</div>

<!-- Grpid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('GrpID', 'Grpid:') !!}
    {!! Form::number('GrpID', null, ['class' => 'form-control']) !!}
</div>

<!-- Allow Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Allow', 'Allow:') !!}
    {!! Form::text('Allow', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('customers.index') !!}" class="btn btn-default">Cancel</a>
</div>
