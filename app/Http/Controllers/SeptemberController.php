<?php

namespace App\Http\Controllers;

use App\Models\September;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeptemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $september = September::paginate(5);

        return view('admin.september.index', compact('september'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('admin.september.create', compact('user', $user));
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
            $validate['image'] = $request->file('image')->store('sep-images');
        }

        September::create($validate);

        return redirect()->route('septembers.index')
            ->with('success', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(September $september)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(September $september)
    {
        $user = User::all();
        return view('admin.september.edit', compact('september', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, September $september)
    {
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:3072',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('sepr-images');
        }
        $september->update($validate);


        return redirect()->route('septembers.index')
            ->with('success', 'Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(September $september)
    {
        if ($september->image) {
            Storage::delete($september->image);
        }
        $september->delete();

        return redirect()->route('septembers.index')
            ->with('success', 'Berhasil Hapus !');
    }
}
