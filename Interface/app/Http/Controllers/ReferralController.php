<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Referral;

class ReferralController extends Controller
{
    public function store(Request $request, Lead $lead)
    {
        // Ensure the lead's client belongs to the agent (chain checks)
        if ($lead->client->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        $referral = $lead->referrals()->create($validated);
        return redirect()->back()->with('success', 'Referral added.');
    }

    // Similar for others
}