<?php

namespace App\Http\Controllers;

//DECLAREMOS EL USO DEL CONTROLADOR
use App\Http\Controllers\Controller;

//HABILITAMOS EL REQUEST
use Illuminate\Http\Request;

//HABILITAMOS LOS MODELOS AH OCUPAR
use App\Models\Apoyo;

class ApoyoController extends Controller
{
    //CONSTRUCTOR DE LA CLASE
    public function __construct()
    {
    }

    //<----- FUNCION PARA MOSTRAR LA VISTA DE REGISTRO DEL APOYO ------>
    public function ver_apoyo()
    {
        return view('registroApoyo');

    }

    //<----- FUNCION PARA INSERTAR VALORES EN LA BASDE DE DATOS ----->
    public function insertar_apoyo(Request $request)
    {
        $fecha_apoyo =  $request->input('Fecha_Apoyo');
        $ubicacion = $request->input('Ubicacion');
        $observaciones = $request->input('Observaciones');

        Apoyo::create([
            'fecha_apoyo' => $fecha_apoyo,
            'ubicacion' => $ubicacion,
            'observaciones' => $observaciones
        ]);

        return redirect()->to('registroApoyo');
    }

    //<----- FUNCION DE CONSULTA PARA VER LOS APOYOS ----->
    public function ver_apoyos()
    {
        $apoyos = Apoyo::all();

        return response()->json($apoyos);
    }

    //<----- FUNCION PARA MOSTRAR LA VISTA EDITAR ----->
    public function ver_editar_apoyo($id)
    {
        $apoyo = Apoyo::select(
            'id_apoyo',
            'fecha_apoyo',
            'ubicacion',
            'observaciones')->where('id_apoyo',$id)->first();

        //return response()->json($apoyo);
        return view('/actualizarApoyo')->with('apoyo',$apoyo);
    }

    //<----- FUNCION PARA ACTUALIZAR UN REGISTRO ----->
    public function actualizar_apoyo(Request $request, $id)
    {
        $fecha_apoyo = $request->input('Fecha_Apoyo');
        $ubicacion = $request->input('Ubicacion');
        $observaciones = $request->input('Observaciones');

        Apoyo::where('id_apoyo',$id)->update([
            'fecha_apoyo'=>$fecha_apoyo,
            'ubicacion'=>$ubicacion,
            'observaciones'=>$observaciones
        ]);

        return redirect()->to('/registroApoyo');

    }

    //<----- FUNCION PARA ELIMINAR UN REGISTRO ----->
    public function eliminar_apoyo($id)
    {
        $eliminar = Apoyo::where('id_apoyo',$id)->delete();

        return response()->json("Eliminado Satisfactoriamente");

    }



}
