<?php

namespace App\Http\Controllers;

use App\Models\July;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JulController extends Controller
{
    public function index()
    {
        $jul = July::paginate(5);

        return view('user.july', compact('jul'));
    }
}
