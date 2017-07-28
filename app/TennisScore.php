<?php

namespace App;

class TennisScore
{
    private $p1 = 0;
    private $p2 = 0;
    private $p1N = 'player1';
    private $p2N = 'player2';

    private $base_score = array("Love", "Fifteen", "Thirty", "Forty");

    public function __construct($m_score1, $m_score2)
    {
        $this->p1 = $m_score1;
        $this->p2 = $m_score2;
    }

    public function get_score()
    {

        if ($this->p1 < 4 && $this->p2 < 4 && !($this->p1 + $this->p2 == 6)) {
            $s = $this->base_score[$this->p1];
            return ($this->p1 == $this->p2) ? "{$s}-All" : "{$s}-{$this->base_score[$this->p2]}";
        } 

        if ($this->p1 == $this->p2) {
            return "Deuce";
        }

        $s = $this->p1 > $this->p2 ? $this->p1N : $this->p2N;
        return (($this->p1 - $this->p2) * ($this->p1 - $this->p2) == 1) ? "Advantage {$s}" : "Win for {$s}";
    }
}