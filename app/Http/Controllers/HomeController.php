<?php

namespace App\Http\Controllers;
use App\Models\Admin\Empresa;
use App\Models\Admin\Producto;
use App\Models\Admin\Pedido;
use App\Models\Admin\Estado;
use App\carrito;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        
        return view('home');
    }


    public function inicio()
    {
        $empresas = Empresa::all();
        return view('web.taz.index',compact('empresas'));
    }

}
