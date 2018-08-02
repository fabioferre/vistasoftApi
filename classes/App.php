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
    private $response = 12;

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

    //orde
    public function order($array){

        if (!empty($array['order']) ) {
            $_SESSION['orderBy'] = $array['order'];
            
            $order = explode('-', $array['order']);
            $orderBy = array($order[0]=> $order[1]);
        }else{
            $orderBy = array('DataLancamento'=> 'asc');
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
        if (empty($array['quantidade']) ) {
            $array['quantidade'] = 10;
        }

        if (empty($array['pagina']) ){
           $array['pagina'] = 1;
        }

        $this->dados['paginacao'] = $array;
        return $this;
    }

    // public function setResponsive(){
    //     $ch = curl_init('http://localhost/protected/index.php');
    //     curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
    //     curl_setopt($ch, CURLOPT_POST, true);
    // }

    function __construct() 
    { 
        include 'config-api-access.php';
    
        $this->http = $config['http'] ;
        $this->key  =  $config['key'] ; //Informe sua chave aqui

    } 


}
    

