<?php

namespace App\Http\Controllers;

use App\Models\March;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $march = March::paginate(5);

        return view('admin.march.index', compact('march'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('admin.march.create', compact('user', $user));
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
            $validate['image'] = $request->file('image')->store('mar-images');
        }

        March::create($validate);

        return redirect()->route('marchs.index')
            ->with('success', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(March $march)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(March $march)
    {
        $user = User::all();
        return view('admin.march.edit', compact('march', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, March $march)
    {
        $validate = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:3072',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('mar-images');
        }
        $march->update($validate);


        return redirect()->route('marchs.index')
            ->with('success', 'Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(March $march)
    {
        if ($march->image) {
            Storage::delete($march->image);
        }
        $march->delete();

        return redirect()->route('marchs.index')
            ->with('success', 'Berhasil Hapus !');
    }
}
