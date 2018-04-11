<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class ClienteController extends Controller
{
    public function pesquisar()
    {
        // Recebe o conteúdo elemento 'descricao' do formulário
        $nomeAquicultor = Input::get('nomeAquicultor');

        // Busca produtos com o conteúdo da $descricao
        $clientes = Cliente::where('nomeAquicultor', 'like', '%'.$nomeAquicultor.'%')->get();

        // Chama a view produto.pesquisar e envia os produtos encontrados
        return view('cliente.pesquisar')->with('clientes', $clientes);
    }


    public function mostrar_inserir()
    {
        return view('cliente.inserir');
    }


    public function inserir()
    {
        // Criando um novo objeto do tipo Produto
        $cliente = new Cliente();

        // Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $cliente->nomeAquicultor = Input::get('nomeAquicultor');
        $cliente->atividade = Input::get('atividade');
        $cliente->CPF = Input::get('CPF');
        $cliente->rg = Input::get('rg');
        $cliente->naturalidade= Input::get('naturalidade');
        $cliente->inscricaoEstadual= Input::get('inscricaoEstadual');
        $cliente->tipoPropriedade= Input::get('tipoPropriedade');


        // Salvando no banco de dados
        $cliente->save();

        // Criado uma mensagem para o usuário
        $mensagem = "Cliente inserido com sucesso";

        // Chamando a view produto.inserir e enviando a mensagem criada
        return view('cliente.inserir')->with('mensagem', $mensagem);
    }


    public function mostrar_alterar($id)
    {
        // Busca no banco o registro com o id recebido
        $cliente = Cliente::find($id);

        // Envia os dados deste registro a view produto.alterar
        return view('cliente.alterar')->with('cliente', $cliente);
    }


    public function alterar()
    {
        $id = Input::get('id');
        $c = Cliente::find($id);

        $c->nomeAquicultor = Input::get('nomeAquicultor');
        $c->atividade = Input::get('atividade');
        $c->CPF = Input::get('CPF');
        $c->rg = Input::get('rg');
        $c->naturalidade = Input::get('naturalidade');
        $c->inscricaoEstadual = Input::get('inscricaoEstadual');
        $c->tipoPropriedade = Input::get('tipoPropriedade');

        $c->save();

        $mensagem = "Cliente alterado com sucesso!";
        $clientes = Cliente::all();
        return view('cliente.pesquisar')->with('mensagem', $mensagem)->with('clientes', $clientes);
    }




    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota
        $cliente = Cliente::find($id);

        // Excluindo este objeto
        $cliente->delete();

        // Criando uma mensagem para ser enviada a view produto.pesquisar
        $mensagem = "Cliente excluído com sucesso!";

        // Capturando objetos para enviar a view produto.pesquisar
        $clientes = Cliente::all();

        // Retornando a view produto.pesquisar
        return view('cliente.pesquisar')->with('mensagem', $mensagem)->with('clientes', $clientes);
    }
    }

