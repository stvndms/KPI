<?php

namespace App\Http\Controllers;

use App\Models\November;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NovController extends Controller
{
    public function index()
    {
        $nov = November::paginate(5);

        return view('user.november', compact('nov'));
    }
}
