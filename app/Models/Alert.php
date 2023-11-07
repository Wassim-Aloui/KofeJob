<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Alert extends Model
{
    protected $table = 'alerts';

    protected $fillable = [
        'title',
        'subject',
        'description',
        'status',
        'user_id'
    ];



    public function scopeSelection($query){
        return $query->select('title','description','subject','status','created_at');
    }
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    use HasFactory;
    public function alerts(){
        return $this->hasMany(AlertReply::class);
    }
}
