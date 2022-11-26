<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'saved_by',
        'path',
        'filename',
        'format',
        'size',
        'resolution',
    ];
}
