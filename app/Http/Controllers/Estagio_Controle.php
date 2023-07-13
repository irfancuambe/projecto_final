<?php

namespace App\Http\Controllers;

use App\Models\Entities;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Internships;
use App\Models\Supervisors;
use App\Http\Controllers\Controller;
use App\Models\Courses;

class Estagio_Controle extends Controller
{  
    public function index(Internships $internship)
    {
      
        $internship1 = $internship ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

         
        return view('utils/estagio/index', compact('internship1'));

    }
    public function enviar()
    {
        $super1 = Supervisors::all();
        $empresa = Entities::all();
        $estudante = Student::all();
        $curso = Courses::all();

        return view('utils/estagio/cadastro', compact('super1','curso', 'empresa', 'estudante'));
    }
    public function cadastro(Request $request)
    {
        
        Internships::create($request->all());

        return redirect()->Route('estagio.msg');

    }
    
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Internships::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
            $super1 = Supervisors::all();
            $empresa = Entities::all();
            $estudante = Student::all();
            $curso = Courses::all();
           
        return view('utils/estagio/editar', compact('super1','curso', 'empresa', 'estudante', 'resultado'));
    } 
    public function view(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Internships::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        return view('utils/estagio/view', compact('resultado'));
    } 
    public function update(Request $request, Internships $internship, string $id)
    {
        
        if(!$resultado = $internship ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->student_id = $request->student_id;
        $resultado->supervisor_id = $request->supervisor_id;
        $resultado->entitie_id = $request->entitie_id;
        $resultado->course_id = $request->course_id;
        $resultado->place = $request->place;
        $resultado->start_date = $request->start_date;
        $resultado->end_date = $request->end_date;
        $resultado->status = $request->status;
        $resultado->save();
        
        return redirect()-> Route('estagio.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Internships::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('estagio.msg_D');
    }
    public function msg_A()
    {
        return view('utils/estagio/msg_A');
    }
    public function msg()
    {
        return view('utils/estagio/msg');
    } 

    public function msg_D()
    {
        return view('utils/estagio/msg_D');
    }



   
}

?>

