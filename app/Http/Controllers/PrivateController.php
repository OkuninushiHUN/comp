<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


class PrivateController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        return view('private.home', ['user'=>$user]);
    }
}
