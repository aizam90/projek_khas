@extends('layouts.master-error')

@section('content')


<div class="col-lg-12">



    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Pemohon</label>
            <div class="col-sm-9">
                <textarea name="nama_pemohon" rows="3" class="form-control">{{ $post->nama_pemohon ?? '' }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Projek</label>
            <div class="col-sm-9">
                <textarea name="nama_projek" rows="3" class="form-control">{{ $post->nama_projek ?? '' }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tarikh Surat Permohonan</label>
            <div class="col-sm-3">
                <input type="date" name="tarikh_surat_permohonan" class="form-control" {{ $post->tarikh_surat_permohonan ?? '' }} >
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Lampiran Surat Permohonan</label>
            <div class="col-sm-9">
                <input type="file" name="lampiran_surat_permohonan">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Skop Projek</label>
            <div class="col-sm-9">
                <textarea name="skop_projek" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kategori Projek</label>
            <div class="col-sm-9">
                <select name="kategori_projek" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Maklumat Kelulusan</label>
            <div class="col-sm-9">
                <select name="maklumat_kelulusan" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tarikh Surat Kelulusan EPU</label>
            <div class="col-sm-3">
                <input type="date" name="tarikh_surat_kelulusan_epu" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Lampiran Surat Kelulusan EPU</label>
            <div class="col-sm-9">
                <input type="file" name="lampiran_surat_kelulusan_epu">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tarikh MEMO</label>
            <div class="col-sm-3">
                <input type="date" name="tarikh_memo" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Lampiran MEMO</label>
            <div class="col-sm-9">
                <input type="file" name="lampiran_memo">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Negeri</label>
            <div class="col-sm-9">
                <select name="negeri" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Daerah</label>
            <div class="col-sm-9">
                <select name="daerah" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Parlimen</label>
            <div class="col-sm-9">
                <select name="parlimen" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Dun</label>
            <div class="col-sm-9">
                <select name="dun" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Status Kelulusan</label>
            <div class="col-sm-9">
                <select name="status_kelulusan" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Status Pelaksanaan</label>
            <div class="col-sm-9">
                <select name="status_pelaksanaan" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Catatan</label>
            <div class="col-sm-9">
                <input type="text" name="catatan" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Agensi Pelaksana</label>
            <div class="col-sm-9">
                <select name="agensi_pelaksana" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kaedah Perolehan</label>
            <div class="col-sm-9">
                <select name="kaedah_perolehan" class="form-control">
                    <option value="">Sila Pilih</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tarikh Surat Setuju Terima</label>
            <div class="col-sm-3">
                <input type="date" name="tarikh_surat_setuju_terima" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tarikh Mula</label>
            <div class="col-sm-3">
                <input type="date" name="tarikh_mula" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tarikh Siap</label>
            <div class="col-sm-3">
                <input type="date" name="tarikh_siap" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tempoh Pelaksanaan</label>
            <div class="col-sm-9">
                <textarea name="tempoh_pelaksanaan" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tarikh Siap Sebenar</label>
            <div class="col-sm-3">
                <input type="date" name="tarikh_siap_sebenar" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Isu-Isu Pelaksanaan</label>
            <div class="col-sm-9">
                <textarea name="isu_pelaksanaan" rows="3" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Pencapaian Projek (%)</label>
            <div class="input-group col-sm-2">
                <input type="number" name="pencapaian_projek" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fas fa-percent"></i></span>
                </div>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kos Asal</label>
            <div class="input-group col-sm-3">
                <div class="input-group-append">
                    <span class="input-group-text text-bold" id="basic-addon2">RM</span>
                </div>
                <input type="number" name="kos_asal" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kos Pinda</label>
            <div class="input-group col-sm-3">
                <div class="input-group-append">
                    <span class="input-group-text text-bold" id="basic-addon2">RM</span>
                </div>
                <input type="number" name="kos_pinda" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kos Peruntukan Asal</label>
            <div class="input-group col-sm-3">
                <div class="input-group-append">
                    <span class="input-group-text text-bold" id="basic-addon2">RM</span>
                </div>
                <input type="number" name="kos_peruntukan_asal" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kos Peruntukan Dipinda</label>
            <div class="input-group col-sm-3">
                <div class="input-group-append">
                    <span class="input-group-text text-bold" id="basic-addon2">RM</span>
                </div>
                <input type="number" name="kos_peruntukan_dipinda" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary mr-1">Simpan <i class="fas fa-save"></i></button>
            <button type="button" class="btn btn-danger">Batal <i class="fas fa-times"></i></button>
        </div>

    </form>





</div>

@endsection
