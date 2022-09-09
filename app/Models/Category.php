<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'slug' ,
        'description',
        'status',
        'popular',
        'meta_title',

        'image'
    ];

    /**
         * Get the user associated with the Category
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */
        public function category(): HasOne
        {
            return $this->hasOne(Product::class, 'cat_id', 'id');
        }

}
