<?php

namespace App\Http\Controllers;

use App\Models\September;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SepController extends Controller
{
    public function index()
    {
        $sep = September::paginate(5);

        return view('user.september', compact('sep'));
    }
}
