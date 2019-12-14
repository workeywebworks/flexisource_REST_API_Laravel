<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Players;
class APITest extends TestCase
{
    /** @test */ 
    public function get_all_players_from_database_using_endpoint(){
        $response=$this->get(route('players'));
        $response->assertOk();
    }

    public function get_single_player_from_database_using_endpoint(){
        $response=$this->get(route('players.detail'));
        $response->assertOk();
    }
       
}
