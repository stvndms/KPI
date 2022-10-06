<?php

namespace App\Http\Controllers;

use App\Models\April;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AprController extends Controller
{
    public function index()
    {
        $apr = April::paginate(5);

        return view('user.april', compact('apr'));
    }
}
