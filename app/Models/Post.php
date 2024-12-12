<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'user_id',
        'category_id',
    ];

    // protected $casts = [
    //     'category_id' => 'array',
    // ];
    public function posts(): BelongsTo
    {
        return $this->belongsTo(User::class,  'user_id');
    }

    public function postsCategories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
