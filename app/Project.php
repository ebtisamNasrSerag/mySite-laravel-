<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_ar','name_en', 'desc_ar','desc_en', 'img','imgs'
    ];

    /**
    *category relationship function
    *
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

     /**
    *image relationship function
    *
    */
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
