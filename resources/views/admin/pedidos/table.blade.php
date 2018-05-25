<table class="table table-responsive" id="pedidos-table">
    <thead>
        <tr>
            <th>Usuarios</th>
            <th>Direccion</th>
        <th>Productos</th>
        <th>Estado</th>
        <th>Total</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pedidos as $pedido)
        <tr>
            <td>{!! $pedido->usuarios->name !!}</td>
            <td>{!! $pedido->usuarios->direccion !!}</td>
            <td>{!! $pedido->productos->name!!}</td>
            <td>{!! $pedido->estados->nombre !!}</td>
            <td>{!! $pedido->total !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.pedidos.show', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.pedidos.edit', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>