<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    protected $guarded = [];

    public function images() {
        return $this->hasMany(WatchImage::class);
        }    
}
