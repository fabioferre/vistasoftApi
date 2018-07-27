<?php

namespace controller;

    class Result{

        public function index(){
            $imoveis = new \Classes\Imoveis;
            $linkDetalhe = $imoveis->setURL();


            if (isset($_POST['busca']) ) {
                $_SESSION = $imoveis->busca($_POST);
            }

            // print_r($_SESSION);
            // print_r($_POST);
            if (isset($_SESSION) ){
                $dados = $_SESSION;
                $pagina['pagina'] = isset($_POST['pag'])? $_POST['pag']: 1;

                $listagem = $imoveis
                ->filter($dados)
                ->paginacao($pagina)
                ->get();
                
                foreach ($listagem as $key ) {
                    if (isset($listagem[$key['Codigo']]['ValorLocacao'])) {
                        $listagem[$key['Codigo']]['ValorLocacao'] = $imoveis->formataValor($listagem[$key['Codigo']]['ValorLocacao'], 100);
                    }

                    if (isset($listagem[$key['Codigo']]['ValorVenda'])) {
                        $listagem[$key['Codigo']]['ValorVenda'] = $imoveis->formataValor($listagem[$key['Codigo']]['ValorVenda'], 100);
                    }
                }

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



