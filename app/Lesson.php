<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
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

    public function season()
    {
        return $this->belongsTo('App\Season');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
