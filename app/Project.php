<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use softDeletes;

    protected $guarded=[];

    //Cambiar buscar id por title
    public function getRouteKeyName()
    {
        return 'url';
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }
    //protected $fillable=['title', 'url', 'description'];
}
