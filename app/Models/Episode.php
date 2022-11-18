<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'type',
        'description',
        'body',
        'image_url',
        'video_url',
        'tags',
        'price',
        'time',
        'view_count',
        'comment_count',
        'number'
    ];

    protected $casts = [
        'tags' => 'array',
        'price' => 'integer'
    ];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
