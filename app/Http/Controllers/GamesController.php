<?php

namespace App\Http\Controllers;
use App\Models\games;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;


class GamesController extends Controller
{
    public function winner( $id){
      /*  DB::table('games')->where('id','=',$id)
            ->update(games.winner)*/
    }
    public function draw($id){
        $data = DB::table('participants')
            ->leftJoin('userSeeder','participants.user_id',"=","userSeeder.id")
            ->where('competitions_id',"=", $id)
            ->get();

        $data->shuffle();
        if (count($data)%2==1){
            echo "baj van";
            //todo
        }

        for ($i = 0; $i < count($data)-1;$i+=2){
            $game = new games();
            $game->user_id1 = $data[$i]->user_id;
            $game->user_id2 = $data[$i+1]->user_id;
            $game->competition_id = $id;
            $game->save();
        }
        return $this->show($id);
    }
    public function show($id){
        $data = DB::table('games')
            ->where('competition_id', "=",$id)
            ->get();
        return view('public.games', ['list'=>$data]);
    }
}
