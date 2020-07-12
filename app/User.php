<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'address', 'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $role = [
        0 => 'Khách hàng',
        1 => 'Admin',
        2 => 'Nhân viên',
    ];

    /**
     * is admin
     *
     * @return bool
     */
    protected function isAdmin()
    {
        return $this->type_user == 1;
    }

    /**
     * is admin school
     *
     * @return bool
     */
    protected function isEmployee()
    {
        return $this->type_user == 2;
    }

    /**
     * is admin school
     *
     * @return bool
     */
    protected function isCustomer()
    {
        return $this->type_user == 0;
    }
}
