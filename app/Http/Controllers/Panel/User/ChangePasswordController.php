<?php

namespace App\Http\Controllers\Panel\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     * Apresenta o formulário para redefinição de senha.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.user.change-password');
    }

    /**
     * Efetua a alteração da senha.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'senha_atual' => 'required|string',
            'nova_senha' => 'required|string|confirmed|min:'.User::$min_password_size,
        ]);

        if (! Hash::check($request->input('senha_atual'), Auth::user()->password)) {
            return back()->withErrors(['senha_atual' => 'Senha atual incorreta!']);
        }

        // Faz uma comparação binária para determinar se a senha atual e nova são iguais
        if (! strcmp($request->input('senha_atual'), $request->input('nova_senha'))) {
            return back()
                    ->withErrors(['nova_senha' => 'Você já está utilizando essa senha! Escolha outra.'])
                    ->withInput($request->toArray());
        }

        Auth::user()->fill([
            'password' => Hash::make($request->input('nova_senha')),
        ])->save();

        return redirect(route('dashboard'))
                    ->with(['status' => 'success', 'msg' => 'Senha alterada com sucesso!']);
    }
}
