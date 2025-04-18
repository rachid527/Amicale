<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;

class DashboardController extends Controller
{
    public function index()
    {
        $total = Activity::count();
        $aVenir = Activity::where('date', '>', now())->count();
        $terminees = Activity::where('date', '<', now())->count();

        return view('admin.dashboard', compact('total', 'aVenir', 'terminees'));
    }
}
