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
        'image',
        'heading',
        'tag_line_1',
        'tag_line_2',
        'video',
        'benifit_title',
        'benifit_image',
        'para_1',
        'para_2',
        'use_title',
        'use_text',
        'warning_title',
        'warning_text',
        'facility_title'
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
