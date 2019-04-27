<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
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

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }

    public function registrations()
    {
        return $this->hasMany('App\Registration');
    }
}
