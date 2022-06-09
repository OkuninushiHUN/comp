<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Auth;
use Illuminate\Http\Response;

class PublicController extends Controller
{
    public function index(){

        return view('public.index',['userSeeder'=>User::all()]);
    }

}
