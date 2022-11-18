<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'type',
        'description',
        'body',
        'image_url',
        'tags',
        'price',
        'time',
        'view_count',
        'comment_count'
    ];

    protected $casts = [
        'tags' => 'array',
        'price' => 'integer'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
