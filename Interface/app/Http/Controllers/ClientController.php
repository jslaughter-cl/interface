<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        $client = auth()->user()->clients()->create($validated);
        return redirect()->back()->with('success', 'Client added.');
    }

    // Add update, delete, etc., similarly
}