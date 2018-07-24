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
        	$listagem = $imoveis
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            $linkDetalhe = $imoveis->detalheURL();
        	include 'view/vendalocacao.php';

        }


        public function locacao(){
            print_r($_POST);
        	$imoveis = new \Classes\Imoveis;
            $listagem = $imoveis
            ->filter(['Status'=>'ALUGUEL'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            $linkDetalhe = $imoveis->detalheURL();
        	include 'view/locacao.php';
            // print_r($listagem);
        }


        public function venda(){
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->filter(['Status'=>'VENDA'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            $linkDetalhe = $imoveis->detalheURL();
        	include 'view/venda.php';
            print_r($listagem);
            

        }

        
        public function listar(){
        	$imoveis = new \Classes\Imoveis;
        	print_r($listagem = $imoveis->setCurl("imoveis/listarcampos")->get());
        }
  
    }



