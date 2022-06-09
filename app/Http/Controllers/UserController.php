<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDestroyPostRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.userSeeder', [
            'userSeeder' => User::all()
        ]);
    }

    public function promote(Request $request){
        $user = User::find($request->id);
        $user->role = 'admin';
        $user->save();
        //todo message
        return redirect()->route('admin.userSeeder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDestroyPostRequest $request)
    {
        $user = User::find($request->id);
        $user->delete();
        //todo message
        return redirect()->route('admin.userSeeder');
    }
}
