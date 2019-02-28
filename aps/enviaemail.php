<?php
 	$nome = $_POST['inputNome'];
	$sobrenome = $_POST['inputSobrenome'];
	$nomecompleto = $nome." ".$sobrenome;

?>
<?php
      //inclui a classe no documento
      require('PHPMailer_5.2.0/class.phpmailer.php');
      //instancia a classe
      $mail = new PHPMailer();
      //defini que será enviado via SMTP
      $mail->IsSMTP();
      //define que será autenticado
      $mail->SMTPAuth = true;
      //altera a porta de envio
      $mail->Port = 587;
      //define o endereço SMTP
      $mail->Host = 'smtp.live.com';
      //Define o nome do usuário
      $mail->Username = 'nome@live.com.br';
      //define a senha o usuário
      $mail->Password = '******';
      //Informa o email e nome de quem está enviado
      $mail->SetFrom('nome@live.com.br', 'Seu Nome');
   
      //Informa o email e nome de quem irá receber o email
      $mail->AddAddress('sacbronzes@gmail.com', 'Bronzes');
      //titulo da mensagem que será enviada
      $mail->Subject = 'Testando o envio autenticado';
      //a mensagem que está sendo enviada
      $mail->MsgHTML('<h1>Enviando E-mail autenticado</h1>');
      //testa se foi enviada ou não
      if($mail->Send())
       echo 'E-mail enviado com sucesso!';
    else
       echo 'Erro ao enviar o email '.$mail->ErrorInfo;
?>
<?php/*

	$nome = $_POST['inputNome'];
	$sobrenome = $_POST['inputSobrenome'];
	$nomecompleto = $nome." ".$sobrenome;

  require_once("PHPMailer_5.2.0/class.phpmailer.php");
  require("PHPMailer/src/SMTP.php");

    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->Host = "smtp.live.com";
    $mail->Port = 465; // or 465
    $mail->IsHTML(true);
	
    $mail->Username = "dancos08@hotmail.com";
    $mail->Password = "Daniel3265482";
	
	$mail->From = $_POST['inputEmail']; 
	$mail->FromName = $nomecompleto; 
    $mail->Subject = "Mensagem de Contato do Site"; 
    $mail->Body = $_POST['inputDigite'];
    $mail->AddAddress("dancos08@hotmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }*/
?>