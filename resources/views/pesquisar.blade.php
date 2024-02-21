

@include('layouts.header')

    <div class="container mt-4">
        <h2>Resultados da Pesquisa para "{{ $termoPesquisa }}"</h2>

        @if ($resultados->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Produto</th>
                        <!-- Adicione outros campos conforme necessário -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resultados as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->name_prod }}</td>
                            <!-- Adicione outros campos conforme necessário -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Nenhum produto encontrado com o termo "{{ $termoPesquisa }}".</p>
        @endif
    </div>



@include('layouts.body')
