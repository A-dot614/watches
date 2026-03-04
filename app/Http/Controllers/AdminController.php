<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
    }

    public function card(){
        return view("admin.watches.card");
    }    

    public function adminDetail(){
        return view("admin.watches.detail");
    } 
    
    public function adminIndex(){
        return view("admin.watches.index");
    }    

    public function postWatches(){
        return view("admin.watches.post");
    }        


    public function create(){
        return view("admin.watches.create");
    }        
}
