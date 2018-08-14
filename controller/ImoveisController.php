<?php

namespace controller;

    class Imoveis{

        public function imovel(){
            $imoveisdes = new \Classes\Imoveis;
            $destaques = $imoveisdes->destaques('');

    
            $idImovel = isset($_GET['params'][0])?$_GET['params'][0]:0;
            $fields = array(
                "Codigo",
                "Status",
                "TituloSite",
                "FotoDestaque",
                ["Foto"=>['Foto','FotoPequena','ExibirSite','Destaque','Ordem']],
                "Categoria",
                "Bairro",
                "Cidade",
                "ValorVenda",
                "ValorLocacao",
                "Dormitorios",
                "Vagas",
                "AreaConstruida",
                "AreaTerreno",
                "DescricaoWeb",
                "UF",
                "Pais",
                "DescricaoEmpreendimento",
                "CEP",
                "BairroComercial",
                "Caracteristicas",
                "CodigoCorretor",
                ["Corretor"=>['Nome','TelefoneComercial', 'Foto', 'Email','Perfil' ]]
            );

            $imoveis = new \Classes\Imoveis;
            $e = $imoveis
            ->setCurl('imoveis/detalhes')
            ->fields($fields)
            ->setCodigo($idImovel)
            ->get();
            
            
            if (empty($e['status']) ) { //verifica se tem algum erro com codigo
                $similares = new \Classes\Imoveis;
                $sml = $similares->filter(['Status' => $e['Status'], 'Categoria'=> $e['Categoria'] ]) ->paginacao(['quantidade'=> 4])->get(); //imóveis similares

                $e['ValorVenda'] = $imoveis->formataValor($e['ValorVenda'], 1000);
                $e['ValorLocacao'] = $imoveis->formataValor($e['ValorLocacao'], 100);

                include 'view/imovelDetalhe.php';
                // print_r($e);
            }else{
                header('Location: /'.pasta.'/Portfolio/ ');
            }

        }



        public function index(){
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->order($_POST)
            ->paginacao($_POST)
            ->get();

            // print_r($_POST);
            
            $imoveisdes = new \Classes\Imoveis;
            $destaques = $imoveisdes->destaques('');
        	include 'view/vendalocacao.php';
            // echo($imoveisdes->countType('Apartamento'));
            
        }


        public function locacao(){
        	$imoveis = new \Classes\Imoveis;

            $listagem = $imoveis
            ->order($_POST)
            ->filter(['Status'=>'ALUGUEL'])
            ->paginacao($_POST)
            ->get();

            $imoveisdes  = new \Classes\Imoveis; //objeto imoveis destaque
            $destaques = $imoveisdes ->destaques('ALUGUEL');

            // print_r($listagem);
        	include 'view/locacao.php';
            
        }


        public function venda(){
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->order($_POST)
            ->filter(['Status'=>'VENDA'])
            ->paginacao($_POST)
            ->get();
            
            $imoveisdes  = new \Classes\Imoveis;
            $destaques = $imoveisdes->destaques('VENDA');

        	include 'view/venda.php';
        }

        
        public function listar(){
        	$imoveis = new \Classes\Imoveis;
            echo "<pre>";
        	print_r($listagem = $imoveis->setCurl("imoveis/listarConteudo")->fields(['Categoria'])->get());
            echo "</pre>";
        }



        public function cadastroImovel(){
            $imoveisdes = new \Classes\Imoveis;
            $destaques = $imoveisdes->destaques('');
            include 'view/registerImovel.php';
        }

        public function setImovel (){
        $imoveis = new \Classes\Imoveis;
        $dados = json_encode($_POST);
        print_r($dados);

        $retorno = $imoveis
        ->setCurl("imoveis/detalhes")
        ->set( 'cadastro={"fields": '.$dados.'}')->post();


        // print_r($imoveis->codigo);
       
        print_r($retorno);

        }

  
    }



