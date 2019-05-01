<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_ar','name_en', 'desc_ar','desc_en', 'img'
    ];

    /**
    *project relationship function
    *
    */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
