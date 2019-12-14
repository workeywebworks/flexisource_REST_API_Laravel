<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\API\ProviderController as Player;
class HomeController extends Controller
{
    public function index(){
        return  Player::players();
    }
}
