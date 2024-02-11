<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoggingController extends Controller
{
    public function testLogging(Request $request){
        $find = User::find(100000)->id;
        dd('ok');
    }
}
