<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{

    public function index(){
        $all_dresses = Dress::all();
        dd($all_dresses);
        $data=[
            $all_dresses
        ];

        return view("welcome", $data);
    }
}