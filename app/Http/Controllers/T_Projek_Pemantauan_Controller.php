<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Storage;
use App\Models\T_Projek_Pemantauan;
use carbon\Carbon;

class T_Projek_Pemantauan_Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = T_Projek_Pemantauan::all();
        $post = T_Projek_Pemantauan::paginate(15);
        return view('t_projek_pemantauan.index')
        ->with('post',$post)
        ->with('all',$all);
    }


    public function senarai_lulus(){

        $senaraiProjek = T_Projek_Pemantauan::where('status_kelulusan','LULUS')->get();

        return view('projek_pemantauan.lulus')
        ->with('senarai_projek',$senaraiProjek);
    }

    public function senarai_batal(){

        $senaraiProjek = T_Projek_Pemantauan::where('status_kelulusan','BATAL')->get();

        return view('projek_pemantauan.lulus')
        ->with('senarai_projek',$senaraiProjek);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('t_projek_pemantauan.create');
    }



    public function validation($request){
        $this->validate(
            $request, [
            'tarikh_surat_permohonan'           => 'nullable|date',
            'lampiran_permohonan'               => 'file|mimes:pdf|nullable|max:11000',
            'tarikh_surat_kelulusan_epu'        => 'nullable|date',
            'lampiran_surat_kelulusan_epu'      => 'file|mimes:pdf|nullable|max:11000',
            'tarikh_memo'                       => 'nullable|date',
            'lampiran_memo'                     => 'file|mimes:pdf|nullable|max:11000',
            'tarikh_surat_setuju_terima'        => 'nullable|date',
            'tarikh_mula'                       => 'nullable|date',
            'tarikh_siap'                       => 'nullable|date',
            'tarikh_siap_sebenar'               => 'nullable|date',
            'tarikh_kemaskini_agensi'           => 'nullable|date',
            ]
        );
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

        $this->validation($request);

        $post                                   =   new T_Projek_Pemantauan;
        $post->nama_pemohon                     =   $request->nama_pemohon;
        $post->nama_projek                      =   $request->nama_projek;
        $post->tarikh_surat_permohonan          =   $request->tarikh_surat_permohonan;
        $post->skop_projek                      =   $request->skop_projek;
        $post->kategori_projek                  =   $request->kategori_projek;
        $post->maklumat_kelulusan               =   $request->maklumat_kelulusan;
        $post->tarikh_surat_kelulusan_epu       =   $request->tarikh_surat_kelulusan_epu;
        $post->tarikh_memo                      =   $request->tarikh_memo;
        $post->negeri                           =   $request->negeri;
        $post->daerah                           =   $request->daerah;
        $post->parlimen                         =   $request->parlimen;
        $post->dun                              =   $request->dun;
        $post->status_kelulusan                 =   $request->status_kelulusan;
        $post->status_pelaksanaan               =   $request->status_pelaksanaan;
        $post->catatan                          =   $request->catatan;
        $post->agensi_pelaksana                 =   $request->agensi_pelaksana;
        $post->kaedah_perolehan                 =   $request->kaedah_perolehan;
        $post->tarikh_surat_setuju_terima       =   $request->tarikh_surat_setuju_terima;
        $post->tarikh_mula                      =   $request->tarikh_mula;
        $post->tarikh_siap                      =   $request->tarikh_siap;
        $post->tempoh_pelaksanaan               =   $request->tempoh_pelaksanaan;
        $post->tarikh_siap_sebenar              =   $request->tarikh_siap_sebenar;
        $post->isu_pelaksanaan                  =   $request->isu_pelaksanaan;
        $post->pencapaian_projek                =   $request->pencapaian_projek;
        $post->kos_asal                         =   $request->kos_asal;
        $post->kos_pinda                        =   $request->kos_pinda;
        $post->kos_peruntukan_asal              =   $request->kos_peruntukan_asal;
        $post->kos_peruntukan_dipinda           =   $request->kos_peruntukan_dipinda;
        // $post->user_create                      =   Auth()->user()->id;
        // $post->user_updater                     =   Auth()->user()->id; // untuk user agensi pada function update
        // $post->tarikh_kemaskini_agensi          =   Carbon::now(); // untuk user agensi pada function update

        if( $request->hasFile('lampiran_permohonan')) {
            $post->lampiran_permohonan          = $this->fileUpload($request,'lampiran_permohonan');
        }

        if( $request->hasFile('lampiran_surat_kelulusan_epu')) {
            $post->lampiran_surat_kelulusan_epu          = $this->fileUpload($request,'lampiran_surat_kelulusan_epu');
        }

        if( $request->hasFile('lampiran_memo')) {
            $post->lampiran_memo                = $this->fileUpload($request,'lampiran_memo');
        }

        $post->save();

        return redirect()->action('T_Projek_Pemantauan_Controller@index')
        ->with([ 'alert-type'=>'success' , 'alert-message'=>'Pemantauan Projek berjaya disimpan!.' ]);
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
        $post   =   T_Projek_Pemantauan::find($id);

        return view('projek_pemantauan.edit')
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


        $post                                   =   T_Projek_Pemantauan::find($id);

        if(empty($post)){
            return redirect()->action('T_Projek_Pemantauan_Controller@index')
            ->with([ 'alert'=>'Pemantauan Projek tidak wujud!.' , 'alert-type'=>'danger' ]);
        }

        $post->nama_pemohon                     =   $request->nama_pemohon;
        $post->nama_projek                      =   $request->nama_projek;
        $post->tarikh_surat_permohonan          =   $request->tarikh_surat_permohonan;
        $post->skop_projek                      =   $request->skop_projek;
        $post->kategori_projek                  =   $request->kategori_projek;
        $post->maklumat_kelulusan               =   $request->maklumat_kelulusan;
        $post->tarikh_surat_kelulusan_epu       =   $request->tarikh_surat_kelulusan_epu;
        $post->tarikh_memo                      =   $request->tarikh_memo;
        $post->negeri                           =   $request->negeri;
        $post->daerah                           =   $request->daerah;
        $post->parlimen                         =   $request->parlimen;
        $post->dun                              =   $request->dun;
        $post->status_kelulusan                 =   $request->status_kelulusan;
        $post->status_pelaksanaan               =   $request->status_pelaksanaan;
        $post->catatan                          =   $request->catatan;
        $post->agensi_pelaksana                 =   $request->agensi_pelaksana;
        $post->kaedah_perolehan                 =   $request->kaedah_perolehan;
        $post->tarikh_surat_setuju_terima       =   $request->tarikh_surat_setuju_terima;
        $post->tarikh_mula                      =   $request->tarikh_mula;
        $post->tarikh_siap                      =   $request->tarikh_siap;
        $post->tempoh_pelaksanaan               =   $request->tempoh_pelaksanaan;
        $post->tarikh_siap_sebenar              =   $request->tarikh_siap_sebenar;
        $post->isu_pelaksanaan                  =   $request->isu_pelaksanaan;
        $post->pencapaian_projek                =   $request->pencapaian_projek;
        $post->kos_asal                         =   $request->kos_asal;
        $post->kos_pinda                        =   $request->kos_pinda;
        $post->kos_peruntukan_asal              =   $request->kos_peruntukan_asal;
        $post->kos_peruntukan_dipinda           =   $request->kos_peruntukan_dipinda;
        // $post->user_create                      =   Auth()->user()->id; // Untuk user admin pada function store
        // $post->user_updater                     =   Auth()->user()->id; // untuk user agensi pada function update
        // $post->tarikh_kemaskini_agensi          =   Carbon::now(); // untuk user agensi pada function update


        if( $request->hasFile('lampiran_permohonan')) {
            $post->lampiran_permohonan          = $this->fileUpload($request,'lampiran_permohonan');
        }

        if( $request->hasFile('lampiran_surat_kelulusan_epu')) {
            $post->lampiran_surat_kelulusan_epu          = $this->fileUpload($request,'lampiran_surat_kelulusan_epu');
        }

        if( $request->hasFile('lampiran_memo')) {
            $post->lampiran_memo                = $this->fileUpload($request,'lampiran_memo');
        }

        $post->updated_at                       =   Carbon::now();
        $post->save();

        return redirect()->action('T_Projek_Pemantauan_Controller@index')
        ->with([ 'alert'=>'Pemantauan Projek berjaya dikemaskini!.' , 'alert-type'=>'success' ]);
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




    public function fileUpload( $request , $file_title ){
        //Full File Name
        //$filenameWithExt    = $request->file($file_title)->getClientOriginalName();

        //Rename File Name
        $extension          = $request->file($file_title)->getClientOriginalExtension();
        $fileNameToStore    = Carbon::now()->format('YmdHis').'_'.$file_title.'_'.$file_title.'.'.$extension;

        //Simpan File ke Server
        $request->file($file_title)->storeAs('public/fileUpload', $fileNameToStore);

        return $fileNameToStore;
    }





}
