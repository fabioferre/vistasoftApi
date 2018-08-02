<?php

namespace Classes;



class Imoveis extends App
{

    protected $curl = 'imoveis/listar';
    protected $dados = ['fields' => ['Finalidade','ValorLocacao','ValorVenda','Bairro','Cidade','Dormitorios','Status','FotoDestaque','TotalBanheiros','AreaTerreno','AreaConstruida','Categoria','DescricaoWeb','TituloSite','Codigo','CEP','Pais','UF','EmDestaque', 'SuperDestaqueWeb','DataCadastro'],];

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
        ->order('')
        ->filter($filtro)
        ->paginacao(['pagina'=> 1,'quantidade'=> 3 ])
        ->get();
        return $retorno;
    }   

    public function countPhoto($id){
        $retorno = $this
        ->setCurl('imoveis/detalhes')
        ->fields([ ["Foto"=>['Foto'] ] ])
        ->setCodigo($id)
        ->get();

        return count($retorno['Foto']); ;
    }


   


    public function FormatFilter(){ //prepara valor da busca para filter
        $params = $this->getParams();
        $params = $this->formatStr($params, '%2C','R%');
        $params = $this->formatStr($params, '+m%C2%B2','');
    
        if (isset($params['Categoria']) ) {
            $params['Categoria'] = explode('-', $params['Categoria']);
        }

        if (isset($params['Pais']) ) {
            $params['Pais'] = explode('-', $params['Pais']);
        }

        if ($params['Status'] == 'ALUGUEL') {
            $params['ValorLocacao'] = array($param['min-price'], $params['max-price']);
        }else{
            $params['ValorVenda'] = array($params['min-price'], $params['max-price']);
        }

        if ($params['min-area'] > 10 || $params['max-area'] < 6000 ) {
           $params['AreaTerreno'] = array($params['min-area'], $params['max-area']);
        }

        unset($params['min-area'], $params['max-area'],$params['busca'],$params['min-price'], $params['max-price']);
        return $params;
    }


    public function getParams(){ //pega parametro da url
        $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI']: '';
        if ($uri != ''){
            $urls  = explode('/', $uri);
            $param = str_replace('?','', end($urls));
            $param = explode('&', $param);
            $params = array();
            foreach($param as $pa){
                $vp = explode('=', $pa);            
                $params[$vp[0]] = sizeof($vp)==2?$vp[1]:NULL;
            }

            foreach ($params as $key => $value) { //tira os campos vazio
                if (!empty($value)) {
                    $retorno[$key] = $value;
                }
            }
            return $retorno;
        }
    }


    public function formatStr($var, $str,$str2){
        $retorno = str_replace($str, '', $var);
        if (!empty($str2)) {
            $retorno = str_replace($str2, '', $retorno);
        }
        return $retorno;
    }


    public function formataValor($var, $valor){
        if (!empty($var)) {
           if ($var >= $valor) {
                $var = number_format($var,0,',',',');
            }
        }
        return $var;
    }

    public function checkSelect($var, $select){
        $retorno = '';
        
        $check = isset($_SESSION[$var][1])? $_SESSION[$var][1]: '' ;
        if ($check == $select) {
            $retorno = "selected";
        }

        $check2 = isset($_SESSION[$var])? $_SESSION[$var]: '' ;
        if ($check2 == $select) {
            $retorno = "selected";
        }

        echo $retorno ;
    }
    

}

  
