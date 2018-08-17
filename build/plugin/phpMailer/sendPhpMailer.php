<?php

$e = isset($_POST)? $_POST: '';
$subject = $e['message'] .' - '. date('H:i'). ' - '. date("d/m/Y");
// echo "<pre>";
// print_r($e);
// echo "</pre>";

$message = '<div style="background-color: #f8f5ec; word-wrap: break-word; border:1px solid #000000;">
                <h3>'.$e['idPropriedade'].' - '.$e['titulo'].' </h3>
                <b>Link Do Imóvel: </b>  '.$e['linkPropriedade'].' ; 
                <hr>
                <p>
                  
                  <strong>Nome:</strong> '.$e['name'].' <br>
                  <strong>Telefone:</strong> '.$e['phone'].' <br>
                  <strong>Email: </strong> '.$e['email'].' <br>
                </p>
                <p>
                  '.$e['message'].'
                </p>
            </div>';

if (!$e['email'] || !$e['name'] || !$e['phone']) {
    $arr['success'] = false;
    $arr['msg'] = 'Preencha os campos <b>Nome, Telefone e Email</b>';
    echo json_encode($arr);
    die();
}



require_once("PHPMailerAutoload.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
     $mail->Host = 'smtp.gmail.com'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = false;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->SMTPSecure = "ssl"; 
     $mail->Port       = 467; //  Usar 587 porta SMTP
     $mail->Username = 'vitorkortez@gmail.com'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = 'manonickmdjm10'; // Senha do servidor SMTP (senha do email usado)
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom($e['email'], $e['name']); //Seu e-mail
     $mail->AddReplyTo($e['email'], $e['name']); //Seu e-mail
     $mail->Subject = $subject;//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress($e['emailCorretor'], $e['nomeCorretor']);
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
 
 
     //Define o corpo do email
     $mail->MsgHTML($message); 
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     $arr['success'] = true;
     $arr['msg'] = 'Solicitação feita com sucesso';
     echo json_encode($arr);
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
        $arr['success'] = false;
        $arr['msg'] = $e->errorMessage() ;
        echo json_encode($arr); //Mensagem de erro costumizada do PHPMailer
}
?>