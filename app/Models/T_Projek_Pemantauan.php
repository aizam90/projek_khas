<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Projek_Pemantauan extends Model
{
    use HasFactory;

    protected $fillable = [
        //kene sama dengan fill table
        'nama_pemohon',
        'nama_projek',
        'tarikh_surat_permohonan',
        'lampiran_permohonan',
        'skop_projek',
        'kategori_projek',
        'maklumat_kelulusan',
        'tarikh_surat_kelulusan_epu',
        'lampiran_surat_kelulusan_epu',
        'tarikh_memo',
        'negeri',
        'daerah',
        'parlimen',
        'dun',
        'status_kelulusan',
        'status_pelaksanaan',
        'catatan',
        'agensi_pelaksana',
        'kaedah_perolehan',
        'tarikh_surat_setuju_terima',
        'tahun_setuju_terima',
        'tarikh_mula',
        'tarikh_siap',
        'tempoh_pelaksanaan',
        'tarikh_siap_sebenar',
        'isu_pelaksanaan',
        'pencapaian_projek',
        'kos_asal',
        'kos_pinda',
        'kos_peruntukan_asal',
        'kos_peruntukan_dipinda',
        'user_create',
        'user_updater',
        'tarikh_kemaskini_agensi'
    ];

    protected $table = 't_projek_pemantauan';
    protected $primaryKey = 'id';
    public $incrementing = true; //untuk auto disable id
    public $timestamps = true;
}
