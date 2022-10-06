<?php

namespace App\Http\Controllers;

use App\Models\March;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarController extends Controller
{
    public function index()
    {
        $mar = March::paginate(5);

        return view('user.march', compact('mar'));
    }
}
