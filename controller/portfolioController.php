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
            // print_r($_POST['pag']);
            // die();
            
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            $action = '/'.pasta.'/Result/index';
            $linkDetalhe = $imoveis->detalheURL();
        	include 'view/vendalocacao.php';

        }


        public function locacao(){
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->filter(['Status'=>'ALUGUEL'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
        	$action = '/'.pasta.'/Result/locacao';
            $linkDetalhe = $imoveis->detalheURL();
        	 include 'view/locacao.php';
        }


        public function venda(){
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->filter(['Status'=>'VENDA'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
        	$action = '/'.pasta.'/Result/venda';
            $linkDetalhe = $imoveis->detalheURL();
        	include 'view/venda.php';

        }


        public function listar(){
        	$imoveis = new \Classes\Imoveis;
        	print_r($listagem = $imoveis->setCurl("imoveis/listarcampos")->get());
        }
  
    }



