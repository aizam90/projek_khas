@extends('layouts.app_admin',[ 'title'=>'SELENGGARA' , 'subTitle'=>'KAEDAH PEROLEHAN' ])

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{ action('Ref_Kaedah_Perolehan_Controller@create') }}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" title="Tambah Kaedah Projek">
            <i class="fas fa-plus-circle"></i>
        </a>

        <h6>SENARAI KAEDAH PEROLEHAN</h6>
    </div>
    <div class="card-body">
        <div class="dt-responsive table-responsive">
            <table class="myDataTable table table-striped table-hover table-bordered nowrap" style="width:100%">
                <tHead>
                    <tr>
                        <th>id</th>
                        <th>Kaedah Perolehan</th>
                        <th></th>
                    </tr>
                </tHead>
                <tBody>
                    @foreach ($post as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kaedah_perolehan }}</td>
                            <td class="text-center">
                                <a href="{{ action('Ref_Kaedah_Perolehan_Controller@edit',$item->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Kemaskini"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" onclick="myDeleteButton('{{ $item->id }}');"><i class="fas fa-trash"  ></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tBody>
            </table>
        </div>
    </div>
</div>

@endsection



@section('jquery')

<div id="deleteModel" class="modal fade" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-danger text-white">
            <div class="modal-header">
                <h5 class="modal-title text-white">PERHATIAN!!!.</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Adakah anda pasti untuk memadam data ini?.</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>

                <form action="index" method="post" id="myform">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="btn btn-outline-light">Ya</button>
                </form>


            </div>
        </div>
    </div>
</div>

<script>

    function myDeleteButton(x){
        // alert(x);
        $("#myform").attr('action', '{{ action('Ref_Kaedah_Perolehan_Controller@destroy','/') }}/'+x);
        $('#deleteModel').modal('show');
    }

</script>

@endsection
