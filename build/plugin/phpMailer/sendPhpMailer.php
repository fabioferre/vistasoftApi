<?php

$e = isset($_POST)? $_POST: '';
$subject = $e['message'] .' - '. date('H:i'). ' - '. date("d/m/Y");
echo "<pre>";
print_r($e);
echo "</pre>";

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
    if (!$e['email']) {
        $campos = 'E-mail';
    }
    if (!$e['name']) {
       $campos .= ' Nome ';
    }
    if (!$e['phone']) {
       $campos .= ' Telefone ';
    }
    $arr['success'] = false;
    $arr['msg'] = 'Preencha os campos <b>'.$campos.'</b>';
    echo json_encode($arr);
    die();
}




require 'PHPMailerAutoload.php';         // https://github.com/PHPMailer/PHPMailer

$mail = new PHPMailer;
$mail->setLanguage('br');                             // Habilita as saídas de erro em Português
$mail->CharSet='UTF-8';                               // Habilita o envio do email como 'UTF-8'
$mail->SMTPDebug = 3;                               // Habilita a saída do tipo "verbose"
$mail->isSMTP();                                      // Configura o disparo como SMTP
$mail->Host = 'smtplw.com.br';                        // Especifica o enderço do servidor SMTP da Locaweb
$mail->SMTPAuth = true;                               // Habilita a autenticação SMTP
$mail->Username = 'T3RR4L1M4';                        // Usuário do SMTP
$mail->Password = 'terralima2015';                          // Senha do SMTP
$mail->SMTPSecure = 'tls';                            // Habilita criptografia TLS | 'ssl' também é possível
$mail->Port = 587;                                    // Porta TCP para a conexão
$mail->From = $e['emailCorretor'];                          // Endereço previamente verificado no painel do SMTP
$mail->FromName = $e['nomeCorretor'];                     // Nome no remetente
$mail->addAddress($e['email'], $e['name']);// Acrescente um destinatário
// $mail->addAddress('joao@exemplo.com');                // O nome é opcional
// $mail->addReplyTo('info@exemplo.com', 'Informação');
// $mail->addCC('cc@exemplo.com');
// $mail->addBCC('bcc@exemplo.com');

$mail->isHTML(true);                                  // Configura o formato do email como HTML

$mail->Subject = $subject;
$mail->Body    = $message;
// $mail->AltBody = 'Esse é o corpo da mensagem em formato "plain text" para clientes de email não-HTML';

if(!$mail->send()) {
    echo 'A mensagem não pode ser enviada ';
    $arr['msg'] = $mail->ErrorInfo;
    $arr['success'] = false;
    echo json_encode($arr); //Mensagem de erro costumizada do PHPMailer
} else {
    $arr['success'] = true;
    $arr['msg'] = 'Solicitação feita com sucesso';
    echo json_encode($arr);
}

