<?php

namespace App\Http\Controllers;
use App\Http\Requests\Admin\CreatePedidoRequest;
use App\Http\Requests\Admin\UpdatePedidoRequest;
use App\Repositories\Admin\PedidoRepository;
use App\Http\Controllers\AppBaseController;
// use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Admin\Pedido;
use App\Models\Admin\Estado;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
// use App\Models\Admin\Pedido;

class PedidosController extends Controller
{

	private $pedidoRepository;

    public function __construct(PedidoRepository $pedidoRepo)
    {
        $this->pedidoRepository = $pedidoRepo;
    }
	
    public function store()
    {
        $pedidos = Pedido::all();
        return redirect('web.taz.pedidos',compact('pedidos'));

        // // $pedido = $this->pedidoRepository->create($input);

        // // Flash::success(Auth->User()->id);

        // return redirect(route('admin.pedidos.index'));
    }

      public function destroy2($id)
    {
        $pedido2 = $this->pedidoRepository->findWithoutFail($id);

        if (empty($pedido2)) {
            Flash::error('Pedido no encontrado');

            return redirect(route('pedidos'));
        }

        $this->pedidoRepository->delete($id);

        Flash::success('Pedido borrado correctamente.');

        return redirect(route('pedidos'));
    }
}
