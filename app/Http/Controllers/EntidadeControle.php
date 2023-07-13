<?php

namespace App\Http\Controllers;

use App\Models\Entities;
use Illuminate\Http\Request;

class EntidadeControle extends Controller
{
    public function index(Entities $Entities)
    {
        $entidade1 = $Entities ->all(); // para pegar todos os dados na base de dados

         // dd($suporte1); // para divulgar os dados "vardump"

        return view('utils/entidade/index', compact('entidade1'));

    }
    public function enviar()
    {

        return view('utils/entidade/cadastro');
    }
    public function cadastro(Request $request)
    {
        Entities::create($request->all());

        return redirect()->Route('entidade.msg');

    }
    public function msg()
    {
        return view('utils/entidade/msg');
    } 
    public function editar(string|int $id)
    {
        //$resultado = Suporte::where('id', '$id')  where('colocar o atributo da tabela', 'o valor pra verificar')
            if(!$resultado = Entities::find($id)) // buscando os dados do id na base de dados suportes
            {
                return back(); // para voltar na mesma pagina
            }

        return view('utils/entidade/editar', compact('resultado'));
    } 
    
    public function update(Request $request, Entities $Entities, string $id)
    {
        
        if(!$resultado = $Entities ->find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }
        $resultado->name = $request->name;
        $resultado->operation_area = $request->operation_area;
        $resultado->email = $request->email;
        $resultado->contact = $request->contact;
        $resultado->save();
        
        return redirect()-> Route('entidade.msg_A');
    } 

    public function Delete(string|int $id){
        if(!$resultado = Entities::find($id)) // buscando os dados do id na base de dados suportes
        {
            return back(); // para voltar na mesma pagina
        }

        $resultado->delete();

        return redirect()-> Route('entidade.msg_D');
    }
    public function msg_A()
    {
        return view('utils/entidade/msg_A');
    }

    public function msg_D()
    {
        return view('utils/entidade/msg_D');
    } 

}
