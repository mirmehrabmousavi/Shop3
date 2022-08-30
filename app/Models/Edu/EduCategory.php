<?php

namespace App\Models\Edu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name','parent_id'];

    public function subcategory() {
        return $this->hasMany(\App\Models\Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id');
    }
}
