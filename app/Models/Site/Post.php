<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','body','photo','category_id'
];
public function category()
{
    return $this->belongsTo(Category::class);
}
}
