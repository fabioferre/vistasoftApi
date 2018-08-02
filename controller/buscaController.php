<?php

namespace controller;

    class Result{

        public function index(){
            $imoveis = new \Classes\Imoveis;
            
           
            $dados = $imoveis->FormatFilter();
            print_r($dados);

            $listagem = $imoveis
            ->order($_POST)
            ->filter($dados)
            ->paginacao($_POST)
            ->get();

            $imoveisdes = new \Classes\Imoveis;
            $destaques = $imoveisdes->destaques('');

            // print_r($listagem);
            // include 'view/buscaResult.php';
 

        }


      

    }



