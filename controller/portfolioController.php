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
                "FotoDestaque",
                ["Foto"=>['Foto','FotoPequena','ExibirSite','Destaque','Ordem']],
                "Categoria",
                "Bairro",
                "Cidade",
                "ValorVenda",
                "ValorLocacao",
                "Dormitorios",
                "Suites",
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
                // print_r($e);
            }else{
                header('Location: /'.pasta.'/Portfolio/ ');
            }
        
        }



        public function index(){
        	$imoveis = new \Classes\Imoveis;

        	$listagem = $imoveis
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();

            $destaques = $imoveis->destaques('');

        	include 'view/vendalocacao.php';
            // print_r($listagem);
        }


        public function locacao(){
        	$imoveis = new \Classes\Imoveis;

            $listagem = $imoveis
            ->filter(['Status'=>'ALUGUEL'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();

            $destaques = $imoveis->destaques('ALUGUEL');

            // print_r($listagem);
        	include 'view/locacao.php';
            
        }


        public function venda(){
        	$imoveis = new \Classes\Imoveis;
        	$listagem = $imoveis
            ->filter(['Status'=>'VENDA'])
            ->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1])
            ->get();
            
            $destaques = $imoveis->destaques('VENDA');

        	include 'view/venda.php';
        }

        
        public function listar(){
        	$imoveis = new \Classes\Imoveis;
        	print_r($listagem = $imoveis->setCurl("imoveis/listarcampos")->get());
        }



        public function ShowFormCadastroImovel(){
            include 'view/registerImovel.php';
        }


        public function setImovel (){
        $imoveis = new \Classes\Imoveis;
        print_r($_POST);
        $dados = $imoveis->setCurl("imoveis/detalhes")->set(
            'cadastro={"fields":
                            {
                            "Categoria":"Apartamento",
                            "Endereco":"'.$_POST["Endereco"].'",
                            "Numero":"11111",
                            "Complemento":"9054",
                            "Bairro":"'.$_POST["Bairro"].'",
                            "Cidade":"'.$_POST["Cidade"].'",
                            "UF":"'.$_POST["UF"].'",
                            "CEP":"04897340",
                            "Situacao":"Novo"
                             }
                     }')->post();


        // print_r($imoveis->codigo);
       
        // print_r($imoveis);

        }

  
    }



