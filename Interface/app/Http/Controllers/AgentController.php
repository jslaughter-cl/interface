<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class AgentController extends Controller
{
    public function index()
    {
        $clients = auth()->user()->clients; // Assuming you add this relationship to User model
        return view('agent.dashboard', compact('clients'));
    }
}