<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'artist', 'genre', 'image_path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
