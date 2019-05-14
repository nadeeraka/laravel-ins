<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopontroller extends Controller
{
    public function list()
    {
        $items = [
            'rice with meet',
            'rice with vagitabals',
            'rice with fish',
            'fry rice chines',
            'egg parata',
            'kothhu'
        ];
        return view('api.shop', ['items' => $items]);
    }
}
