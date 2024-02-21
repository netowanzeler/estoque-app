<div class="container mt-4">
    <h2>Lista de Produtos</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Produto</th>
                <th>Ações</th> <!-- Adicione a coluna para as ações -->
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->name_prod }}</td>
                    <td>
                        <!-- Botão de Editar -->
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary btn-sm">Editar</a>

                        <!-- Botão de Excluir -->
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
