<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }

    public function AdminDashboard(){
        return view('admin.admin_dashboard');
    }
}
