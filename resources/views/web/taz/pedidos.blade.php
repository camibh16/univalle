@extends('web.taz.layout')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Pedidos</h1>
        <h1 class="pull-right">
          {{--  <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('admin.pedidos.create') !!}">Add New</a> --}}
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

            <div class="clearfix"></div>
            <div class="box box-primary">
            <div class="box-body">
    
        <div class="col-md-12">
            

        <table class="table table-responsive" id="pedidos-table">
    <thead>
        <tr>
            <th>Usuario</th>
        <th>Producto</th>
        <th>Estado</th>
        <th>Precio</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pedidos as $pedido)
        <tr>
            <td>{!! $pedido->usuarios->name !!}</td>
            <td>{!! $pedido->productos->name !!}</td>
            <td>{!! $pedido->estados->nombre !!}</td>
            <td>{!! $pedido->total !!}</td>
            <td>
                {!! Form::open(['route' => ['pedidos.destroy2', $pedido->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                   {{--  <a href="{!! route('admin.pedidos.show', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.pedidos.edit', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> --}}
                    {!! Form::button('<i class="">x</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas Seguro!!?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>




        </div>
    </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection