<?php

namespace App\Http\Controllers;

use App\Models\Recepcionista;
use Illuminate\Http\Request;

class RecepcionistaController extends Controller
{
    public function create(){
        return view('recepcionistas.cadastro');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nome' => 'required|string|max:100|unique:recepcionistas,nome',
            'password' => 'required|string|min:6',
        ]);

        Recepcionista::create($validatedData);

        return redirect()->route('recepcionistas.dashboard')->with('success', 'Recepcionista cadastrado com sucesso!');
    }

    public function login(){
        return view('recepcionistas.login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'nome' => 'required|string',
            'password' => 'required|string',
        ]);

        // Verifica se o recepcionista existe com os dados fornecidos
        $recepcionista = Recepcionista::where('nome', $request->nome)->where('password', $request->password)->first();

        if ($recepcionista) {
            session(['recepcionista' => $recepcionista]);
            return redirect()->route('recepcionistas.dashboard')->with('success', 'Login realizado com sucesso!');
        }

        return back()->withErrors(['login' => 'Nome ou senha incorretos.']);
    }

    public function dashboard(){
        if (!session()->has('recepcionista')) {
            return redirect()->route('recepcionistas.login')->with('error', 'Você precisa estar logado para acessar o dashboard.');
        }

        $recepcionistas = Recepcionista::all();
        return view('recepcionistas.dashboard', compact('recepcionistas'));
    }

}