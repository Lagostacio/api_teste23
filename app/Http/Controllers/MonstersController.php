<?php

namespace App\Http\Controllers;

use App\Models\Monsters;
use Illuminate\Http\Request;

class MonstersController extends Controller
{
    public function list(){
        return Monsters::all();
    }
}
