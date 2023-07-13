<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CursoControle extends Controller
{
    public function index(Courses $curso)
    {
        $curso1 = $curso ->all();
        return view('utils/curso/index', compact('curso1'));
    }
    public function enviar()
    {
        return view('utils/curso/cadastro');
    }
    public function cadastro(Request $request)
    {
        Courses::create($request->all());

        return redirect()->Route('curso.msg');
    }
    public function view(string $id){

        if(!$resultado =Courses::find($id)){
            return back(); 
        }

        return view('utils/curso/view', compact('resultado'));

    }
    public function msg()
    {
        return view('utils/curso/msg');
    } 
    public function editar(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Courses::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }  
        return view('utils/curso/editar', compact('resultado'));
    } 
   
    public function update(Request $request, Courses $curso, string $id)
    {
        
        if(!$resultado = $curso ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->name = $request->name;
        $resultado->description = $request->description;
        $resultado->save();
        
        return redirect()-> Route('curso.msg_A');
    } 

    public function delete(string|int $id){
        if(!$resultado = Courses::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('curso.msg_D');
    }
    public function msg_A()
    {
        return view('utils/curso/msg_A');
    }

    public function msg_D()
    {
        return view('utils/curso/msg_D');
    }
}
