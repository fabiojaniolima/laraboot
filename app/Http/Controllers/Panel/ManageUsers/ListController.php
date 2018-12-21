<?php

namespace App\Http\Controllers\Panel\ManageUsers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate();

        return view('panel.manage-users.manage-users', compact('users'));
    }

    /**
     * Retorna uma lista de usuários conforme critérios de entrada.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $users = User::where('name', 'like', "%$request->search%")
                    ->orWhere('email', 'like', "%$request->search%")
                    ->orderBy('created_at', 'desc')
                    ->paginate();

        $filter = $request->search;

        return view('panel.manage-users.manage-users', compact('users', 'filter'));
    }
}
