<?php

namespace App\Http\Controllers;

use App\Models\June;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $june = June::paginate(5);

        return view('admin.june.index', compact('june'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('admin.june.create', compact('user', $user));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:3072',
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('june-images');
        }

        June::create($validate);

        return redirect()->route('junes.index')
            ->with('success', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(June $june)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(June $june)
    {
        $user = User::all();
        return view('admin.june.edit', compact('june', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, June $june)
    {
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:3072',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('jun-images');
        }
        $june->update($validate);


        return redirect()->route('junes.index')
            ->with('success', 'Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(June $june)
    {
        if ($june->image) {
            Storage::delete($june->image);
        }
        $june->delete();

        return redirect()->route('junes.index')
            ->with('success', 'Berhasil Hapus !');
    }
}
