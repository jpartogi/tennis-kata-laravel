<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use App\Repositories\PlayerInterface;
use App\Player;

class TennisController extends BaseController
{

	public function get_score($player1Name, $player2Name)
	{
		$player1 = Player::where('name', $player1Name)->get()->first();
		$player2 = Player::where('name', $player2Name)->get()->first();

		$score1 = $player1->score;
		$score2 = $player2->score;

		$tennis_score = new \App\TennisScore($score1, $score2);
		$result = $tennis_score->get_score();

		$response = [
		    'result' => $result
		];
		
		return response()->json($response);
	}

}