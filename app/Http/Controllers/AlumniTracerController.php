<?php

namespace App\Http\Controllers;

use App\Models\Tracers;
use Illuminate\Http\Request;

class AlumniTracerController extends Controller
{
    public function index() {
        $tracer = Tracers::all();
        return view('tracer.index', compact('tracer'));
    }
}
