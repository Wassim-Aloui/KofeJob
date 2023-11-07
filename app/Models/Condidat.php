<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    protected $table = 'condidat';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'lettreMotivation',
        'offers_id',
        'user_id'
    ];
    protected $rules = [
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:candidatures,email|max:255',
        'lettreMotivation' => 'required|string',
        'offers_id' => 'required',

    ];
    public function reponses()
    {
        return $this->hasMany(Reponse::class, 'condidat_id');
    }



    public function offers()
    {
        return $this->belongsTo(Offer::class, 'offers_id');
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
