<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $table='projets';
    protected $fillable=[
        'logo',
        'title',
        'budget',
        'progress',
        'technology',
        'company',
        'start_date',
        'due_date',
        'category_id',
        'user_id'


    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
