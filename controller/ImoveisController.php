<?php

namespace controller;

     class Imoveis{

    public function leadMail(){
        include 'classes/config-api-access.php'; 
        require 'vendor/autoload.php'; // If you're using Composer (recommended)


        $e = $_POST ;
        $subject = $e['titulo']. ' - '.$e['idPropriedade'];
 
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom($_POST['email'], $_POST['name']);
        $email->setSubject($subject);
        $email->addTo("contato@tagmus.com.br", "Contato");
       
        $email->addContent(
            "text/html", "<a href=".$_POST['linkPropriedade']."><strong>".$_POST['titulo']."</strong></a>
            <br> Nome : ".$_POST['name'].
            "<br> TELEFONE: ".$_POST['phone'].
            "<br> <br> Menssagem <br>".$_POST['message']
        );
        $sendgrid = new \SendGrid($config['mail']);

            $response = $sendgrid->send($email);
            try{

                if ($response->statusCode() == 202) {
                     $arr['success'] = true;
                     $arr['msg'] = 'Solicitação Enviada';
                }else{
                     $arr['error'] = true;
                     $arr['msg'] = $this->mail->ErrorInfo;
                }
     
             }catch (Exception $e) {
                 $arr['success'] = false;
                 $arr['msg'] = $e->getMessage(); 
             }
     
             echo json_encode($arr);

            // print_r($response->headers());
            // print $response->body() . "\n";
      

    }
        
    
    }