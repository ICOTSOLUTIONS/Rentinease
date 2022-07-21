<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function clientAgent()
    {
        return view('client.pages.agent.agentportal');
    }
}
