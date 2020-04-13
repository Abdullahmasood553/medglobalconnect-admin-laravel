<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function main_category() {
        return view('backend.admin.pages.categories');
    }

    public function sub_category() {
        return view('backend.admin.pages.sub_category');
    }
}
