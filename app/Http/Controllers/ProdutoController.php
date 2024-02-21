<?php

namespace App\Http\Controllers;

use App\Models\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller

{
    public function index()
    {
        $produtos = Produto::all();
        return view('home', compact('produtos'));
    }
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_prod' => 'required|string|max:255',

        ]);
        Produto::create($request->all());

        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function edit(Produto $produto)
    {
        return view('edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'name_prod' => 'required|string|max:255',
            // Adicione outras regras de validação conforme necessário
        ]);

        $produto->update($request->all());

        // Redireciona novamente para a view de cadastro após a atualização
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
    // app/Http/Controllers/ProdutoController.php

    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    public function pesquisar(Request $request)
    {
    
        $termoPesquisa = $request->input('search');
        // Faça a consulta no banco de dados usando o termo de pesquisa
        $resultados = Produto::where('name_prod', 'like', "%$termoPesquisa%")->get();
    
        // Use ->with para enviar mensagens para a próxima solicitação
        return view('pesquisar', compact('resultados', 'termoPesquisa'))->with('success', 'Produtos encontrados com sucesso!');
    }
    
}
