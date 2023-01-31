<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Comunicado;
use App\Models\Curso;
use App\Models\Investigacion;
use App\Models\Usuario;
use App\Models\Docente;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function index() {
        return view('index');
    }

    public function verNoticias() {
        if(Session::has('usuario')) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            Session::put('rol', $usuario->tipoUsuario);
        }
        $noticias = Noticia::All();
        return view('noticias', compact('noticias'));
    }

    public function mostrarNoticia($id) {
        $noticia = Noticia::FindOrFail($id);
        return view('verNoticia', compact('noticia'));       
    }

    public function agregarNoticia() {
        return view('agregarNoticia');
        if (Session::has('usuario')) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            if ($usuario->tipoUsuario == "Administrador" || $usuario->tipoUsuario == "Secretaría") {

            } else {
                return redirect()->route('ingreso');
            }        
        
        } else {
            return redirect()->route('ingreso');
        }
    }

    public function ingresarNoticia(Request $request) {
        $data = request()->validate([
            'titulo'=>'required|max:100',
            'resumen'=>'required|max:500',
            'descripcion'=>'required|max:3000',
        ], [
            'titulo.required'=>'El título no puede ser vacío',
            'titulo.max'=>'Máximo 100 caracteres para el título',
            'resumen.required'=>'Debe escribir el resumen',
            'resumen.max'=>'Máximo 500 caracteres para el resumen',
            'descripcion.required'=>'Debe ingresar la noticia',
            'descripcion.max'=>'Máximo 3000 caracteres para la noticia',
        ]);
        try{
            DB::beginTransaction();
            $noticia = new Noticia();
            $noticia->titulo = $request->titulo;
            $noticia->resumen = $request->resumen;
            $noticia->descripcion = $request->descripcion;
            $noticia->save();         
            DB::commit();
        }   
        catch(\Exception $e)
        {
         dd($e);
            DB::rollback();
        }
        return redirect()->route('noticias');
    }

    public function verCursos() {
        $cursos = Curso::All();
        return view('escuela.cursos', compact('cursos'));
    }

    public function verDocentes() {
        if(Session::has('usuario')) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            Session::put('rol', $usuario->tipoUsuario);
        }
        $docentes = DB::table('usuario as u')->join('docente as d', 'u.idUsuario', '=', 'd.idUsuario')->where('u.tipoUsuario', '=', 'Docente')->select('u.nombres', 'd.logros', 'u.idUsuario')->get();
        return view('escuela.docentes', compact('docentes'));
    }

    public function editarDocente($id) {
        if (Session::has('usuario')) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            if ($usuario->tipoUsuario == "Administrador" || $usuario->tipoUsuario == "Secretaría") {
                $docente = DB::table('usuario as u')->join('docente as d', 'u.idUsuario', '=', 'd.idUsuario')->where('u.tipoUsuario', '=', 'Docente')
                ->where('u.idUsuario', '=', $id)->select('u.nombres', 'd.logros', 'u.idUsuario')->First();
                return view('escuela.editarDocente', compact('docente'));
            } else {
                return redirect()->route('ingreso');
            }            
        } else {
            return redirect()->route('ingreso');
        }
    }

    public function updateDocente(Request $request, $id) {
        $data = request()->validate([
            'logros'=>'required|max:600',
        ], [
            'logros.required'=>'Los logros no puede ser vacío',
            'logros.max'=>'Máximo 600 caracteres para los logros',
        ]);
        try{
            DB::beginTransaction();
            $docente = Docente::FindOrFail($id);
            $docente->logros = $request->logros;
            $docente->save();         
            DB::commit();
        }   
        catch(\Exception $e)
        {
         dd($e);
            DB::rollback();
        }
        return redirect()->route('escuela.docentes');
    }

    public function verInvestigaciones() {
        if(Session::has('usuario')) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            Session::put('rol', $usuario->tipoUsuario);
        }
        $investigaciones = Investigacion::All();
        return view('escuela.investigaciones', compact('investigaciones'));
    }

    public function verComunicados() {
        if(Session::has('usuario')) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            Session::put('rol', $usuario->tipoUsuario);
        }
        $comunicados = Comunicado::All();
        return view('escuela.comunicados', compact('comunicados'));
    }

    public function mostrarComunicado($id) {
        $noticia = Comunicado::FindOrFail($id);
        return view('verNoticia', compact('noticia'));       
    }

    public function añadirComunicado() {
        if (Session::has('usuario')) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            if ($usuario->tipoUsuario == "Administrador" || $usuario->tipoUsuario == "Secretaría") {
                return view('escuela.añadirComunicado');
            } else {
                return redirect()->route('ingreso');
            }            
        } else {
            return redirect()->route('ingreso');
        }
    }

    public function ingresarComunicado(Request $request) {
        $data = request()->validate([
            'titulo'=>'required|max:100',
            'resumen'=>'required|max:500',
            'descripcion'=>'required|max:3000',
        ], [
            'titulo.required'=>'El título no puede ser vacío',
            'titulo.max'=>'Máximo 100 caracteres para el título',
            'resumen.required'=>'Debe escribir el resumen',
            'resumen.max'=>'Máximo 500 caracteres para el resumen',
            'descripcion.required'=>'Debe ingresar el comunicado',
            'descripcion.max'=>'Máximo 3000 caracteres para el comunicado',
        ]);
        try{
            DB::beginTransaction();
            $comunicado = new Comunicado();
            $comunicado->titulo = $request->titulo;
            $comunicado->resumen = $request->resumen;
            $comunicado->descripcion = $request->descripcion;
            $comunicado->save();         
            DB::commit();
        }   
        catch(\Exception $e)
        {
         dd($e);
            DB::rollback();
        }
        return redirect()->route('escuela.comunicados');
    }

    public function añadirInvestigacion() {
        if (Session::has('usuario')) {
            $usuario = Usuario::FindOrFail(Session::get('usuario'));
            if ($usuario->tipoUsuario == "Administrador" || $usuario->tipoUsuario == "Secretaría") {
                return view('escuela.añadirInvestigacion');
            } else {
                return redirect()->route('ingreso');
            }            
        } else {
            return redirect()->route('ingreso');
        }
    }

    public function ingresarInvestigacion(Request $request) {
        $data = request()->validate([
            'titulo'=>'required|max:100',
            'autor'=>'required|max:100',
            'descripcion'=>'required|max:300',
            'url'=>'required|max:100',
        ], [
            'titulo.required'=>'El título no puede ser vacío',
            'titulo.max'=>'Máximo 100 caracteres para el título',
            'autor.required'=>'El autor no puede ser vacío',
            'autor.max'=>'Máximo 100 caracteres para el autor',
            'descripcion.required'=>'Debe escribir la descripcion',
            'descripcion.max'=>'Máximo 300 caracteres para la descripcion',
            'url.required'=>'Debe ingresar el urk',
            'url.max'=>'Máximo 100 caracteres para el url',
        ]);
        try{
            DB::beginTransaction();
            $investigacion = new Investigacion();
            $investigacion->titulo = $request->titulo;
            $investigacion->descripcion = $request->descripcion;
            $investigacion->autor = $request->autor;
            $investigacion->url = $request->url;
            $investigacion->save();         
            DB::commit();
        }   
        catch(\Exception $e)
        {
         dd($e);
            DB::rollback();
        }
        return redirect()->route('escuela.investigaciones');
    }
}
