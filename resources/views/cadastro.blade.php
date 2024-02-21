@include('layouts.header')

<div class="container mt-5 text-center">
    <h2>Cadastrar Novo Produto</h2>
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <form action="{{ route('produtos.store') }}" method="post">
        @csrf
        <div class="form-group mt-5">
            <label for="name_prod">Nome do Produto:</label>
            <input type="text" name="name_prod" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-5">Cadastrar Produto</button>
    </form>
</div>