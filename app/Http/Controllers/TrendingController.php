<?php

namespace App\Http\Controllers;

use App\Models\Schneider;
use Illuminate\Http\Request;

class TrendingController extends Controller
{
    public function index()
    {
        $schneider = Schneider::all();
        // dd($schneider);
        return view('admin.trending.index', compact('schneider'));
    }
}
