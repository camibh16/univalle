<table class="table table-responsive" id="empresas-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Url</th>
        <th>Eslogan</th>
        <th>Img</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>{!! $empresa->name !!}</td>
            <td>{!! $empresa->url !!}</td>
            <td>{!! $empresa->eslogan !!}</td>
            <td><img style="width: 75px" src="{!! $empresa->img !!}" alt=""></td>
            <td>
                {!! Form::open(['route' => ['admin.empresas.destroy', $empresa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.empresas.show', [$empresa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.empresas.edit', [$empresa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>