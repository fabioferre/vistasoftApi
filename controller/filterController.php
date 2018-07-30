<?php

namespace controller;

    class Result{

        public function index(){
            $imoveis = new \Classes\Imoveis;
            
            if (isset($_POST['busca']) ) {
                $_SESSION = $imoveis->busca($_POST);
            }

            // print_r($_SESSION);
            // print_r($_POST);
            if (isset($_SESSION) ){
                $dados = $_SESSION;

                $listagem = $imoveis
                ->order($_POST)
                ->filter($dados)
                ->paginacao($_POST)
                ->get();

                $imoveisdes = new \Classes\Imoveis;
                $destaques = $imoveisdes->destaques('');

                include 'view/resultPesquisa.php';
            }else{
                header('Location: /'.pasta.'/Portfolio/ ');
            }

        }

    }



