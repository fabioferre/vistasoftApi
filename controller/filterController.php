<?php

namespace controller;

    class Result{
        public function index(){
            if (isset($_POST['form'])) {
                unset($_COOKIE);
                $explode = explode(' ', $_POST['min-area']); $_POST['min-area'] = $explode[0];
                $explode = explode(' ', $_POST['max-area']); $_POST['max-area'] = $explode[0];
                $_COOKIE = array(
                    'AreaTotal'=> [$_POST['min-area'], $_POST['max-area'] ]
                );

                if (isset($_POST['Categoria']) ) {
                    $_COOKIE['Categoria'] = $_POST['Categoria'];
                }

                if (isset($_POST['Pais']) ){
                    $_COOKIE['Pais'] = $_POST['Pais'];
                }

                if ($_POST['status'] == 'VENDA' || $_POST['status'] == 'ALUGUEL'){
                    $_COOKIE['Status'] = $_POST['status'];
                }
            }

            $imoveis = new \Classes\Imoveis;
            $listagem = $imoveis->filter($_COOKIE)
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();

            $null = false;
            if ($listagem['total'] == 0) {
                $null = true;
            }
            // print_r($listagem );
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
        	$action = '/'.pasta.'/Portfolio/locacao';
            $linkDetalhe = $imoveis->detalheURL();
            print_r($listagem);

        	 include 'view/locacao.php';
        }


        public function venda(){
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->filter(['Status'=>'VENDA'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
        	$action = '/'.pasta.'/Portfolio/venda';
            $linkDetalhe = $imoveis->detalheURL();
        	include 'view/venda.php';

        }


        public function listar(){
        	$imoveis = new \Classes\Imoveis;
        	print_r($listagem = $imoveis->setCurl("imoveis/listarcampos")->get());
        }
  
    }



