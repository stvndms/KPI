<?php

namespace App\Http\Controllers;

use App\Models\December;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DesController extends Controller
{
    public function index()
    {
        $dec = December::paginate(5);

        return view('user.december', compact('dec'));
    }
}
