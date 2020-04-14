<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
    public function index() {
        return view('backend.admin.pages.orders');
    }

    public function save_order(Request $request) {
        
    }
}
