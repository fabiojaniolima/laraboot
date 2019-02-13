<?php

namespace App\Http\Controllers\Panel\ManageUsers;

use App\Models\User;
use App\Http\Controllers\Controller;

class ManageUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('panel.manage-users.show', compact('user'));
    }

    /**
     * Bloqueia ou ligera um usuário para acesso a aplicação.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeStatus(User $user)
    {
        $user->update(['locked' => ! $user->locked]);

        return redirect('/painel/gerenciar-usuarios')
            ->with(['status' => 'success', 'msg' => 'O status do Usuário: "'.$user->name.'" alterado com sucesso!']);
    }

    /**
     * Exclui o usuário do banco de dados.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/painel/gerenciar-usuarios')
                    ->with(['status' => 'success', 'msg' => 'O usuário: "'.$user->name.'" foi excluido com sucesso!']);
    }
}
