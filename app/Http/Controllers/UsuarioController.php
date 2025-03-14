<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadastrar(){
        return view('usuario.cadastrar');
    }

    public function salvar(Request $request){
        //dd($request);

        try{

            User::create([
                'name' => $request->nome,
                'email' => $request->email,
                'password' => $request->senha
            ]);
    
            return redirect()->route('usuario.cadastrar')->with('sucesso', 'Usuário cadastrado com sucesso!');

        }catch( Exception $e ){
            return back()->withInput()->with('erro', 'Usuário não cadastrado...');
        }
    }
}
