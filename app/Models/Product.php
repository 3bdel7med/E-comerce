<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'cat_id','name','small_description',
        'description',
    'original_price','selling_price','image','qty','tax',
    'status','trending',
    'meta_title','meta_description','meta_keywords'
];


    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id','id');
    }
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

}
