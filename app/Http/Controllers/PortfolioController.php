<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function weddings(){

        return view('portfolio-weddings');
    }

    public function events(){

        return view('portfolio-events');
    }

    public function portrait(){

        return view('portfolio-portraits');
    }

    public function doyin_dapo(){

        return view('doyin-dapo-weddings');
    }

    public function pre_doyin_dapo(){

        return view('doyin-dapo-weddings');
    }
}
