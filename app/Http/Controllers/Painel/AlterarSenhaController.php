<?php

namespace App\Http\Controllers\Painel;

use Auth;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlterarSenhaController extends Controller
{
    /**
     * Apresenta o formulário para redefinição de senha.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel.alterar-senha');
    }

    /**
     * Efetua a alteração da senha.
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function alterarSenha(Request $request)
    {
        $this->validate($request, [
            'senha_atual' => 'required|string',
            'nova_senha' => 'required|string|confirmed|min:'.User::$min_password_size,
        ]);

        if (! Hash::check($request->senha_atual, Auth::user()->password)) {
            return back()->withErrors(['senha_atual' => 'Senha atual incorreta!']);
        }

        // Faz uma comparação binaria para determinar se a senha
        // atual e nova são iguais
        if (! strcmp($request->senha_atual, $request->nova_senha)) {
            return back()->withErrors(['nova_senha' => 'Você já esta usando essa senha! Escolha outra.']);
        }

        Auth::user()->fill([
            'password' => Hash::make($request->nova_senha),
        ])->save();

        return back()->with(['status' => 'success', 'msg' => 'Alteração efetuada com sucesso!']);
    }
}
