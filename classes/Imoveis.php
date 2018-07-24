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
    

    public function pesquisa($param){
        $param['min-area'] = str_replace(' m²', '', $param['min-area']); $param['max-area'] = str_replace(' m²', '', $param['max-area']);
        $param['min-price'] = str_replace(',', '', $param['min-price']); $param['max-price'] = str_replace(',', '', $param['max-price']);
        $param['min-price'] = str_replace('R$', '', $param['min-price']); $param['max-price'] = str_replace('R$', '', $param['max-price']);

        $pesquisa['AreaTotal'] = array($param['min-area'], $param['max-area']);

        if ($param['status'] == 'VENDA') {
            $pesquisa['ValorVenda'] = array($param['min-price'], $param['max-price']);
            $pesquisa['Status'] = $param['status'];
        }

        if ($param['status'] == 'ALUGUEL') {
            $pesquisa['Status'] = $param['status'];
        }

        if (!empty($param['Categoria']) ) {
            $pesquisa['Categoria'] =  array('like', $param['Categoria']);       
        }
        
        if (!empty($param['Pais']) ) {
            $pesquisa['Pais'] = array('like',$param['Pais']);
        }

        
        return $pesquisa; 
    }


    
}

  
