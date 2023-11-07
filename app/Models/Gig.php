<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    protected $table = 'gigs';

    protected $fillable = [
        'title',
        'description',
        'orders',
        'price',
        'user_id'
    ];
}
