
@if ( count($errors) > 0 )
    @foreach ( $errors->all() as $error )
        <div>
            <div class="alert bg-danger text-white alert-dismissible fade show close" role="alert">
                {{ $error }}
                <button type="button" class="btn-close text-white" data-dismiss="alert" aria-label="Close" ></button>
            </div>
        </div>
    @endforeach
@endif


@if(session()->has('alert-type'))
    <div class="alert bg-{{ session()->get('alert-type') }} text-white alert-dismissible fade show close" role="alert">
        {{ session()->get('alert-message') }}
        <button type="button" class="btn-close text-white" data-dismiss="alert" aria-label="Close" ></button>
    </div>
@endif








