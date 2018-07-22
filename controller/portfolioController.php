<?php

namespace controller;

    class Portfolio{
     
        public function index(){
        	$imoveis = new \Classes\Imoveis;

        	$listagem = $imoveis->fields(['ValorLocacao','ValorVenda','Bairro','Cidade','Dormitorios','Status','FotoDestaque','TotalBanheiros','AreaTotal','Categoria','DescricaoWeb','Codigo','CEP','Pais'])->get();
        	include 'view/vendalocacao.php';
        }
  
    }