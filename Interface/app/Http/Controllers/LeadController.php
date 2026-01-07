<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Lead;

class LeadController extends Controller
{
    public function store(Request $request, Client $client)
    {
        // Ensure the client belongs to the agent
        if ($client->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        $lead = $client->leads()->create($validated);
        return redirect()->back()->with('success', 'Lead created.');
    }

    // Similar for update/delete
}