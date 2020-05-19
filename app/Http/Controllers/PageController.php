<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function viewlog(){
        return view('blog');
    }

    public function Contactme(){
        return view('Contact');
    }

    public function RegistrarEstudiante(){
        return view('RegistrarEstudiante');
    }

    public function RegisterUser(){

    }

    public function CrearEstudiante(Request $request){
      //  return $request->all();
      $EstudianteNuevo = new App\Estudiante;
      $EstudianteNuevo->Nombre = $request->TxtNombre;
      $EstudianteNuevo->Apellidos = $request->TxtApellidos;
      $EstudianteNuevo->Email = $request->TxtEmail;
      $EstudianteNuevo->Telefono = $request->TxtTelefono;
      $EstudianteNuevo->Programa = $request->CntrolPrograma;
      $EstudianteNuevo->save();

      return back()->with('alerta', 'Estudiante Kuepa Creado!!');

    }

    public function TestDB($nombre = null){
        $Estudiantes = App\Estudiante::all();
        $users = ['Pepito1','Pepito2','Pepito3'];
        return view('TestDB',compact('users', 'nombre', 'Estudiantes'));
    }
}
