@extends('layouts.app_admin',[ 'title'=>'SELENGGARA' , 'subTitle'=>'KAEDAH PEROLEHAN : KEMASKINI KAEDAH PEROLEHAN' ])

@section('content')

<div class="card">
    <div class="card-header">
        <h5>KEMASKINI KAEDAH PEROLEHAN</h5>
    </div>
    <div class="card-body">

        <form action="{{ action('Ref_Kaedah_Perolehan_Controller@update', $post->id ) }}" method="post" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Kaedah Perolehan</label>
                <div class="col-lg-9">
                    <input type="text" name="kaedah_perolehan" class="form-control" value="{{ old('kaedah_perolehan') ?? $post->kaedah_perolehan ?? '' }}">
                </div>
            </div>

            <div class="form-group">
                <input type="hidden" name="_method" value="put">
                <button type="submit" class="btn btn-success btn-sm">Simpan <i class="fas fa-save"></i></button>
                <a href="{{ action('Ref_Kaedah_Perolehan_Controller@edit', $post->id ) }}" class="btn btn-warning btn-sm">Set Semula <i class="fas fa-redo"></i></a>
                <a href="{{ action('Ref_Kaedah_Perolehan_Controller@index') }}" class="btn btn-danger btn-sm">Batal <i class="fas fa-times"></i></a>
            </div>

        </form>

    </div>
</div>

@endsection



