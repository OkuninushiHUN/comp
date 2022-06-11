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
        $date =DB::table('competition')->where('id','=',$id)->get();
        if (date('Y-m-d H:i:s')==$date->date) {
            $data = DB::table('participants')
                ->leftJoin('user', 'participants.user_id', "=", "users.id")
                ->where('competitions_id', "=", $id)
                ->get();

            $data->shuffle();
            if (count($data) % 2 == 1) {
                for ($i = 1; $i < count($data) - 1; $i += 2) {
                    $game = new games();
                    $game->user_id1 = $data[$i]->user_id;
                    $game->user_id2 = $data[$i + 1]->user_id;
                    $game->competition_id = $id;
                    $game->save();
                }
            }

            for ($i = 0; $i < count($data) - 1; $i += 2) {
                $game = new games();
                $game->user_id1 = $data[$i]->user_id;
                $game->user_id2 = $data[$i + 1]->user_id;
                $game->competition_id = $id;
                $game->save();
            }

            return $this->show($id);
        }
        else{
            //todo Not today;
        }
        return $this->show($id);
    }

    public function show($id){
        $list = DB::table('games')
            ->where('competitions_id', "=",$id)
            ->get();
        return view('public.games',['list'=>$list]);
    }
    public function data($id){
        $data = DB::table('games')
            ->where('id', "=",$id)
            ->limit(1)
            ->get();
        return $data;

    }
}
