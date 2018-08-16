<?php
    require_once('PHPMailerAutoload.php');

  	$e = isset($_POST)? $_POST: '';
    $subject = $e['message'] .' - '. date('H:i'). ' - '. date("d/m/Y");
    
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

    $mail = new PHPMailer();
    $mail->setLanguage('br');
    $mail->CharSet='UTF-8'; 

    // $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->Host = "contato@terralimaimoveis.com.br";
    $mail->SMTPAuth = true;
    $mail->Username = "root";
    $mail->Password = "root";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($e['email'], $e['name']);
    $mail->addAddress($e['emailCorretor']);
    $mail->Subject = $subject;
    $mail->msgHTML($message);
  	
  	// $mail->send();
    if ($mail->send()) {
    	$arr['success'] = true;
    	$arr['msg'] = 'Foi Cachorro';
    }else{
    	$arr['success'] = false;
    	$arr['msg'] = 'Algo deu errado! Tente novamente';
    }

    // header('Content-type: Application/json');
    echo json_encode($arr);
    // header('Location:');
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();

