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

        if ($user->dt_birth) {
            $user->dt_birth = \DateTime::createFromFormat('Y-m-d', $user->dt_birth)->format('d/m/Y');
        }

        return view('painel.user.change-user-profile', compact('user'));
    }

    public function changeUserProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'profession' => 'min:3|nullable',
            'biography' => 'min:20|nullable',
            'gender' => 'required|in:F,M,Não declarado',
            'dt_birth' => 'date_format:d/m/Y',
        ]);

        //Converte a data para o formato nativo do banco
        $request->merge(
            ['dt_birth' => \DateTime::createFromFormat('d/m/Y', $request->input('dt_birth'))->format('Y-m-d')]
        );

        Auth::user()->update($request->only(['name', 'profession', 'biography', 'gender', 'dt_birth']));

        return back()->with(['status' => 'success', 'msg' => 'Perfil alterado com sucesso!']);
    }
}
