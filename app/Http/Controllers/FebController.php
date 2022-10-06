<?php

namespace App\Http\Controllers;

use App\Models\February;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FebController extends Controller
{
    public function index()
    {
        $feb = February::paginate(5);

        return view('user.february', compact('feb'));
    }
}
