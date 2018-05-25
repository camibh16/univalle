<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Pedido;

class PedidosController extends Controller
{
    public function store()
    {
        $pedidos = Pedido::all();
        return redirect('web.taz.pedidos',compact('pedidos'));

        // // $pedido = $this->pedidoRepository->create($input);

        // // Flash::success(Auth->User()->id);

        // return redirect(route('admin.pedidos.index'));
    }
}
