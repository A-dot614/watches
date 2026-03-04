<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchImage extends Model
{
    /** @use HasFactory<\Database\Factories\WatchImageFactory> */
    use HasFactory;

    public function watch () {
        return $this->belongsTo(Watch::class, "watch_id");
    }    
}
