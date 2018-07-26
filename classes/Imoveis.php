<?php

namespace Classes;


use Classes\Env;

class Imoveis extends Env
{


    protected $codigo;
    protected $curl = 'imoveis/listar';
    protected $dados = ['fields' => ['Finalidade','ValorLocacao','ValorVenda','Bairro','Cidade','Dormitorios','Status','FotoDestaque','TotalBanheiros','AreaTotal','Categoria','DescricaoWeb','Codigo','CEP','Pais','UF','Caracteristicas','InfraEstrutura'],];

    public function setCurl($curl){
        $this->curl = $curl;
        return $this;
    }



    public function setURL(){
    	return  '/'.pasta.'/Portfolio/imovel';
    }
    

  	public function getOptions(){
        $disponiveis = $this
        ->setField(['fields'=>['Pais','Categoria','Status']]);
        return $disponiveis;
    }



    public function busca($param){
        $param['min-area'] = str_replace(' m²', '', $param['min-area']); $param['max-area'] = str_replace(' m²', '', $param['max-area']);
        $param['min-price'] = str_replace(',', '', $param['min-price']); $param['max-price'] = str_replace(',', '', $param['max-price']);
        $param['min-price'] = str_replace('R$', '', $param['min-price']); $param['max-price'] = str_replace('R$', '', $param['max-price']);

        if ($param['status'] == 'VENDA') {
            $pesquisa['Status'] = $param['status'];
            $pesquisa['ValorVenda'] = array($param['min-price'], $param['max-price']);
        }
        if ($param['status'] == 'ALUGUEL') {
            $pesquisa['Status'] = $param['status'];
            $pesquisa['ValorLocacao'] = array($param['min-price'], $param['max-price']);
        }

        if ($param['min-area'] > 10) {
            $pesquisa['AreaTotal'] = array($param['min-area'], $param['max-area']);
        }
        
        if (!empty($param['categoria']) ) {
            $pesquisa['Categoria'] =  array('like', $param['categoria']);       
        }

        if (!empty($param['pais']) ) {
            $pesquisa['Pais'] = array('like',$param['pais']);
        } 
        return $pesquisa;
    }



    public function formataValor($var, $valor){
        if ($var >= $valor) {
            $var = number_format($var,0,',',',');
        }
        return $var;
    }

}

  
