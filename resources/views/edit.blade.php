@include('layouts.header')


@if (isset($produto))
    <!-- Código para edição, preencha os campos do formulário -->
    <form action="{{ route('produtos.update', $produto->id) }}" method="post">
        @method('PUT')
    @else
        <!-- Código para cadastro, mantenha seu formulário existente -->
        <form action="{{ route('produtos.store') }}" method="post">       
@endif
@csrf
<!-- Seus campos do formulário -->
<div class="form-group mt-5">
    <label for="name_prod">Nome do Produto:</label>
    <input type="text" name="name_prod" class="form-control" value="{{ isset($produto) ? $produto->name_prod : '' }}">
</div>
<button type="submit" class="btn btn-primary mt-5">{{ isset($produto) ? 'Atualizar' : 'Cadastrar' }} Produto</button>
</form>

@include('layouts.body')
