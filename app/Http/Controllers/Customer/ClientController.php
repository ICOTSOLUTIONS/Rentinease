<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientCustomer()
    {
        return view('client.pages.customer.customerportal');
    }
}
