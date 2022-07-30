<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientAgency()
    {
        return view('client.pages.agency.agencyportal');
    }
}
