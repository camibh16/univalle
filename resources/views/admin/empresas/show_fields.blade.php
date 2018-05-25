<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $empresa->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $empresa->name !!}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{!! $empresa->url !!}</p>
</div>

<!-- Eslogan Field -->
<div class="form-group">
    {!! Form::label('eslogan', 'Eslogan:') !!}
    <p>{!! $empresa->eslogan !!}</p>
</div>

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Imagen:') !!}
    <p>{!! $empresa->img !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $empresa->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $empresa->updated_at !!}</p>
</div>

