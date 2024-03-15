<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redController extends Controller
{
    public function index() {
        return view('redkas.index');
    }

    public function show() {
        return view('redkas.show');
    }

    public function edit() {
        return view('redkas.edit');
    }

    public function create() {
        return view('redkas.create');
    }
}
