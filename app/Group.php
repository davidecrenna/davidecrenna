<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * Fillable fields for a group.
     *
     * @var array
     */
    protected $fillable=[
        'name',
        'label'
    ];
    /**
     * Get the photos associated with the given group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function photos()
    {
        return $this->belongsToMany('App\Photo');
    }
}
