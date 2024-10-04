<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{

    public function create()
    {
        return view('medicos.cadastro');
    }


    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'cm' => 'required|integer|unique:medicos,cm',
            'nome' => 'required|string|max:100',
            'nascimento' => 'required|date',
            'email' => 'required|email|max:100',
            'endereco' => 'required|string|max:100',
            'status' => 'required|string|max:100',
            'formacao' => 'required|string|max:100',
            'contratacao' => 'required|date',
        ]);

        // Criação do médico
        Medico::create($validatedData);

        // Redireciona para o dashboard após o cadastro
        return redirect()->route('medicos.dashboard')->with('success', 'Médico cadastrado com sucesso!');
    }

    public function dashboard()
    {
        if (!session()->has('medico')) {
            return redirect()->route('medicos.login')->with('error', 'Você precisa estar logado para acessar o dashboard.');
        }
    
        $medicos = Medico::all();
        return view('medicos.dashboard', compact('medicos'));
    }


    public function login()
    {
        return view('medicos.login');
    }

    /**
     * Autentica o médico com base no CM e email.
     */
    public function authenticate(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'cm' => 'required|integer',
            'email' => 'required|email',
        ]);

        // Verifica se o médico existe com os dados fornecidos
        $medico = Medico::where('cm', $request->cm)->where('email', $request->email)->first();

        if ($medico) {
            // Autentica o médico (pode-se usar sessões ou tokens dependendo do sistema)
            // Aqui, por simplicidade, vamos simular a autenticação
            // Você pode querer armazenar os dados do médico na sessão, por exemplo
            session(['medico' => $medico]);

            // Redireciona para o dashboard após o login
            return redirect()->route('medicos.dashboard')->with('success', 'Login realizado com sucesso!');
        }

        // Se não encontrar, redireciona de volta com uma mensagem de erro
        return back()->withErrors([
            'login' => 'CM ou email incorretos.',
        ]);
    }
}