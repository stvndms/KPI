<?php

namespace App\Http\Controllers;

use App\Models\October;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OctController extends Controller
{
    public function index()
    {
        $oct = October::paginate(5);

        return view('user.october', compact('oct'));
    }
}
