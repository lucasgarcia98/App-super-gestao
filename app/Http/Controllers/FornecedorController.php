<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/000-00',
                'ddd' => '', // São Paulo (SP)
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', // Fortaleza (CE)
                'telefone' => '00000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', // Juiz de Fora (MG)
                'telefone' => '00000-0000'
            ]
        ];

        $fornecedores1 = [];

        // condicional ternário
        // condicao ? se verdade : se falso;
        // $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';

        // echo $msg;

        return view('app.fornecedor.index', compact('fornecedores', 'fornecedores1'));
    }
}
