<?php

namespace App\Http\Controllers;

use App\Guia;
use App\Reserva;
use App\Comision;
use App\Distrito;
use App\Comunidad;
use App\Proveedor;
use App\Provincia;
use App\ReservaGuia;
use App\Departamento;
use App\ReservaComida;
use App\ReservaServicio;
use App\ReservaActividad;
use App\ReservaHospedaje;
use App\ReservaTransporte;
use App\TransporteExterno;
use Illuminate\Http\Request;
use App\ReservaTransporteExterno;

class ReservaController extends Controller
{
    //
    public function lista(){
        $reservas_close=Reserva::where('estado','>=','0')->get();
        $departamentos =Departamento::get();
        $provincias =Provincia::get();
        $distritos =Distrito::get();
        $comunidades = Comunidad::get();
        return view('admin.reserva.lista',compact('reservas_close','departamentos','provincias','distritos','comunidades'));
    }
    public function detalle($reserva_id){
        $reserva=Reserva::findOrFail($reserva_id);
        $comisiones=Comision::get();
        $transporte_externo=TransporteExterno::get();
        $guiado=Guia::get();
        $proveedores=Proveedor::get();

        $departamentos =Departamento::get();
        $provincias =Provincia::get();
        $distritos =Distrito::get();
        $comunidades = Comunidad::get();
        return view('admin.reserva.detalle',compact('reserva','comisiones','transporte_externo','guiado','proveedores','reserva_id','departamentos','provincias','distritos','comunidades'));
    }
    public function confirmar($tipo_servicio,$grupo_id,$estado){
        // try {
            //code...

            if($tipo_servicio=='actividad'){
                $temp=ReservaActividad::find($grupo_id);
                $temp->estado=$estado;
                $temp->save();
            }
            if($tipo_servicio=='comida'){
                $temp=ReservaComida::find($grupo_id);
                $temp->estado=$estado;
                $temp->save();
            }
            if($tipo_servicio=='hospedaje'){
                $temp=ReservaHospedaje::find($grupo_id);
                $temp->estado=$estado;
                $temp->save();
            }
            if($tipo_servicio=='transporte'){
                $temp=ReservaTransporte::find($grupo_id);
                $temp->estado=$estado;
                $temp->save();
            }
            if($tipo_servicio=='servicio'){
                $temp=ReservaServicio::find($grupo_id);
                $temp->estado=$estado;
                $temp->save();
            }
            if($tipo_servicio=='TRANSPORTE'){
                $temp=ReservaTransporteExterno::find($grupo_id);
                $temp->estado=$estado;
                $temp->save();
            }
            if($tipo_servicio=='GUIA'){
                $temp=ReservaGuia::find($grupo_id);
                $temp->estado=$estado;
                $temp->save();
            }
            if($estado==1){
                $estado_rpt=0;
                $clase_span='badge-success';
                $estado_span='Confirmado';
                $clase_confirmar='btn-danger';
                $estado_confirmar='Cancelar';
            }
            elseif($estado==0){
                $estado_rpt=1;
                $clase_span='badge-dark';
                $estado_span='Pendiente';
                $clase_confirmar='btn-primary';
                $estado_confirmar='Confirmar';
            }

            return response()->json(['rpt'=>'1',
                                    'estado'=>$estado,
                                    'clase_span'=>$clase_span,
                                    'estado_span'=>$estado_span,
                                    'clase_confirmar'=>$clase_confirmar,
                                    'estado_confirmar'=>$estado_confirmar]);
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return response()->json(['rpt'=>'0']);
        // }
    }
    public function confirmar_reserva($tipo_servicio,$grupo_id,$estado,$nuevo_estado){
        // try {
        //code...

        if($tipo_servicio=='actividad'){
            $temp=ReservaActividad::find($grupo_id);
            $temp->estado=$nuevo_estado;
            $temp->save();
        }
        if($tipo_servicio=='comida'){
            $temp=ReservaComida::find($grupo_id);
            $temp->estado=$nuevo_estado;
            $temp->save();
        }
        if($tipo_servicio=='hospedaje'){
            $temp=ReservaHospedaje::find($grupo_id);
            $temp->estado=$nuevo_estado;
            $temp->save();
        }
        if($tipo_servicio=='transporte'){
            $temp=ReservaTransporte::find($grupo_id);
            $temp->estado=$nuevo_estado;
            $temp->save();
        }
        if($tipo_servicio=='servicio'){
            $temp=ReservaServicio::find($grupo_id);
            $temp->estado=$nuevo_estado;
            $temp->save();
        }
        if($tipo_servicio=='TRANSPORTE'){
            $temp=ReservaTransporteExterno::find($grupo_id);
            $temp->estado=nuevo_estado;
            $temp->save();
        }
        if($tipo_servicio=='GUIA'){
            $temp=ReservaGuia::find($grupo_id);
            $temp->estado=nuevo_estado;
            $temp->save();
        }
        if($nuevo_estado==1){
            $estado_rpt=1;
            $clase_span='badge-success';
            $estado_span='Confirmado';
            $clase_confirmar='btn-success';
            $estado_confirmar='Confirmar';
        }
        elseif($nuevo_estado==0){
            $estado_rpt=1;
            $clase_span='badge-dark';
            $estado_span='Pendiente';
            $clase_confirmar='btn-dark';
            $estado_confirmar='Confirmar';
        }
        elseif($nuevo_estado==2){
            $estado_rpt=1;
            $clase_span='badge-danger';
            $estado_span='Anulado';
            $clase_confirmar='btn-danger';
            $estado_confirmar='Confirmar';
        }

        return response()->json(['rpt'=>'1',
            'estado'=>$estado,
            'clase_span'=>$clase_span,
            'estado_span'=>$estado_span,
            'clase_confirmar'=>$clase_confirmar,
            'estado_confirmar'=>$estado_confirmar]);
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return response()->json(['rpt'=>'0']);
        // }
    }
    public function escojer_proveedor(Request $request){
        // try {
            //code...
            // return response()->json(['rpt'=>$request->all()]);
            $transporte_externo_guia_id=$request->input('transporte_externo_guia_id');
            $proveedor_id_pago=$request->input('proveedor_id_pago');
            $precio_pago=$request->input('precio_pago');
            $fecha_pago=$request->input('fecha_pago');
            $rol=$request->input('rol');
            if($rol=='TRANSPORTE'){
                $rexterna=ReservaTransporteExterno::find($transporte_externo_guia_id);
                $rexterna->proveedor_id=$proveedor_id_pago;
                $rexterna->fecha_pago=$fecha_pago;
                $rexterna->precio_reserva=$precio_pago;
                if($rexterna->save())
                    return response()->json(['rpt'=>'1']);
                else
                    return response()->json(['rpt'=>'0']);

            }
            else if($rol=='GUIA'){
                $gexterna=GuiaTransporteExterno::find($transporte_externo_guia_id);
                $gexterna->proveedor_id=$proveedor_id_pago;
                $gexterna->fecha_pago=$fecha_pago;
                $gexterna->precio_reserva=$precio_pago;
                if($gexterna->save())
                    return response()->json(['rpt'=>'1']);
                else
                    return response()->json(['rpt'=>'0']);
            }

        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return response()->json(['rpt'=>'0']);
        // }
    }

    public function getReserva(Request $request){
        $valor=$request->input('valor');
        // return response()->json([$request->all()]);
        if(trim($valor)!=''){
        $reserva=Reserva::where('codigo',$valor)->orwhere('nombre','like',"%$valor%")->get();
            return view('admin.reserva.get-busqueda',compact('reserva'));
        }
    }

}
