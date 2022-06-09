<?php

namespace App\Http\Controllers;

use App\Models\competitions;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CompetitionsController extends Controller
{

    public function showFinished()
    {
        $date = date("Y-m-d");
        $list[] = DB::table('competitions')->where('date','<',$date)
            -> orderBy('date')->get();
        if (Auth::user() != null){
            $user = Auth::user();
            return view('private.cNotFinished',['list' => $list, 'user'=>$user]);
        }
        return view('public.finished', [
            'list' => $list
        ]);
    }
    public function showNotFinished(){
        $date = date("Y-m-d h:i:s");
        $list[] = DB::table('competitions')->where('date',">",$date)->orderBy('date')->get();
        if (Auth::user() != null){
            $user = Auth::user();
            return view('private.cNotFinished',['list' => $list, 'user'=>$user]);
        }
        return view('public.cNotFinished', ['list' => $list]);
    }
    public function open(){
        $list[] =DB::table('competitions')->where('full',"=",null)->orderBy('date')->get();
        if (Auth::user() != null){
            $user= Auth::user();
            return view('private.cNotFinished',['list' => $list, 'user'=>$user]);
        }
        return view('public.cNotFinished', ['list' => $list]);
    }
    public function create(){
        return view('private.create');
    }
    public function store(Request $request){
        $competition = new competitions();

        $competition->location = $request['location'];
        $competition->date = $request['date'];
        $competition->deadline = $request['deadline'];
        $competition->max_participants = $request['max_participants'];
        $competition->creator_id=Auth::user()->id;
        $competition->save();

        return view('private.home');

    }
    public function details($id){
        $data = DB::table('participants')
            ->leftJoin('users','participants.user_id',"=","users.id")
            ->where('competitions_id',"=", $id)
            ->get();
        return view('private.details',['list'=>$data,'id'=>$id]);
    }
    public function join($id){
        $user_id= (Auth::user()->id);
        $data = DB::table('participants')
            ->where('competitions_id','=',$id,'and')
            ->where('user_id','=', $user_id)
            ->get();
        if(count($data)==0){
            DB::table('participants')->insert(['competitions_id'=>$id,'user_id'=>$user_id]);
            DB::table('competitions')
                ->where('id', '=', $id)
                ->limit(1)
                ->increment('numberOFparticipants');
            return view('private.home');
        }

       //Todo write a massege you already in the compatitions
        return view('private.home');
    }


}
