@extends('web.taz.layout')
@section('content')
<h1>  Pedidos de {!! Auth::user()->name !!}</h1>
			<hr/>

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 row">
			
		@foreach($productos->pedidos as $pedido)
		<div class="col-md-12">
			<div class="card m-4 text-center">
				<div class="card-body">
					<small class="subheading">{{$pedido->productos}} h</small>
					<h4 class=""><strong>Nombre Mesa</strong></h4>
					<small class="text-muted">Nombre Encargado</small>
				</div>
				<a href="#"	class="card-footer float-right">
					<i class="fa fa-info float-right"></i>
			</a>
			</div>
		</div>
		<hr/>
		@endforeach	
		</div>
				<div class="col-md-2 row">
Aqui un siderbar o algo
				</div>
	</div>
</div>

@stop