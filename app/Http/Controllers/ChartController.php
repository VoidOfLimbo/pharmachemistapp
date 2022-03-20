<?php

namespace App\Http\Controllers;

use App\Models\Carehome;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    //
    public function index()
    {
        // get data necessary for chart here and pass it to view
        $carehomes = Carehome::all();

        return view('webpages.dashboard', compact('carehomes'));
    }
}
