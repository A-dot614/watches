<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;

class WatchController extends Controller
{
public function home()
    {
        return view('site.home');
    }

    public function detail(Watch $okatia)
    {
        $allWatches = Watch::all();
        return view('site.detail', compact('okatia'));
    }
    
    public function collection()
    {
        $allWatches = Watch::all();
        return view('site.collection',compact('allWatches'));
    }
    
    public function contact()
    {
        return view('site.contact');
    }

    public function about()
    {
        return view('site.about');
    }
}
