<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function __construct()
     {
        $this->middleware('EsAdmin');
     }

    public function index()
    {
        
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            "Seccion" => "required",
            "NombreArticulo" => "required",
            "Precio" => "numeric"
        ]);


        /* $producto = new Producto();
        $producto->NombreArticulo = $request->NombreArticulo;
        $producto->Seccion = $request->Seccion;
        $producto->Precio = $request->Precio;
        $producto->PaisOrigen = $request->PaisOrigen;
        $producto->Fecha = $request->Fecha;
        $producto->save();*/
        $formulario = $request->all();
        if ($archivo = $request->file('imagen')) {
            $nombre = $archivo->getClientOriginalName();
            $archivo->move('images', $nombre);
            $formulario['Ruta'] = $nombre;
        }
        Producto::create($formulario);
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $request->validate([
            "Seccion" => "required",
            "NombreArticulo" => "required",
            "Precio" => "numeric"
        ]);
        $producto = Producto::find($id);
        $producto->update($request->all());
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/productos');
    }
}
