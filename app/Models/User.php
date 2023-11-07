<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Alert;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function isAdmin() {
        return $this->role === 'admin';
    }

    public function isRememberTokenNotNull()
    {
        return $this->remember_token !== null;
    }

    public function logout()
    {
        $this->update(['remember_token' => null]);
    }

    public function blogs()
{
    return $this->hasMany(Blog::class, 'auteur');
}

public function comments()
{
    return $this->hasMany(Comment::class, 'user_id');
}
public function condidats()
{
    return $this->hasMany(Condidat::class, 'user_id');
}
public function reponse()
{
    return $this->hasMany(Reponse::class, 'user_id');
}

}
