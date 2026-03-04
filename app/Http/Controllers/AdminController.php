<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        //  dd($request->all());

        $request->validate([
              "model_name" => ["required","string"],
              "series" => ["required","string"],
              "description" => ["required","string"],
              "case_material" => ["required","string"],
              "movement_type" => ["required","string"],
              "price" => ["nullable","numeric","min:0"],
              "water_resistance" => ["required","string"],
              "is_active" => ["required","boolean"],
              "image_url" => ["required","mimes:jpeg,png,jpg,gif,svg", "max:2048"],
              "slug" => ["required","string","unique:watches,slug"],
        ]);
        // dd($request->all());
        $slug = Str::slug($request->model_name,"-");
        $status = $request->is_active === "Active" ? true : false;
        

        // TODO: image upload handling
        if($request->hasFile("image_url")){
            // fetch the orignal image from temporary server storage
            $image = $request->file("image_url");

            // name the image
            $imageName = "IMG-" . time() . "." . $image->getClientOriginalExtension();



            // store the image
            $image->storeAs("book_covers", $imageName, "public");
        }else{

        }        



            $watch = Watch::create([
                "model_name" => $request->model_name,
                "series" => $request->series,
                "description" => $request->description,
                "case_material" => $request->case_material,
                "movement_type" => $request->movement_type,
                "price" => $request->price,
                "water_resistance" => $request->water_resistance,
                "is_active" => $request->is_active,
                "slug" => $slug,
            ]);
     return redirect()->route('admin.watches.index')->with("success","Watch created successfully!");       
    }

 
        

       
}
