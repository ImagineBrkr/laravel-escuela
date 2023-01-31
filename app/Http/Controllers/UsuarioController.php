<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Docente;
use App\Models\Tramite;

class UsuarioController extends Controller
{
    public function ingreso() {
        if(Session::has('usuario')) {
            Session::forget('usuario');
        }
        return view('Usuario.Login');
    }

    public function salir() {
        Session::forget('usuario');
        Session::forget('rol');
        return back();
    }

    public function registrar(Request $request) {
        $data = request()->validate([
            'codigo'=>'required|max:20',
            'nombres'=>'required|max:100',
            'dni'=>'required|min:8|max:8',
            'contraseña'=>'required|max:20'
        ], [
            'codigo.required'=>'El código no puede ser vacío',
            'codigo.max'=>'Máximo 20 caracteres para el código',
            'nombres.required'=>'Debe escribir los nombres',
            'nombres.max'=>'Máximo 100 caracteres para los nombres',
            'dni.required'=>'Debe ingresar el DNI',
            'dni.min'=>'El DNI debe tener 8 caracteres',
            'dni.max'=>'El DNI debe tener 8 caracteres',
            'contraseña.max'=>'Máximo 20 caracteres para la contraseña',
            'contraseña.required'=>'Debe indicar la contraseña'
        ]);
        try{
            $usuario = Usuario::where('DNI', '=', $request->dni)->get();
            if (count($usuario) > 0) {
                return back()->withErrors(['dni' => 'El DNI ingresado ya existe']);
            }
            $usuario = Usuario::where('codigo', '=', $request->codigo)->get();
            if (count($usuario) > 0) {
                return back()->withErrors(['codigo' => 'El código ingresado ya existe']);
            }
            DB::beginTransaction();
            $usuario = new Usuario();
            $usuario->codigo = $request->codigo;
            $usuario->contraseña = Hash::make($request->contraseña);
            $usuario->DNI = $request->dni;
            $usuario->nombres = $request->nombres;
            $usuario->tipoUsuario = $request->tipoUsuario;
            $usuario->save();
            if ($usuario->tipoUsuario == "Docente") {
                $docente = new Docente();
                $docente->idUsuario = $usuario->idUsuario;
                $docente->save();
            }         
            DB::commit();
        }   
        catch(\Exception $e)
        {
         dd($e);
            DB::rollback();
        }
        return redirect()->route('inicio');
    }

    public function registro() {
        if (Session::has('usuario')) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            if ($usuario->tipoUsuario == "Administrador") {
                return view('Usuario.registro');
            } else {
                return redirect()->route('ingreso');
            }
            
        } else {
            return redirect()->route('ingreso');
        }
    }
    
    public function verPerfil($id) {
        if (Session::get('usuario') == $id) {
            $usuario = Usuario::FindOrFail($id);
            Session::put('rol', $usuario->tipoUsuario);
            return view('Usuario.perfil', compact('usuario'));
        } else {
            return redirect()->route('ingreso');
        }
    }

    public function ingresar(Request $request) {
        $codigo = $request->codigo;
        $contraseña = $request->contraseña;
        $usuarios = Usuario::where('codigo', '=', $codigo)->get();
        if ($usuarios->count() != 0) {
            $hash = $usuarios[0]->contraseña;
            if (Hash::check($contraseña, $hash)) {
                Session()->regenerate();
                Session::put('usuario', $usuarios[0]->idUsuario);
                return redirect()->route('inicio');
            } else {
                return back()->withErrors(['contraseña'=>'Contraseña no válida']);
            }
        }
        else {
            return back()->withErrors(['codigo'=>'Usuario no encontrado']);
        }
    }

    public function verTramites($id) {
        if (Session::get('usuario') == $id) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            if ($usuario->tipoUsuario == "Estudiante") {
                $tramites = Tramite::where('idUsuario', '=', $id)->get();
                return view('Usuario.tramites', compact('usuario', 'tramites'));
            } else {
                return redirect()->route('ingreso');
            }
            
        } else {
            return redirect()->route('ingreso');
        }
    }

    //$usuario = new Usuario();
    //$usuario->nombres = "Salvattore Razzeto";
    //$usuario->codigo = "2233445566";
    //$usuario->contraseña = Hash::make('Sombrero0');
    //$usuario->tipoUsuario = "Administrador";
    //$usuario->DNI = "74466379";
    //$usuario->save();
    //return back();
}
