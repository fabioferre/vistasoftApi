<?php

namespace controller;

    class Portfolio{

        public function detalhesImovel(){
            include 'view/imovelDetalhes.php';
        }
        
        public function cadastroImovel(){
            include 'view/registerImovel.php';
        }

        public function index(){
        	$imoveis = new \Classes\Imoveis;
        	

        	$listagem = $imoveis->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])->get();
        	// print_r($listagem);

            $action = '/'.pasta.'/Portfolio/index';
            $linkDetalhe = $imoveis->detalheURL();
        	include 'view/vendalocacao.php';

        }


        public function locacao(){
        	$imoveis = new \Classes\Imoveis;

        	$listagem = $imoveis->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])->get();

        	$action = '/'.pasta.'/Portfolio/locacao';
            $linkDetalhe = $imoveis->detalheURL();
        	include 'view/locacao.php';
        }


        public function venda(){
        	$imoveis = new \Classes\Imoveis;

        	$listagem = $imoveis->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])->get();

        	// print_r($_GET);
        	$action = '/'.pasta.'/Portfolio/venda';
            $linkDetalhe = $imoveis->detalheURL();
        	include 'view/venda.php';

        }

            public function listar(){
        	$imoveis = new \Classes\Imoveis;
        	
        	$listagem = $imoveis->listarCampos()->get();

        	 print_r($listagem);
        	// $action = '/'.pasta.'/Portfolio/venda';
        	// include 'view/venda.php';

        }
  
    }



