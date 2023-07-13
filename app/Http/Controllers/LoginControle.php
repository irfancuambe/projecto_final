<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Supervisors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControle extends Controller
{
    public function autenticacao(Request $validar)
    {
        $validar->validate([
            'code'=> 'required',
            'password'=>'required'  
        ],[
            'code.required'=>'Código do estudante é obrigatório',
            'password.required'=>'password é obrigatório', 
        ]);

        //$estudante = Student::where('email', $validar->input('email'))->first();
        $estudante = Student::where('code', $validar->input('code'))
                    ->where('password', $validar->input('password'))
                    ->first();
        $supervisor = Supervisors::where('code', $validar->input('code'))
                    ->where('password', $validar->input('password'))
                    ->first();
        
       // dd($supervisor, $estudante);
       
        if ($supervisor) {
            // O usuário é um supervisor
            if ($supervisor->access_level === 'admin') {
                
                Auth::loginUsingId($supervisor->id);
                return redirect()->route('home');
            } elseif ($supervisor->access_level === 'normal') {
               
                Auth::loginUsingId($supervisor->id);
                return redirect()->route('home');
            } else {

                Auth::loginUsingId($supervisor->id);
                return redirect()->route('home');
            }
            
        } elseif ($estudante) {
            
            // O usuário é um estudante
            if ($estudante->access_level === 'normal') {
                Auth::loginUsingId($estudante->id);
                // Nível de acesso de administrador para estudante
                // Faça as ações apropriadas para estudante com nível de acesso de administrador
                return redirect()->route('home');
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Código ou Senha inválida.']); 
        }

    }
    public function logout()
    {
      
        Auth::guard('estudante')->logout();
        Auth::guard('super')->logout();
        return redirect()->route('login');
    }
    
    public function index(){

        return view('utils/index'); 
    }
    
}
