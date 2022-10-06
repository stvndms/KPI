<?php

namespace App\Http\Controllers;

use App\Models\October;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OctoberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $october = October::paginate(5);

        return view('admin.october.index', compact('october'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('admin.october.create', compact('user', $user));
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
            $validate['image'] = $request->file('image')->store('oct-images');
        }

        October::create($validate);

        return redirect()->route('octobers.index')
            ->with('success', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(October $october)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(October $october)
    {
        $user = User::all();
        return view('admin.october.edit', compact('october', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, October $october)
    {
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:3072',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('oct-images');
        }
        $october->update($validate);


        return redirect()->route('octobers.index')
            ->with('success', 'Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(October $october)
    {
        if ($october->image) {
            Storage::delete($october->image);
        }
        $october->delete();

        return redirect()->route('octobers.index')
            ->with('success', 'Berhasil Hapus !');
    }
}
