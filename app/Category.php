<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
class Category extends Model
{
    //

    public function projects(){

        return $this->hasMany(Project::class);
    }

    public function getRouteKeyName()
    {
        return 'url';
    }
}
