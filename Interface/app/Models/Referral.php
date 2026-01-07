<?php

namespace App\Models;

class Referral
{
    protected $fillable = ['business_name', 'details', 'lead_id'];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
