<?php

namespace App\Http\Controllers\Panel;

use App\Models\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('locked')->get();

        $total_users = $users->count();

        $locked_users = $users->filter(function ($user) {
            return $user->locked == true;
        })->count();

        $active_users = $total_users - $locked_users;

        return view('panel.dashboard', compact('total_users', 'locked_users', 'active_users'));
    }
}
