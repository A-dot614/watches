<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            
            $table->string('model_name');
            $table->string('series');
            $table->string('description');
            $table->decimal('price', 8, 2);
            $table->string('image_url');
            $table->boolean('is_active');
            $table->string('slug')->unique();
            $table->string('case_material')->default('Steel');     
            $table->string('water_resistance')->default('100M');   
            $table->string('movement_type')->default('Automatic');
 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watches');
    }
};
