<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    /**
     * Protect columns against assignment
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Get User that made the Holiday reqeust
     *
     * @return Response
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
