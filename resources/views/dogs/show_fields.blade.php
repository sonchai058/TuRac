<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $dog->id !!}</p>
</div>

<!-- Dog Name Field -->
<div class="form-group">
    {!! Form::label('dog_name', 'Dog Name:') !!}
    <p>{!! $dog->dog_name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $dog->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $dog->updated_at !!}</p>
</div>

