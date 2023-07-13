<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Models\Accesslevel;
use App\Models\Courses;

class Estudante_Controle extends Controller
{ 
    public function index(Student $student)
    {
      
        $student1 = $student ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

         
        return view('utils/estudante/index', compact('student1'));

    }
    public function enviar()
    {
        $ad= Courses::all();
        return view('utils/estudante/cadastro', compact('ad'));

    }
    public function cadastro(Request $request)
    {
        Student::create($request->all());

        return redirect()->Route('estudante.msg');

    }
    public function msg()
    {
        return view('utils/estudante/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Student::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        $ad= Courses::all();  

        return view('utils/estudante/editar', compact('resultado', 'ad'));
    } 
    public function detalhe(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Student::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        
        return view('utils/estudante/detalhe', compact('resultado'));
    } 
    public function update(Request $request, Student $student, string $id)
    {
        
        if(!$resultado = $student ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->course_id = $request->course_id;
        $resultado->name = $request->name;
        $resultado->email = $request->email;
        $resultado->contact = $request->contact;
        $resultado->access_level = $request->access_level;
        $resultado->code = $request->code;
        $resultado->save();
        
        return redirect()-> Route('estudante.msg_A');
    } 
    public function Delete(string|int $id){
        if(!$resultado = Student::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('estudante.msg_D');
    }
    public function msg_A()
    {
        return view('utils/estudante/msg_A');
    }

    public function msg_D()
    {
        return view('utils/estudante/msg_D');
    } 
}

?>

