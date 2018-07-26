<?php
namespace Classes;

class Env
{

    private $url;
    private $result;
    private $key;
    private $http;
    protected $codigo;
    protected $showtotal = 1;
    protected $dados;
    protected $curl;



    private function conn(){
        //monta a url para a curl
        $this->url         =  $this->http;
        $this->url        .=    $this->curl;
        $this->url        .=   '?key=' . $this->key;


        if(isset($this->codigo)){
           $teste =  '&imovel=' . json_encode($this->codigo);
            
            $this->url        .=  str_replace('"', '', $teste );
        }

        //verificar se possui pesquisa
        if(isset($this->dados)){
            $this->url        .=  '&pesquisa=' . json_encode($this->dados);
        }

        if(isset($this->showtotal)){
            $this->url        .=  '&showtotal=' . json_encode($this->showtotal);
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
        $this->dados['fields'] = $array;
        return $this;
    }

    //filtros 
    public function filter($array){
        $this->dados['filter'] = $array;
        return $this;
    }

    //advFilter 
    public function advFilter($array){
        $this->dados['advFilter'] = $array;
        return $this;
    }

    //order
    public function order($array){
        $this->dados['order'] = $array;
        return $this;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
        return $this;
    }

    //paginacao
    public function paginacao($array){
        $this->dados['paginacao'] = isset($array['quantidade'])? $array['quantidade'] : $array['quantidade'] = 10;
        $this->dados['paginacao'] = $array;
        return $this;
    }


    function __construct() 
    { 
        // teste ---------
        // $this->http = 'http://sandbox-rest.vistahost.com.br/';
        // $this->key         =  'c9fdd79584fb8d369a6a579af1a8f681'; //Informe sua chave aqui

        $this->http = 'http://terralim-rest.vistahost.com.br/';
        $this->key         =  '3815e08521f4a1cf4f2a387790db686f'; //Informe sua chave aqui

    } 


}
    

