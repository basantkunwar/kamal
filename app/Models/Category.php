<?php

namespace App\Models;
 use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = ['id'];

   

protected static function booted(): void
{
    static::creating(function ($category) {
        $slug = Str::slug($category->name);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $category->slug = $slug;
    });
}

public function products()
{
    return $this->hasMany(Product::class);
}
}

