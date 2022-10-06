<?php

namespace App\Http\Controllers;

use App\Models\january;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JanController extends Controller
{
    public function index()
    {
        $jan = January::paginate(5);

        return view('user.january', compact('jan'));
    }
}
