<?php
namespace Classes;

class App
{

    private $url;
    public $result;
    private $key;
    private $http;
    public $codigo;
    protected $showtotal = 1;
    protected $dados;
    protected $curl;
    protected $cadastro;

    Private function setUrl(){
                //monta a url para a curl
        $this->url         =  $this->http;
        $this->url        .=    $this->curl;
        $this->url        .=   '?key=' . $this->key;


        if(isset($this->codigo)){
           $teste =  '&imovel=' . json_encode($this->codigo);
            
            $this->url        .=  str_replace('"', '', $teste );
        }

        if(isset($this->codigo)){
           $teste =  '&cliente=' . json_encode($this->codigo);
            
            $this->url        .=  str_replace('"', '', $teste );
        }
       

        //verificar se possui pesquisa
        if(isset($this->dados)){
            $this->url        .=  '&pesquisa=' . json_encode($this->dados);
        }

        if(isset($this->showtotal)){
            $this->url        .=  '&showtotal=' . json_encode($this->showtotal);
        }


    }



    private function connGet(){

        $this->setUrl();

        //inicia a conexao
        $ch = curl_init($this->url);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_HTTPHEADER , array( 'Accept: application/json' ) );
        $result = curl_exec( $ch );

        //retorna os resultados
        $this->result = json_decode( $result, true );
      
    }

    public function connPost(){

        $this->setUrl();

        $ch = curl_init($this->url);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->cadastro);

        $result = curl_exec($ch);
        $this->result = json_decode( $result, true );

        curl_close($ch);
    }

    
    //retorna todos os dados
    public function get(){
        $this->connGet();
        return $this->result;
    }

    public function post(){
        $this->connPost();
        if($this->result['status'] == 200){
            $this->codigo = $this->result['codigo'];
        }
        return $this->result;
    }

    public function set($array){
        $this->cadastro = $array;
        unset($this->dados);
        return $this;
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

        if (empty($_POST['order']) ) {
            $orderBy = array('DataCadastro'=>'desc');
        }else{

            $_SESSION['order'] = $array['order'];
            $order = explode('_', $_SESSION['order']);
            $orderBy = array($order[0]=> $order[1]);
        }

        $this->dados['order'] = $orderBy;
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
        // // teste ---------
        // $this->http = 'http://sandbox-rest.vistahost.com.br/';
        // $this->key         =  'c9fdd79584fb8d369a6a579af1a8f681'; //Informe sua chave aqui

        $this->http = 'http://terralim-rest.vistahost.com.br/';
        $this->key         =  '3815e08521f4a1cf4f2a387790db686f'; //Informe sua chave aqui

    } 


}
    

