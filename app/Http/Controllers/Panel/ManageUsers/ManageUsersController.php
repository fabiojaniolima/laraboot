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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('panel.manage-users.show', compact('user'));
    }
}
