<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoApiController extends Controller
{
    public function index()
    {
        $productos =Producto::all();
        return $productos->map(function($producto){
            return [
                'id'=> $producto->id,
                'nombre'=> $producto->producto,
                'descripcion'=> $producto->descripcion,
                'precio'=> $producto->precio,
                'url' => route('api.productos.show', $producto)
            ];
        });

        return response([
            'meta'=> [
                'count'=> $data-> count(),
                'path'=> route('api.productos.index')
            ],
            'data'=> $data,
// devuelve el codigo si esta ok
        ],201);
    }
// para no mostrar todos los datos
    public function show(Producto $producto)
    {
        return[
            'meta'=>[
                'path'=> route('api.productos.show',$producto),
                'resouce'=>route('api.productos.index'),
            ],
            'data'=>[
                'id'=> $producto->id,
                'nombre'=> $producto->nombre,
                'descripcion'=> $producto->descripcion,
                'precio'=> $producto->precio
            ]
        ];
    }
    public function store()
    {
        $producto=Producto::create([
            'nombre'=>request()->nombre,
            'descripcion'=>request()->descripcion,
            'precio'=>request()->precio
        ]);
        return response([
            "meta"=>[
                "mensaje"=>"Se creó el producto $producto->nombre",
                "codigo"=>201
            ],
            'data'=> $producto
        ],201);     
    }
// ACTUALIZAR UPDATE PUEDE QUE NO ENTREGUEN TODOS LOS DATOS. VER EL FILLABLE.

    public function update(Producto$producto){
        $producto->update(request()->all());
        return response([
            "meta"=>[
                "mensaje"=>"Se actualizó el producto $producto->nombre",
                "codigo"=> 201
            ],
            'data'=> $producto
        ],201);
        
    }
// BORRAR UN PRODUCTO
    public function destroy(Producto$producto){
        $producto->delete();
        return response([
            "meta"=>[
                "mensaje"=>"Se borró el producto $producto->nombre",
                "codigo"=> 201
            ],
            'data'=> $producto
        ],201);
        
    }

}
