<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TracerController extends Controller
{
    public function index() {
        return view('tracer.index');
    }

    public function answerForm() {
        return view('tracer.form');
    }
}
