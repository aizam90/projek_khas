<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use carbon\Carbon;

class T_Users_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;

        $store                      =   new User();
        $store->nokp                =   $request->nokp;
        $store->name                =   $request->nama_pengguna;
        $store->email               =   $request->emel_pengguna;
        $store->agensi              =   $request->agensi;
        $store->role                =   $request->peranan_pengguna;
        $store->status              =   '2';
        $store->password            =   bcrypt($request->katalaluan);
        $store->email_verified_at   =   Carbon::now();
        $store->save();

        return redirect()->action('T_Users_Controller@index')
        ->with([ 'alert-type'=>'success' , 'alert-message'=>'Pengguna Berjaya Disimpan!.' ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
