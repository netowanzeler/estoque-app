<!-- resources/views/home.blade.php -->


@include('layouts.header')
@include('layouts.body')

@section('content')
    <div class="d-flex align-items-center justify-content-center vh-10">
        <div class="container-md text-center">
            <h1 class="fs-1" font>SEJA BEM-VINDO AO SMART STOCK</h1>
        </div>
    </div>
@endsection

@if(session('success'))
    <div id="success-alert" class="alert alert-success w-50 text-center mx-auto mt-1">
        {{ session('success') }}
    </div>
@endif


@include('layouts.show')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Esconde a mensagem após 2 segundos (2000 milissegundos)
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
        }, 2000);
    });
</script>
