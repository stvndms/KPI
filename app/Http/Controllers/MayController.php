<?php

namespace App\Http\Controllers;

use App\Models\Mei;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MayController extends Controller
{
    public function index()
    {
        $may = Mei::paginate(5);

        return view('user.may', compact('may'));
    }
}
