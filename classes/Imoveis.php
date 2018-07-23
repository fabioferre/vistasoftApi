<?php

namespace Classes;


use Classes\Env;

class Imoveis extends Env
{
    protected $curl = 'imoveis/listar';
    protected $dados = ['fields' => ['ValorLocacao','ValorVenda','Bairro','Cidade','Dormitorios','Status','FotoDestaque','TotalBanheiros','AreaTotal','Categoria','DescricaoWeb','Codigo','CEP','Pais'],];

    public function listarCampos(){
    	unset($this->dados);
    	$this->curl = "imoveis/listarcampos";
    	return $this;
    }

    public function detalheURL(){
    	$URLdetalhe = '/'.pasta.'/Portfolio/detalhesImovel';
    	return $URLdetalhe;
    }
    




    
}

  
