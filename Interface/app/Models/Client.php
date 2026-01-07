<?php

namespace App\Models;

class Client
{
    protected $fillable = ['name', 'details', 'user_id'];

    public function agent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
