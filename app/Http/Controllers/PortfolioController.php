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

        return view('doyin-dapo-preweddings');
    }

    public function isiwat_kazeem(){

        return view('isiwat-kazeem');
    }

    public function olivia_judah(){

        return view('olivia-judah');
    }

    public function joan_davies(){

        return view('joan-davies');
    }
}
