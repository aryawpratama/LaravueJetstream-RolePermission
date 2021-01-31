<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user()->getRoleNames();
        // dd($user);
        if($user[0] === 'admin'){
            return redirect('/admin');
        } else {
            return redirect('/user');
        }
    }
}
