<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function Dashboard()
    {
        return view('Dashboard');
    }

    public function Indicator()
    {
        return view('Indicator');
    }
    public function Indicatorcharts()
    {
        return view('Indicatorcharts');
    }

    public function Indicatorcompare()
    {
        return view('Indicatorcompare');
    }
    public function Passengers()
    {
        return view('Passengers');
    }
    public function Passengersgeneral()
    {
        return view('Passengersgeneral');
    }
    
}
