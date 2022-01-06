<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'is_student',
        'is_management',
        'is_teacher',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function isAdmin()
    {
        if(auth()->user()->is_admin == 1)
        {
            return true;
        }
        return false;
    }
    public function isTeacher()
    {
        if(auth()->user()->is_teacher == 1)
        {
            return true;
        }
        return false;
    }
    public function isStudent()
    {
        if(auth()->user()->is_student == 1)
        {
            return true;
        }
        return false;
    }
    public function isManagment()
    {
        if(auth()->user()->is_management == 1)
        {
            return true;
        }
        return false;
    }
    public function isUser()
    {
        if(auth()->user()->is_user == 1)
        {
            return true;
        }
        return false;
    }
    public function newsPost()
    {
        return $this->belongsToMany(Newspost::class);
    }

}
