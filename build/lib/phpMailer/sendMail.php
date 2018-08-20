<?php
$e = $_POST ;
$subject = $e['titulo']. ' ['.$e['idPropriedade'].'] '. date('H:i'). ' - '. date("d/m/Y");


require_once('contents.php');

require_once("PHPMailerAutoload.php");
final class SendMail{
    private $mail;
    function __construct($obj){
        $this->mail = $obj;
        $this->mail->Host = 'smtp.mailtrap.io'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
        $this->mail->SMTPSecure   = 'plain';  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
        $this->mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
        $this->mail->Port       = 2525; //  Usar 587 porta SMTP
        $this->mail->Username = '692d92c8887da4'; // Usuário do servidor SMTP (endereço de email)
        $this->mail->Password = '46209a4d199553'; // Senha do servidor SMTP (senha do email usado)
    }

    public function checkout($email, $tel, $nome){
        if (!$email) {
            $campos = ' E-mail';
        }
        if (!$tel) {
            $campos .= ' Telefone';
        }
        if (!$nome) {
            $campos .= ' Nome ';
        }

        if (!empty($campos)) {
            $arr['success'] = false;
            $arr['msg'] = 'Preencher campo <b>'.$campos.'</b>';
            echo json_encode($arr);
            exit();
        }
        return $this;

    }

    public function setRemetente($email,$nome){
        $this->mail->SetFrom($email, $nome);
        return $this;
    }

    public function setDestinario($email, $nome){
        $this->mail->AddAddress($email, $nome);
        return $this;
    }

    public function setMenssagem($assunto, $msgHTML){
         $this->mail->Subject = $assunto;//Assunto do e-mail
         $this->mail->MsgHTML($msgHTML); 
         return $this;
    }

    public function enviar(){
        $arr = array();
       
        try{
           $this->mail->Send(); 
           $arr['success'] = true;
           $arr['msg'] = 'Solicitação Enviada';
        }catch (phpmailerException $e) {
            $arr['success'] = false;
            $arr['msg'] = $e->errorMessage(); 
        }
        echo json_encode($arr);
        
    }
}


// Inicia a classe PHPMailer
$mail = new PHPMailer();
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->SMTPDebug = 0; 

$send = new SendMail($mail);
$send
->checkout($e['email'],$e['phone'],$e['name'])
->setRemetente($e['email'], $e['name'])
->setDestinario($e['emailCorretor'], $e['nomeCorretor'])
->setMenssagem($subject ,$message)
->enviar();

// echo $mail->ErrorInfo; 


// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

 
