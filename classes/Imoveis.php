<?php

namespace Classes;



class Imoveis extends App
{

    protected $curl = 'imoveis/listar';
    protected $dados = ['fields' => ['Finalidade','ValorLocacao','ValorVenda','Bairro','Cidade','Dormitorios','Status','FotoDestaque','TotalBanheiros','AreaTerreno','AreaConstruida','Categoria','DescricaoWeb','TituloSite','Codigo','CEP','Pais','UF','EmDestaque', 'SuperDestaqueWeb'],];

    public function setCurl($curl){
        $this->curl = $curl;
        return $this;
    }


    public function destaques($status){
        $filtro = array('EmDestaque' => 'Sim');

        if (!empty($status) ) {
            $filtro['Status'] = $status;
        }

        $retorno = $this
        ->filter($filtro)
        ->paginacao(['pagina'=> 1,'quantidade'=> 3 ])
        ->get();

        return $retorno;
    }   


    public function busca($param){
        $param['min-area'] = str_replace(' m²', '', $param['min-area']); $param['max-area'] = str_replace(' m²', '', $param['max-area']);
        $param['min-price'] = str_replace(',', '', $param['min-price']); $param['max-price'] = str_replace(',', '', $param['max-price']);
        $param['min-price'] = str_replace('R$', '', $param['min-price']); $param['max-price'] = str_replace('R$', '', $param['max-price']);

        
        if ($param['status'] == 'VENDA') {
            $pesquisa['Status'] = $param['status'];
            $pesquisa['ValorVenda'] = array($param['min-price'], $param['max-price']);
        }
        elseif ($param['status'] == 'ALUGUEL') {
            $pesquisa['Status'] = $param['status'];
            $pesquisa['ValorLocacao'] = array($param['min-price'], $param['max-price']);
        }else{
            $pesquisa['ValorVenda'] = array($param['min-price'], $param['max-price']);
        }

        
        $pesquisa['AreaTerreno'] = array($param['min-area'], $param['max-area']);
        
        
        if (!empty($param['categoria']) ) {
            $pesquisa['Categoria'] =  array('like', $param['categoria']);       
        }

        if (!empty($param['pais']) ) {
            $pesquisa['Pais'] = array('like',$param['pais']);
        } 
        return $pesquisa;
    }



    public function formataValor($var, $valor){
        if (!empty($var)) {
           if ($var >= $valor) {
                $var = number_format($var,0,',',',');
            }
        }
        return $var;
    }

}

  
