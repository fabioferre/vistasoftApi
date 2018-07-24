<?php

namespace controller;

    class Result{
        public function index(){
            $imoveis = new \Classes\Imoveis;
            $linkDetalhe = $imoveis->detalheURL();
            $action = '/'.pasta.'/Result/index';

            // print_r($_POST);
            
            print_r($_SESSION);
            if (isset($_POST['busca']) ) { //verifica post vindo do formulario de encontre seu imovel 
                $_POST['min-area'] = str_replace(' m²', '', $_POST['min-area']); $_POST['max-area'] = str_replace(' m²', '', $_POST['max-area']);
                $_POST['min-price'] = str_replace(',', '', $_POST['min-price']); $_POST['max-price'] = str_replace(',', '', $_POST['max-price']);
                $_POST['min-price'] = str_replace('R$', '', $_POST['min-price']); $_POST['max-price'] = str_replace('R$', '', $_POST['max-price']);

                if ($_POST['status'] == 'VENDA') {
                    $pesquisa['Status'] = $_POST['status'];
                    $pesquisa['ValorVenda'] = array($_POST['min-price'], $_POST['max-price']);
                }

                if ($_POST['status'] == 'ALUGUEL') {
                    $pesquisa['Status'] = $_POST['status'];
                }

                $pesquisa['AreaTotal'] = array($_POST['min-area'], $_POST['max-area']);

                if (!empty($_POST['categoria']) ) {
                    $pesquisa['Categoria'] =  array('like', $_POST['categoria']);       
                }

                if (!empty($_POST['pais']) ) {
                    $pesquisa['Pais'] = array('like',$_POST['pais']);
                }   
                $_SESSION = $pesquisa;
                print_r($pesquisa);
            }
            

            if (isset($_SESSION) ){
                $dados = $_SESSION;
                $pagina['pagina'] = isset($_POST['pag'])? $_POST['pag']: 1;
                $listagem = $imoveis
                ->filter($dados)
                ->paginacao($pagina)
                ->get();
                print_r($pagina['pagina']);
                include 'view/resultPesquisa.php';
            }
        }
    }



