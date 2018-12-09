<?php

namespace App\Http\Controllers\Panel\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangeEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel.user.change-email');
    }

    /**
     * Efetua a alteração do email.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function changeEmail(Request $request)
    {
        $request->validate([
            'senha' => 'required',
            'email' => 'required|string|email|max:255|unique:users|confirmed',
        ]);

        if (! Hash::check($request->input('senha'), Auth::user()->getAuthPassword())) {
            return back()->withErrors(['senha' => 'Senha atual incorreta!']);
        }

        Auth::user()->fill([
            'email' => $request->input('email'),
        ])->save();

        return redirect(route('dashboard'))
                    ->with(['status' => 'success', 'msg' => 'Endereço de e-mail alterado com sucesso!']);
    }
}
