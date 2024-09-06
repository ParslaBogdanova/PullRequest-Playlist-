<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'tag','image_path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
