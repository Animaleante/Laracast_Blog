<?php

namespace App;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Tag extends EloquentModel
{
    
    public function posts() {
        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName() {
        return 'name';
    }
}
