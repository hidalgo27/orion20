<?php

namespace App\Http\Controllers;

use App\Product;
use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
    public function getunidad(){
        $unidades =Unit::all();
        return view('admin.unidad.lista',compact('unidades'));
    }
    public function nuevo(){
        return view('admin.unidad.nuevo');
    }
    public function store(Request $request){
        $nombre=$request->input('nombre');
        // $state=$request->input('state');
        $existencias=Unit::where('name',$nombre)->count();

        if($existencias>0){
            return redirect()->back()->with('error','La unidad ya existe')->withInput();
        }
        else{
            $brand=new Unit();
            $brand->name=$nombre;
            $brand->state=1;
            $brand->save();
            // Alert()->success('Datos guardados.')->autoclose(3000);
            return redirect()->route('unidad_nuevo_path')->with('success','Datos guardados');

        }
    }

    public function editar(Request $request){
        $nombre=$request->input('nombre');
        $id=$request->input('id');
        // dd($fotosExistentes);

        $brand=Unit::find($id);
        $brand->name=$nombre;
        $brand->state=1;
        $brand->save();

        return redirect()->route('unidad_lista_path')->with('success','Datos editados');
    }
    public function getDelete($id){
        $brand=Unit::find($id);
        $products=Product::where('unity_id',$id)->count('id');
        if($products>0){
            return 2;
        }
        else{
            if($brand->delete())
                return 1;
            else
                return 0;
        }
    }
}
