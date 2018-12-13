<?php

namespace App\Http\Controllers\Panel\ManageUsers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('panel.manage-users.show', compact('user'));
    }

    /**
     * Exclui o usuário do banco de dados.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/painel/gerenciar-usuarios')
                    ->with(['status' => 'success', 'msg' => 'Usuário: "' . $user->name . '" foi excluido com sucesso!']);
    }
}
