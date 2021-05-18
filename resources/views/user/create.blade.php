@extends('layouts.app_admin',[ 'title'=>'PENGGUNA' , 'subTitle'=>'TAMBAH PENGGUNA' ])

@section('content')

<div class="card">
    <div class="card-header">
        <h6>TAMBAH PENGGUNA</h6>
    </div>
    <div class="card-body">
        <form action="{{ action('T_Users_Controller@store') }}" method="post" autocomplete="off">
            @csrf

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">No. Kad Pengenalan</label>
                <div class="col-lg-3">
                    <input type="text" name="nokp" class="form-control" value="{{ old('nokp') }}" maxlength="12">
                    <small>No. KP tanpa '-' dash/tolak.</small>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Nama Pengguna </label>
                <div class="col-lg-9">
                    <input type="text" name="nama_pengguna" class="form-control" value="{{ old('nama_pengguna') }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Emel Pengguna</label>
                <div class="col-lg-9">
                    <input type="email" name="emel_pengguna" class="form-control" value="{{ old('emel_pengguna') }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Agensi</label>
                <div class="col-lg-9">
                    <select name="agensi" class="form-control">
                        {!! Custom::dropdownAgensi( old('agensi') ?? '' ) !!}
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Peranan Pengguna</label>
                <div class="col-lg-9">
                    <select name="peranan_pengguna" class="form-control">
                        {!! Custom::dropdownRole( old('peranan_pengguna') ?? '' ) !!}
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Katalaluan   </label>
                <div class="col-lg-3">
                    <input type="text" name="katalaluan" class="form-control" value="{{ old('katalaluan') }}">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm">Simpan <i class="fas fa-save"></i></button>
                <button type="reset" class="btn btn-warning btn-sm">Set Semula <i class="fas fa-redo"></i></button>
                <a href="{{ action('T_Users_Controller@index') }}" class="btn btn-danger btn-sm">Batal <i class="fas fa-times"></i></a>
            </div>

        </form>
    </div>
</div>

@endsection
