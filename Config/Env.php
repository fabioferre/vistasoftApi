<?php
namespace Config;

class Env
{

    private $url;
    private $result;
    private $key;
    private $http;
    protected $dados;
    protected $curl;

    private function conn(){
        //monta a url para a curl
        $this->url         =  $this->http;
        $this->url        .=    $this->curl;
        $this->url        .=   '?key=' . $this->key;
        //verificar se possui pesquisa
        if(isset($this->dados)){
            $this->url        .=  '&pesquisa=' . $this->dados;
        }
        //inicia a conexao
        $ch = curl_init($this->url);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_HTTPHEADER , array( 'Accept: application/json' ) );
        $result = curl_exec( $ch );

        //retorna os resultados
        $this->result = json_decode( $result, true );
      
    }
    
    //retorna todos os dados
    public function get(){
        $this->conn();
        return $this->result;
    }

    //fields
    public function fields($array){
        $this->dados = json_encode(array(
            'fields' => $array
        ));
        return $this;
    }

    //filtros 
    public function filter($array){
        $this->dados = json_encode(array(
            'filter' => $array
        ));
        return $this;
    }

    function __construct() 
    { 
        $this->http = 'http://sandbox-rest.vistahost.com.br/';
        $this->key         =  'c9fdd79584fb8d369a6a579af1a8f681'; //Informe sua chave aqui

    } 


}
    

