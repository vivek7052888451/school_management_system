<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.dashboard.admin.index');
    }
    public function teacher()
    {
        return view('backend.dashboard.admin.teacher.teacher');
    }
}