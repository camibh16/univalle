<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pedido->id !!}</p>
</div>

<!-- Users Id Field -->
<div class="form-group">
    {!! Form::label('users_id', 'Usuario:') !!}
    <p>{!! $pedido->usuarios->name !!}</p>
</div>

<!-- Users Id Field -->
<div class="form-group">
    {!! Form::label('users_id', 'Direccion:') !!}
    <p>{!! $pedido->usuarios->direccion !!}</p>
</div>

<!-- Productos Id Field -->
<div class="form-group">
    {!! Form::label('productos_id', 'Producto:') !!}
    <p>{!! $pedido->productos->name !!}</p>
</div>

<!-- Productos Id Field -->
<div class="form-group">
    {!! Form::label('estados_id', 'Estado:') !!}
    <p>{!! $pedido->estados->nombre !!}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{!! $pedido->total !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pedido->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pedido->updated_at !!}</p>
</div>

