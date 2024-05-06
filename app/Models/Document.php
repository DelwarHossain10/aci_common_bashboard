<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'comments_id',
        'type',
        'path',
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comments_id');
    }
}