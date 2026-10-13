<?php

namespace App\Models;
 use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $guarded=['id'];

    protected static function booted(): void
{
    static::creating(function ($brand) {
        $slug = Str::slug($brand->name);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $brand->slug = $slug;
    });
}
public function products()
{
    return $this->hasMany(Product::class);
}

}
