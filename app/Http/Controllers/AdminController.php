<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
    }

    public function card(){

         $allWatches = Watch::all();
        return view("admin.watches.card", compact('allWatches'));
    }    

    public function adminDetail(Watch $okatia){
        return view("admin.watches.detail", compact('okatia'));
    } 
    
    public function adminIndex(){
        return view("admin.watches.index");
    }  

    public function create(){
        return view("admin.watches.create");
    } 

    public function store(Request $request){
         dd($request->all());
    }        

       
}
