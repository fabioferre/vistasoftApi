<?php

namespace controller;

    class Result{

        public function index(){
            $imoveis = new \Classes\Imoveis;
            
            $params = $imoveis->getParams();
            $f = $imoveis->FormatFilter($params);

            $params = $imoveis->formatStr($params, '%2C','', ','); 
            $params = $imoveis->formatStr($params, 'R%24+','', 'R$');//valores formatado para exibição
            // print_r($filtros);


            $listagem = $imoveis
            ->filter($f)
            ->order($_POST)
            ->paginacao($_POST)
            ->get();

            $imoveisdes = new \Classes\Imoveis;
            $destaques = $imoveisdes->destaques('');

            // print_r($listagem);
            include 'view/buscaResult.php';
 
        
        }


      

    }



