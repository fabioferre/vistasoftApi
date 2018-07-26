<?php

namespace controller;

    class Portfolio{

        public function imovel(){
            $imoveis = new \Classes\Imoveis;

            $idImovel = isset($_GET['params'][0])?$_GET['params'][0]:0;


            // print_r($idImovel);

            $fields = array(
                "Codigo",
                "Status",
                'Proprietario',
                ["Foto"=>['Foto','FotoPequena','ExibirSite','Destaque','Ordem']],
                "Categoria",
                "Bairro",
                "Cidade",
                "ValorVenda",
                "ValorLocacao",
                "Dormitorios",
                "Suites",
                "Vagas",
                "AreaTotal",
                "DescricaoWeb",
                "UF",
                "Pais",
                "CEP",
                "BairroComercial",
                "Caracteristicas"
            );

            $e = $imoveis
            ->setCurl('imoveis/detalhes')
            ->fields($fields)
            ->setCodigo($idImovel)
            ->get();

            
            if (empty($e['status']) ) {

                $e['ValorVenda'] = $imoveis->formataValor($e['ValorVenda'], 1000);
                $e['ValorLocacao'] = $imoveis->formataValor($e['ValorLocacao'], 100);
                include 'view/imovelDetalhe.php';
                // print_r($e);

            }else{
                header('Location: /'.pasta.'/Portfolio/ ');
            }
        
        }

        
        public function cadastroImovel(){
            include 'view/registerImovel.php';
        }

        public function index(){
        	$imoveis = new \Classes\Imoveis;


        	$listagem = $imoveis
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            
            $linkDetalhe = $imoveis->setURL();
        	include 'view/vendalocacao.php';
            print_r($listagem);
        }


        public function locacao(){
        	$imoveis = new \Classes\Imoveis;

            $listagem = $imoveis
            ->filter(['Status'=>'ALUGUEL'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            
            $linkDetalhe = $imoveis->setURL();
        	include 'view/locacao.php';
            
        }


        public function venda(){
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->filter(['Status'=>'VENDA'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            
            $linkDetalhe = $imoveis->setURL();
        	include 'view/venda.php';
            

        }

        
        public function listar(){
        	$imoveis = new \Classes\Imoveis;
        	print_r($listagem = $imoveis->setCurl("imoveis/listarcampos")->get());
        }
  
    }



