<?php

namespace App\Http\Controllers\Painel;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlterarEmailController extends Controller
{
    /**
     * Apresenta o formulário para alteração de email.
     *
     * @return \Illuminate\View\Response
     */
    public function index()
    {
        return view('painel.alterar-email');
    }

    /**
     * Salva o novo email.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function alterarEmail(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|string|email|max:255|unique:users|confirmed',
        ]);

        if (! Hash::check($request->password, Auth::user()->password)) {
            return back()->withErrors(['password' => 'Senha atual incorreta!'])->withInput();
        }

        Auth::user()->fill([
            'email' => $request->email,
        ])->save();

        return back()->with(['status' => 'success', 'msg' => 'Alteração efetuada com sucesso!']);
    }
}
