<?php

namespace App\Http\Controllers;

use App\Models\August;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AugController extends Controller
{
    public function index()
    {
        $aug = August::paginate(5);

        return view('user.august', compact('aug'));
    }
}
