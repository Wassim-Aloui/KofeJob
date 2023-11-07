<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $fillable = ['contenu', 'condidat_id','user_id'];

    public static $rules = [
        'contenu' => 'required|string',
        'condidat_id' => 'required|exists:condidat,id',
    ];

    public function condidat()
    {
        return $this->belongsTo(Condidat::class, 'condidat_id');
    }

    public static function getRules($id = null)
    {
        $rules = self::$rules;


        if ($id) {
            $rules['contenu'] = [
                'required',
                'string',
              //  Rule::unique('reponses')->ignore($id),
            ];
        }

        return $rules;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
