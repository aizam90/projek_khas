<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ref_Kaedah_Perolehan;

class Ref_Kaedah_Perolehan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Ref_Kaedah_Perolehan::all();
        // $post = Ref_Kaedah_Perolehan::where('status','aktif')->get();

        return view('selenggara.ref_kaedah_perolehan.index')
        ->with('post',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('selenggara.ref_kaedah_perolehan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'kaedah_perolehan' => 'required|max:255'
        ]);

        $store                      = new Ref_Kaedah_Perolehan;
        $store->kaedah_perolehan    = $request->kaedah_perolehan;
        $store->save();

        return redirect()->action('Ref_Kaedah_Perolehan_Controller@index')
        ->with([ 'alert-type'=>'success' , 'alert-message'=>'Data Berjaya Disimpan!.' ]);

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
        return abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $id;

        $post   = Ref_Kaedah_Perolehan::find($id);
        // $post    = Ref_Kaedah_Perolehan::where('id','like'.$id)->first(); //kalau id string
        // return $post;

        if(empty($post)){
            return redirect()->action('Ref_Kaedah_Perolehan_Controller@index')
            ->with(['alert-type'=>'success' , 'alert-message'=>'Tiada Data Dijumpai!.' ]);

            // return abort('404');
        }

        return view('selenggara.ref_kaedah_perolehan.edit')
        ->with('post',$post);

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
        // return $request;

        $request->validate([
            'kaedah_perolehan' => 'required|max:255'
        ]);

        $store                      = Ref_Kaedah_Perolehan::find($id);
        // $store                      = Ref_Kaedah_Perolehan::where('id','like'.$id)->first(); //kalau id string

        if(empty($store)){
            return redirect()->action('Ref_Kaedah_Perolehan_Controller@index')
            ->with(['alert-type'=>'danger' , 'alert-message'=>'Data Tidak Dapat Dikemaskini!.' ]);

            // return abort('404');
        }

        $store->kaedah_perolehan    = $request->kaedah_perolehan;
        $store->save();

        return redirect()->action('Ref_Kaedah_Perolehan_Controller@index')
        ->with([ 'alert-type'=>'success' , 'alert-message'=>'Data Berjaya Disimpan!.' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        $delete = Ref_Kaedah_Perolehan::find($id);
        $delete->delete();

        return redirect()->action('Ref_Kaedah_Perolehan_Controller@index')
        ->with([ 'alert-type'=>'success' , 'alert-message'=>'Data Berjaya Dipadam!.' ]);
    }


}
