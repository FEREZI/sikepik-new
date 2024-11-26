<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function dashboard()
{
    return view('admin.dashboard'); // Pastikan ini mengarah ke file dashboard.blade.php
}
}
