<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Empresa;

class ProductosController extends Controller
{


     public function producto($id)
    {
        
        $empresas = Empresa::find($id);
        return view('web.taz.productos',compact('empresas'));
    }
}
