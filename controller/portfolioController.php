<?php

namespace controller;

    class Portfolio{

        public function imovel(){
            $imoveis = new \Classes\Imoveis;

            $idImovel = isset($_GET['params'][0])?$_GET['params'][0]:0;

            $fields = array(
                "Codigo",
                "Status",
                "TituloSite",
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
                "Caracteristicas",
                "CodigoCorretor",
                ["Corretor"=>['Nome','TelefoneComercial', 'Foto' ]]
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
                // print_r($e['Corretor']);
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

            

            foreach ($listagem as $key ) {
                if (isset($listagem[$key['Codigo']]['ValorLocacao'])) {
                    $listagem[$key['Codigo']]['ValorLocacao'] = $imoveis->formataValor($listagem[$key['Codigo']]['ValorLocacao'], 100);
                }
                if (isset($listagem[$key['Codigo']]['ValorVenda'])) {
                    $listagem[$key['Codigo']]['ValorVenda'] = $imoveis->formataValor($listagem[$key['Codigo']]['ValorVenda'], 100);
                }
            }

        	include 'view/vendalocacao.php';
            // print_r($listagem);
        }


        public function locacao(){
        	$imoveis = new \Classes\Imoveis;

            $listagem = $imoveis
            ->filter(['Status'=>'ALUGUEL'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();

            foreach ($listagem as $key ) {
                if (isset($listagem[$key['Codigo']]['ValorLocacao'])) {
                    $listagem[$key['Codigo']]['ValorLocacao'] = $imoveis->formataValor($listagem[$key['Codigo']]['ValorLocacao'], 100);
                }
            }
            
            $linkDetalhe = $imoveis->setURL();
        	include 'view/locacao.php';
            
        }


        public function venda(){
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->filter(['Status'=>'VENDA'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            
            foreach ($listagem as $key ) {
                if (isset($listagem[$key['Codigo']]['ValorVenda'])) {
                    $listagem[$key['Codigo']]['ValorVenda'] = $imoveis->formataValor($listagem[$key['Codigo']]['ValorVenda'], 100);
                }
            }

            $linkDetalhe = $imoveis->setURL();
        	include 'view/venda.php';
            

        }

        
        public function listar(){
        	$imoveis = new \Classes\Imoveis;
        	print_r($listagem = $imoveis->setCurl("imoveis/listarcampos")->get());
        }
  
    }



