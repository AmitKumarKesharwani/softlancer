<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index() {
        return view('admin/index');
    }

    public function store() {
        dd(request()->all());
    }
}
