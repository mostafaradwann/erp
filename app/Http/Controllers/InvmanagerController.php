<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvmanagerController extends Controller
{
    public function InvmanagerDashboard(){
        
        return view('invmanager.invmanager_dashboard');
        
    }
}
