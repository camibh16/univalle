<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateEstadoRequest;
use App\Http\Requests\Admin\UpdateEstadoRequest;
use App\Repositories\Admin\EstadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstadoController extends AppBaseController
{
    /** @var  EstadoRepository */
    private $estadoRepository;

    public function __construct(EstadoRepository $estadoRepo)
    {
        $this->estadoRepository = $estadoRepo;
    }

    /**
     * Display a listing of the Estado.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estadoRepository->pushCriteria(new RequestCriteria($request));
        $estados = $this->estadoRepository->all();

        return view('admin.estados.index')
            ->with('estados', $estados);
    }

    /**
     * Show the form for creating a new Estado.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.estados.create');
    }

    /**
     * Store a newly created Estado in storage.
     *
     * @param CreateEstadoRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadoRequest $request)
    {
        $input = $request->all();

        $estado = $this->estadoRepository->create($input);

        Flash::success('Estado guardado.');

        return redirect(route('admin.estados.index'));
    }

    /**
     * Display the specified Estado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estado = $this->estadoRepository->findWithoutFail($id);

        if (empty($estado)) {
            Flash::error('Estado no encontrado');

            return redirect(route('admin.estados.index'));
        }

        return view('admin.estados.show')->with('estado', $estado);
    }

    /**
     * Show the form for editing the specified Estado.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estado = $this->estadoRepository->findWithoutFail($id);

        if (empty($estado)) {
            Flash::error('Estado no encontrado');

            return redirect(route('admin.estados.index'));
        }

        return view('admin.estados.edit')->with('estado', $estado);
    }

    /**
     * Update the specified Estado in storage.
     *
     * @param  int              $id
     * @param UpdateEstadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadoRequest $request)
    {
        $estado = $this->estadoRepository->findWithoutFail($id);

        if (empty($estado)) {
            Flash::error('Estado no encontrado');

            return redirect(route('admin.estados.index'));
        }

        $estado = $this->estadoRepository->update($request->all(), $id);

        Flash::success('Estado actualizado.');

        return redirect(route('admin.estados.index'));
    }

    /**
     * Remove the specified Estado from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estado = $this->estadoRepository->findWithoutFail($id);

        if (empty($estado)) {
            Flash::error('Estado no encontrado');

            return redirect(route('admin.estados.index'));
        }

        $this->estadoRepository->delete($id);

        Flash::success('Estado eliminado.');

        return redirect(route('admin.estados.index'));
    }
}
