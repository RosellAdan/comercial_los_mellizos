<?php

namespace App\Http\Controllers;

use App\Models\venta;
use App\Models\detalleventa;
use App\Models\producto;
use Illuminate\Http\Request;

class detalleventacontroller extends Controller
{
    // public static $TIPO_PER = 2;

    public function create($codiv){
        $productos = producto::all();
//        return view('venta.detalle.create', ['productos'=>$productos, 'cod_venta'=>$cod_venta]);
        return view('venta.detalleventa.create', compact('productos', 'codiv'));
    }


    public function store(Request $request, $codiv){
        $codiprod = $request->input('producto');
        $producto = producto::findOrFail($codiprod);
        $detalleventa = new detalleventa();
        $detalleventa->codiprod = $codiprod;
        $detalleventa->codiv = $codiv;
        $detalleventa->cantidaventa = $request->input('cantidaventa');
        $detalleventa->precioventa = $producto->precio;
        $detalleventa->descripcionventa = $request->input('descripcionventa');

        $detalleventa->save();

        $venta = venta::findOrFail($codiv);
        $venta->precioventa = $venta->precioventa + ($detalleventa->cantidaventa*$detalleventa->precioventa);
        $venta->save();

        $producto->cantidadstock = $producto->cantidadstock - $detalleventa->cantidaventa;//($detallecompra->cantidadcompra*$detallecompra->preciocompra);
        $producto->save();

        return redirect()->route('venta.show', [$codiv]);


    }

    public function destroy($id){
        $detalleventa = detalleventa::findOrFail($id);
        $detalleventa->delete();

        $venta = venta::findOrFail($detalleventa->codiv);
        $venta->precioventa = $venta->precioventa - ($detalleventa->cantidaventa * $detalleventa->precioventa);
        $venta->save();

        $producto = producto::findOrFail($detalleventa->codiprod);
        $producto->cantidadstock = $producto->cantidadstock + $detalleventa->cantidaventa;//($detallecompra->cantidadcompra*$detallecompra->preciocompra);
        $producto->save();

        return redirect()->route('venta.show', [$venta->codiv]);
    }
}
