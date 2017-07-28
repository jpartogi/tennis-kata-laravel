<?php

use App\TennisScore;

class TennisScoreTest extends PHPUnit_Framework_TestCase
{
    protected function setUp() {
        parent::setUp();
    }

    protected function tearDown() {
        $this->score = null;
    }

    public function testLoveAll(){
        $this->score = new TennisScore(0,0);
        $this->assertEquals($this->score->get_score(), 'Love-All');
    }

    public function testFifteenAll(){
        $this->score = new TennisScore(1,1);
        $this->assertEquals($this->score->get_score(), 'Fifteen-All');
    }

    public function testThirtyAll(){
        $this->score = new TennisScore(2,2);
        $this->assertEquals($this->score->get_score(), 'Thirty-All');
    } 

    public function testDeuce(){
        $this->score = new TennisScore(3,3);
        $this->assertEquals($this->score->get_score(), 'Deuce');
    }

    public function testFifteenLove(){
        $this->score = new TennisScore(1,0);
        $this->assertEquals($this->score->get_score(), 'Fifteen-Love');
    }

    public function testThirtyLove(){
        $this->score = new TennisScore(2,0);
        $this->assertEquals($this->score->get_score(), 'Thirty-Love');
    }

    public function testAdvantagePlayer1(){
        $this->score = new TennisScore(4,3);
        $this->assertEquals($this->score->get_score(), 'Advantage player1');
    }

    public function testWinForPlayer1(){
        $this->score = new TennisScore(4,2);
        $this->assertEquals($this->score->get_score(), 'Win for player1');
    }

    public function testLoveFifteen(){
        $this->score = new TennisScore(0,1);
        $this->assertEquals($this->score->get_score(), 'Love-Fifteen');
    }

    public function testLoveThirty(){
        $this->score = new TennisScore(0,2);
        $this->assertEquals($this->score->get_score(), 'Love-Thirty');
    }

    public function testAdvantagePlayer2(){
        $this->score = new TennisScore(3,4);
        $this->assertEquals($this->score->get_score(), 'Advantage player2');
    }

    public function testWinForPlayer2(){
        $this->score = new TennisScore(2,4);
        $this->assertEquals($this->score->get_score(), 'Win for player2');
    }
}