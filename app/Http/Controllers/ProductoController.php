<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{

    public function getIndex(){
        $arrayProductos =  Producto::all();

        return view('productos.index', array('arrayProductos'=>$arrayProductos));
    }

    public function getShow($id){
        $producto = Producto::findOrFail($id);

        if ($producto-> pendiente == 0){
            $boton = "Comprar";
        }else{
            $boton = "Comprado";
        }
        return view('productos.show', array('id'=>$id,'producto'=>$producto,'boton'=>$boton));
    }

    public function getCreate(){
        return view('productos.create');
    }

    public function getEdit($id){
        $producto = Producto::findOrFail($id);
        return view('productos.edit', array('producto'=>$producto));
    }


}
