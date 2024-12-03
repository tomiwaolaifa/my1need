<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function solutions()
    {
        return $this->hasMany(Solution::class, 'post_id');
    }
}
