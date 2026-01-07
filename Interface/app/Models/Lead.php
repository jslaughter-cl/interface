<?php

namespace App\Models;

class Lead
{
    protected $fillable = ['name', 'details', 'client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function referrals()
    {
        return $this->hasMany(Referral::class);
    }
}
