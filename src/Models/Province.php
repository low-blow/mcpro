<?php

namespace LowBlow\MCPro\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function country()
    {
    	return $this->belongsTo('LowBlow\MCPro\Models\Country');
    }

    public function cities()
    {
    	return $this->hasMany('LowBlow\MCPro\Models\City');
    }
}
