<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'name', 'address', 'city', 'country', 'about_me', 'image', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];

//    public function getDisplayNameAttribute($name)
//    {
//        return ucwords($name);
//    }
//
//    public function getDisplayUsernameAttribute($username)
//    {
////        if (!$username)
////        {
////            return "Not Available";
////        }else{
////            return ($username);
////        }
//        return ($this->username)? $this->username : "Not Available";
//    }
//
//    public function getDisplayAddressAttribute($address)
//    {
//        return $this->address ? ucwords($this->address) : "Not Available";
//    }
//
//    public function getDisplayCityAttribute($city)
//    {
//        return $this->city ? ucwords($this->city) : "Not Available";
//    }
//
//    public function getDisplayCountryAttribute($country)
//    {
//        return $this->country ? ucwords($this->country) : "Not Available";
//    }
//
//    public function getDisplayImageAttribute($image)
//    {
//        return $this->image ? $this->image : "images/avatar.png";
//    }
//
//    public function getDisplayAboutMeAttribute($aboutMe)
//    {
//        return $this->aboutMe ? $this->aboutMe : "Not Available";
//    }
}


