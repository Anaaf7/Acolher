<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    private $apiUrl;

    public function __construct()
    {
        // Certifique-se que essa URL aponta para http://localhost:8001/api (ou a porta da sua API)
        $this->apiUrl = config('services.my_api.url');
    }

    public function showRegister()
    {
        return view('cadastro');
    }

    public function cadastrar(Request $request)
    {
        // 1. Preparamos a requisição como Multipart (necessário para arquivos)
        $pendingRequest = Http::asMultipart();

        // 2. Se houver uma foto, anexamos ela para enviar à API
        if ($request->hasFile('foto_perfil')) {
            $foto = $request->file('foto_perfil');
            $pendingRequest->attach(
                'foto_perfil', 
                file_get_contents($foto->getRealPath()), 
                $foto->getClientOriginalName()
            );
        }

        // 3. Enviamos todos os campos (Texto + Imagem anexada)
        $response = $pendingRequest->post($this->apiUrl . '/cadastrar', [
            'nome'         => $request->nome,
            'telefone'     => $request->telefone,    // Novo campo
            'cpf_cnpj'     => $request->cpf_cnpj,
            'endereco'     => $request->endereco,    // Novo campo
            'email'        => $request->email,
            'senha'        => $request->senha,
            'tipo_usuario' => $request->tipo_usuario ?? 'cliente', // Valor padrão caso não venha do form
            'instagram'    => $request->instagram,   // Novo campo
            'facebook'     => $request->facebook,    // Novo campo
            'descricao'    => $request->descricao,   // Novo campo
        ]);

        if ($response->failed()) {
            // Se der erro, volta com as mensagens da API
            return back()->withErrors($response->json()['mensagens'] ?? ['erro' => 'Falha no cadastro'])->withInput();
        }

        if ($response->successful()) {
            return redirect()->route('login.view')->with('res', 'Cadastro feito com sucesso!');
        }

        return back()->withErrors(['erro' => 'Ocorreu um erro inesperado.']);
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $response = Http::post($this->apiUrl . '/login', [
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        if ($response->successful()) {
            $dados = $response->json();
            
            session([
                'api_token' => $dados['token'],
                'user_nome' => $dados['nome'],
                'user_tipo' => $dados['tipo']
            ]);

            return redirect('/dashboard');
        }

        return back()->withErrors(['erro' => 'E-mail ou senha incorretos']);
    }
}