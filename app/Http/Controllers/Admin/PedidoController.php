<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePedidoRequest;
use App\Http\Requests\Admin\UpdatePedidoRequest;
use App\Repositories\Admin\PedidoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Admin\Pedido;
use App\Models\Admin\Estado;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Auth;
// use App\Auth;

class PedidoController extends AppBaseController
{
    /** @var  PedidoRepository */
    private $pedidoRepository;

    public function __construct(PedidoRepository $pedidoRepo)
    {
        $this->pedidoRepository = $pedidoRepo;
    }

    /**
     * Display a listing of the Pedido.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pedidoRepository->pushCriteria(new RequestCriteria($request));
        $pedidos = $this->pedidoRepository->all();

        return view('admin.pedidos.index')
            ->with('pedidos', $pedidos);
    }

    /**
     * Show the form for creating a new Pedido.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pedidos.create');
    }

    /**
     * Store a newly created Pedido in storage.
     *
     * @param CreatePedidoRequest $request
     *
     * @return Response
     */
    public function store()
    {
         $pedidos = Pedido::all()->where('users_id', Auth::user()->id);
        return view('web.taz.pedidos',compact('pedidos'));

        // // $pedido = $this->pedidoRepository->create($input);

        // // Flash::success(Auth->User()->id);

        // return redirect(route('admin.pedidos.index'));
    }





    public function prueba(Request $request)
    {
        $pedido = new Pedido();
        $user = \Auth::user();

        $pedido->users_id =$user->id;
        $pedido->productos_id = $request->input('producto_id');
        $pedido->estados_id = $request->input('estados_id');
        $pedido->total = $request->input('total');
        $pedido->save();

        Flash::success('Pedido Realizado con exito !!!');

        return redirect(route('pedidos'));

        // $pedido = $this->pedidoRepository->create($input);

        // Flash::success('Pedido saved successfully.');

        // return redirect(route('admin.pedidos.index'));
    }





    /**
     * Display the specified Pedido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedido = $this->pedidoRepository->findWithoutFail($id);

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado');

            return redirect(route('admin.pedidos.index'));
        }

        return view('admin.pedidos.show')->with('pedido', $pedido);
    }

    /**
     * Show the form for editing the specified Pedido.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedido = $this->pedidoRepository->findWithoutFail($id);

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado');

            return redirect(route('admin.pedidos.index'));
        }
        $estados = Estado::pluck('nombre','id');

        return view('admin.pedidos.edit',compact('estados'))->with('pedido', $pedido);
    }

    /**
     * Update the specified Pedido in storage.
     *
     * @param  int              $id
     * @param UpdatePedidoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePedidoRequest $request)
    {
        $pedido = $this->pedidoRepository->findWithoutFail($id);

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado');

            return redirect(route('admin.pedidos.index'));
        }

        $pedido = $this->pedidoRepository->update($request->all(), $id);

        Flash::success('Pedido actualizado.');

        return redirect(route('admin.pedidos.index'));
    }

    /**
     * Remove the specified Pedido from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedido = $this->pedidoRepository->findWithoutFail($id);

        if (empty($pedido)) {
            Flash::error('Pedido no encontrado');

            return redirect(route('admin.pedidos.index'));
        }

        $this->pedidoRepository->delete($id);

        Flash::success('Pedido borrado.');

        return redirect(route('admin.pedidos.index'));
    }


    

    
}
