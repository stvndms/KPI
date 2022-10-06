<?php

namespace App\Http\Controllers;

use App\Models\June;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JunController extends Controller
{
    public function index()
    {
        $jun= June::paginate(5);

        return view('user.june', compact('jun'));
    }
}
