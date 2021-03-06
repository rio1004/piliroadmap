<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function galleries(){
        return $this->hasMany(Gallery::class);
    }
    public function archives(){
        return $this->hasMany(Archive::class);
    }
    public function location_tags(){
        return $this->hasMany(LocationTag::class);
    }
    public function gallery_videos(){
        return $this->hasMany(GalleryVideo::class);
    }
    public function stores(){
        return $this->hasMany(Stores::class);
    }
    public function partners(){
        return $this->hasMany(Partner::class);
    }

}
