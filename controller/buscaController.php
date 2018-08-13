<?php

namespace controller;

    class Result{

        public function index(){
            $imoveis = new \Classes\Imoveis;
            
            $params = $imoveis->getParams();
            // print_r($params);
            $f = $imoveis->FormatFilter($params);

            $params = $imoveis->formatStr($params, '%2C','', ','); 
            $params = $imoveis->formatStr($params, 'R%24+','', 'R$');//valores formatado para exibição
            
            // print_r($f);
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



