<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function registrations()
    {
        return $this->hasMany('App\Registration');
    }
}
