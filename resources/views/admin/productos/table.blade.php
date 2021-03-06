<table class="table table-responsive" id="productos-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Precio</th>
        
        <th>Empresa Id</th>
        <th>Imagen</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{!! $producto->name !!}</td>
            <td>{!! $producto->precio !!}</td>
            
            <td>{!! $producto->empresa_id !!}</td>
            <td><img style="width:75px" src="{!! $producto->imagen !!}" alt=""></td>
            <td>
                {!! Form::open(['route' => ['admin.productos.destroy', $producto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.productos.show', [$producto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.productos.edit', [$producto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>