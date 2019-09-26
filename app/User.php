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
        'name', 'email','userRole','department','semester','credit_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roleName(){
      return $this->belongsTo('App\UserRole','userRole','role_id');
    }
    public function departmentName(){
      return $this->belongsTo('App\Department','department','department_id');
    }
    public function positionName(){
      return $this->belongsTo('App\Semester','semester','semester_id');
    }
}
