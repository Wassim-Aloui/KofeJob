<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
   
    protected $fillable = [
        'titre',
        'description',
        'auteur',
        'image',
       
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id');
    }

    
public function author()
{
    return $this->belongsTo(User::class, 'auteur'); 
}

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
}