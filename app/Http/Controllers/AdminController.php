<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('backend.admin.pages.login');
    }


    public function dashboard() {
        return view('backend.admin.home');
    }
}
