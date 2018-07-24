<?php

namespace controller;

    class Result{
        public function index(){
           
            $imoveis = new \Classes\Imoveis;
            $linkDetalhe = $imoveis->detalheURL();
            $action = '/'.pasta.'/Portfolio/pesquisa';

            if (isset($_POST['form']) ) { //verifica post vindo do formulario de encontre seu imovel 
                unset($_SESSION);
                $_SESSION = $imoveis->pesquisa($_POST);
            }

            print_r($_POST);
            print_r($_SESSION);
            $listagem = $imoveis
            ->filter($_SESSION)
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            include 'view/resultPesquisa.php';
        }
    }



