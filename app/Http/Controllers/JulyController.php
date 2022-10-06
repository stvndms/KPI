<?php

namespace App\Http\Controllers;

use App\Models\July;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JulyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $july = July::paginate(5);

        return view('admin.july.index', compact('july'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('admin.july.create', compact('user', $user));
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
            $validate['image'] = $request->file('image')->store('jul-images');
        }

        July::create($validate);

        return redirect()->route('julys.index')
            ->with('success', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(July $july)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(July $july)
    {
        $user = User::all();
        return view('admin.july.edit', compact('july', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, July $july)
    {
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:3072',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('jul-images');
        }
        $july->update($validate);


        return redirect()->route('julys.index')
            ->with('success', 'Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(July $july)
    {
        if ($july->image) {
            Storage::delete($july->image);
        }
        $july->delete();

        return redirect()->route('julys.index')
            ->with('success', 'Berhasil Hapus !');
    }
}
