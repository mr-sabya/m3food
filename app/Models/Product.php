<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'title',
        'thumbnail',
        'image',
        'tagline',
        'details',
        'is_trending',
        'is_new',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function facilities()
    {
        return $this->hasMany(Facility::class, 'product_id');    
    }
 
}
