<?php

namespace Classes;


use Classes\Env;

class Imoveis extends Env
{


    protected $curl = 'imoveis/listar';
    protected $dados = ['fields' => ['ValorLocacao','ValorVenda','Bairro','Cidade','Dormitorios','Status','FotoDestaque','TotalBanheiros','AreaTotal','Categoria','DescricaoWeb','Codigo','CEP','Pais','UF'],];

    public function setCurl($curl){
        $this->curl = $curl;
        return $this;
    }


    public function detalheURL(){
    	return  '/'.pasta.'/Portfolio/detalhesImovel';
    }
    

}

  
