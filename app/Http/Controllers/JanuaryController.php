<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\User;
use Illuminate\Http\Request;

class JanuaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $january = Nilai::latest()->paginate(5);

        return view('admin.january.index', compact('january'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('admin.january.create', compact('user', $user));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ach' => 'required',
            'persen' => 'required',
            'points' => 'required',
        ]);

        Nilai::create($request->all());

        return redirect()->route('januarys.index')
            ->with('success', 'Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $january)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $january)
    {
        $user = User::all();
        return view('admin.january.edit', compact('january', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $january)
    {
        $request->validate([
            'name' => 'required',
            'ach' => 'required',
            'persen' => 'required',
            'points' => 'required',
        ]);

        $january->update($request->all());

        return redirect()->route('januarys.index')
            ->with('success', 'Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $january)
    {
        $january->delete();

        return redirect()->route('januarys.index')
            ->with('success', 'Berhasil Hapus !');
    }
}
