<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\catatan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('User.dashboard');
    }

    public function showtable()
    {
        $datacatatan = catatan::all();
        return view('User.show', compact('datacatatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datacatatan = catatan::all();
        return view('User.create', compact('datacatatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu_tubuh' => 'required',
        ]);

        $data = catatan::create ([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'suhu_tubuh' => $request->suhu_tubuh,
        ]);
        return redirect('/catatan')->with('success','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('User.edituser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu_tubuh' => 'required',
        ]);

        $user = User::findorfail($id);
        $user->update($request->all());

        return redirect('/user')->with('success','Data Berhasil Di Edit');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return back()->with('destroy','Data Berhasil Di Destroy');
    }
}