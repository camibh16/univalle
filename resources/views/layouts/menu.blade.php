<li class="{{ Request::is('empresas*') ? 'active' : '' }}">
    <a href="{!! route('admin.empresas.index') !!}"><i class="fa fa-edit"></i><span>Empresas</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('admin.productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('estados*') ? 'active' : '' }}">
    <a href="{!! route('admin.estados.index') !!}"><i class="fa fa-edit"></i><span>Estados</span></a>
</li>

<li class="{{ Request::is('pedidos*') ? 'active' : '' }}">
    <a href="{!! route('admin.pedidos.index') !!}"><i class="fa fa-edit"></i><span>Pedidos</span></a>
</li>

