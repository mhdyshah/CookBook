<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'short_description', 'description', 'materials', 'image', 'category_id'];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}