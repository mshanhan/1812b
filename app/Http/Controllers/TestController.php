<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class TestController extends Controller
{
    //
    public function index()
    {
//        echo 777;
        Redis::set('name', 'guwenjie');
        $values = Redis::get('name');
        dd($values);
    }
}
