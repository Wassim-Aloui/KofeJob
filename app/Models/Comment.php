<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
   
    protected $fillable = [
        'comment',
        'user_id',
        'blog_id',
      
       
    ];

    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}


}
