<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(PropertyCategory::class, 'category_id', 'id');
    }

    public function image()
    {
        return $this->hasOne(PropertyImage::class, 'property_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(FeaturedProduct::class, 'id', 'property_id');
    }
}
