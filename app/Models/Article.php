<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'authors',
        'publisher',
        'details',
        'year',
        'doi',
        'url',
        'user_id',
        'type',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
