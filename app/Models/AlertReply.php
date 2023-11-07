<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class AlertReply extends Model
{
    protected $table = 'alert_reply';

    protected $fillable = [
        'description',
        'alert_id'
    ];

    public function scopeSelection($query){
        return $query->select('description','created_at');
    }
    use HasFactory;
    public function alert(){
        return $this->belongsTo(Alert::class);
    }
}
