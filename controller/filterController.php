<?php

namespace controller;

    class Result{

        public function index(){
            $imoveis = new \Classes\Imoveis;
            $linkDetalhe = $imoveis->setURL();
            $_COOKIE['layout-btn'] = 'btn-grid-3-col';
            if (isset($_POST['busca']) ) {
                $_SESSION = $imoveis->busca($_POST);
            }

            // print_r($_SESSION);
            if (isset($_SESSION) ){
                $dados = $_SESSION;
                $pagina['pagina'] = isset($_POST['pag'])? $_POST['pag']: 1;
                $listagem = $imoveis
                ->filter($dados)
                ->paginacao($pagina)
                ->get();

                include 'view/resultPesquisa.php';
            }else{
                header('Location: /'.pasta.'/Portfolio/ ');
            }

        }

        public function option(){
            $imoveis = new \Classes\Imoveis;
            $disponivel = $imoveis->getOptions()->get();

            header("Content-type: Application/json");
            echo json_encode($disponivel);
        }
    }



