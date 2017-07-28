<?php

namespace Tests\Integration;

use Tests\TestCase;

class TennisTest extends TestCase
{
    public function testLoveAll()
    {
        $response = $this->get('/api/tennis/get_score/Rafael_Nadal/vs/Roger_Federer');

        $response->assertJson([
            'result' => 'Love-All',
        ]);
    }
}