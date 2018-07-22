<?php

namespace controller;

    class Portfolio{
     
        public function index(){
        	$imoveis = new \Classes\Imoveis;
        	
        	$listagem = $imoveis->fields([	'ValorLocacao','ValorVenda',
        									'Bairro','Cidade','Dormitorios',
        									'Status','FotoDestaque','TotalBanheiros',
        									'AreaTotal','Categoria','DescricaoWeb',
        									'Codigo','CEP','Pais'])

        	->paginacao(['pagina'=> isset($_POST['pag'])?$_POST['pag']:1, 'quantidade'=>10])
        	->get();

        	// print_r($_GET);
        	include 'view/vendalocacao.php';
        }
  
    }