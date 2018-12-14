<?php

namespace App\Http\Controllers\Panel\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChangeUserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('panel.user.change-user-profile', compact('user'));
    }

    /**
     * Salva os dados do perfil do usuário.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function changeUserProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'profession' => 'min:3|nullable',
            'biography' => 'min:20|nullable',
            'gender' => 'required|in:F,M,Não declarado',
            'dt_birth' => 'required|date_format:d/m/Y',
        ], [
            'dt_birth.date_format' => 'O campo :attribute não corresponde ao formato dd/mm/yyyy',
        ], [
            'profession' => 'profissão',
            'biography' => 'biografia',
            'gender' => 'gênero',
            'dt_birth' => 'data de nascimento',
        ]);

        //Converte a data para o formato nativo do banco
        $request->merge(['dt_birth' => $request->dt_birth]);

        Auth::user()->update($request->only(['name', 'profession', 'biography', 'gender', 'dt_birth']));

        return back()->with(['status' => 'success', 'msg' => 'Perfil alterado com sucesso!']);
    }
}
