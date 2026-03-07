<?php
namespace App\Http\Controllers;
use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // ===============================
    // admin side
    // =============================== 

    public function dashboard(){
        return view("admin.dashboard");
    }

    public function card(){
        $allWatches = Watch::all();
        return view("admin.watches.card", compact('allWatches'));
    }    

    public function adminDetail(Watch $okatia){
        $allWatches = Watch::all();
        return view("admin.watches.detail", compact('okatia'));
    } 

    public function adminIndex(){
        return view("admin.watches.index");
    }  

    public function create(){
        return view("admin.watches.create");
    } 

    public function store(Request $request){
        // Validate inputs
        $request->validate([
            "model_name" => ["required","string"],
            "series" => ["required","string"],
            "description" => ["required","string"],
            "case_material" => ["required","string"],
            "movement_type" => ["required","string"],
            "price" => ["required","numeric","min:0"],  // Changed to required
            "water_resistance" => ["required","string"],
            "is_active" => ["required"],  // Removed boolean validation
            "image_url" => ["required","mimes:jpeg,png,jpg,gif,svg", "max:2048"],
        ]);

        // Generate slug
        $slug = Str::slug($request->model_name . '-' . uniqid(), "-");

        // Handle image upload
        $imagePath = null;
        if($request->hasFile("image_url")){
            $image = $request->file("image_url");
            $imageName = "IMG-" . time() . "." . $image->getClientOriginalExtension();
            $image->storeAs("watch_images", $imageName, "public");
            $imagePath = "storage/watch_images/" . $imageName;
        }        

        // Create watch
        Watch::create([
            "model_name" => $request->model_name,
            "series" => $request->series,
            "description" => $request->description,
            "case_material" => $request->case_material,
            "movement_type" => $request->movement_type,
            "price" => $request->price,
            "water_resistance" => $request->water_resistance,
            "is_active" => $request->is_active == '1' ? true : false,
            "slug" => $slug,
            "image_url" => $imagePath,  // Added this!
        ]);

        return redirect()->route('card')->with("success","Watch created successfully!");       
    }

    // ===============================
    // buy side
    // ===============================



    public function purchase(){
        $allWatches = Watch::all();
        return view("admin.buy.purchase",compact('allWatches'));
    }

    public function buyDetail(Watch $okatia){
         $allWatches = Watch::all();
        return view("admin.buy.detail", compact('okatia'));
    }
    
    public function buyIndex(){
        return view("admin.buy.dashboard");
    }



}