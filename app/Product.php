<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
        return $this->belongsToMany('App\Order')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
