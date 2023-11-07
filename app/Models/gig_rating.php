<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gig_rating extends Model
{
    protected $fillable = [
        'user_id',
        'gig_id',
        'star_rating',
        'message',
    ];



    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
}
