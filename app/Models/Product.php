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
        'title',
        'thumbnail',
        'image',
        'tagline',
        'details',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getCategory($id)
    {
        $category = $this->categories()->where('category_id', $id)->first();
        if ($category) {
            return true;
        }
        return false;
    }
}
