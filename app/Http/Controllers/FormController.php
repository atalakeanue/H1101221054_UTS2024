<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function view_masterjabatan()
    {
        return view('masterjabatan');
    }

    public function view_gaji()
    {
        return view('gaji');
    }

    public function view_presensi()
    {
        return view('presensi');
    }
}