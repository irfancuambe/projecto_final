<?php

namespace App\Http\Controllers;

use App\Models\Supervisors;
use App\Models\Courses;
use Illuminate\Http\Request;

class SuperControle extends Controller
{
    public function index(Supervisors $Supervisors)
    {
        $Super1 = $Supervisors ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

        return view('utils/supervisor/index', compact('Super1'));

    }
    public function enviar()
    {
        $curso= Courses::all();
        return view('utils/supervisor/cadastro', compact('curso'));
    }
    public function cadastro(Request $request)
    {
        Supervisors::create($request->all());

        return redirect()->Route('super.msg');

    }
    public function msg()
    {
        return view('utils/supervisor/msg');
    } 
    public function editar(string|int $id)
    {
        //$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Supervisors::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        $ad= Courses::all(); 

        return view('utils/supervisor/editar', compact('resultado', 'ad'));
    } 
    public function detalhe(string|int $id)
    {
        ///$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Supervisors::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }
        
        return view('utils/supervisor/detalhe', compact('resultado'));
    } 
    public function update(Request $request, Supervisors $Supervisors, string $id)
    {
        
        if(!$resultado = $Supervisors ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->course_id = $request->course_id;
        $resultado->name = $request->name;
        $resultado->email = $request->email;
        $resultado->contact = $request->contact;
        $resultado->code = $request->code;
        $resultado->save();
        
        return redirect()-> Route('super.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Supervisors::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('super.msg_D');
    }
    public function msg_A()
    {
        return view('utils/supervisor/msg_A');
    }

    public function msg_D()
    {
        return view('utils/supervisor/msg_D');
    } 
}
