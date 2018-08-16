<?php
	include_once('class.smtp.php');
    include_once('class.phpmailer.php');
    
    $email = 'vitorkortez@gmail.com';
    $name = 'vitor';

    $emailCliente = 'manonick12@gmail.com';
    $nameCliente = 'vitor';

    $message = 'Olá pessoal';
    $subject = 'Interessado em imovel - '. date('H:i'). " - ". date("d/m/Y");

    $mail = new PHPMailer();
    

    $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "vitorkortez@gmail.com";
    $mail->Password = "manonickmdjm10";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 465;

    $mail->setFrom($emailCliente, $nameCliente);
    $mail->addAddress($email);
    $mail->Subject = $subject;
    $mail->msgHTML($message);
  	
  	// $mail->send();
    if ($mail->send()) {
    	$arr['success'] = true;
    	$arr['msg'] = 'Foi Cachorro';
    }else{
    	$arr['msg'] = 'deu ruim';
    }

    // header('Content-type: Application/json');
    echo json_encode($arr);
    // header('Location:');