<?php
    require_once('PHPMailerAutoload.php');

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
    // echo $message;
    $mail = new PHPMailer();
    $mail->setLanguage('br');
    $mail->CharSet='UTF-8'; 

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tsl';
    $mail->Host = "smtplw.com.br";
    $mail->Port = 587;
    $mail->Username = "vitorkortez@gmail.com";
    $mail->Password = "manonickmdjm10";
    

    $mail->setFrom($e['email'], $e['name']);
    $mail->addAddress($e['emailCorretor']);
    $mail->Subject = $subject;
    $mail->msgHTML($message);
  	


    $erroCampo = !empty($e['email'])?'': ' email '; 
    $erroCampo .= !empty($e['name'])?'': 'nome '; 
    $erroCampo .= !empty($e['phone'])?'': ' telefone '; 

    if (!$mail->send()) {
    	$arr['success'] = false;
    	$arr['msg'] = "Preencha os campos <b>{$erroCampo}</b> e tente novamente ";//.$mail->ErrorInfo;
    }else{
    	$arr['success'] = true;
    	$arr['msg'] = 'Foi Cachorro';
    	
    }
    echo json_encode($arr);
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();


