<?php

namespace App\Http\Controllers;

use App\Models\Schneider;
use Illuminate\Http\Request;

class SchneiderController extends Controller
{
    public function index()
    {
        $schneider = Schneider::all();
        return view('admin.schneider.index', compact('schneider'));
    }
}
