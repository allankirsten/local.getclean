<?php

  $nome               = $_POST['nome'];
  $email              = $_POST['email'];
  $telefone           = $_POST['telefone'];
  $message            = $_POST['message'];

  //Email
  $to = "coraatelier@gmail.com";

  date_default_timezone_set('America/Sao_Paulo');

  require_once("class.phpmailer.php");

  $mail = new PHPMailer(true);

  try {

    $from       = "Cora Atelier Digital";
    $mail->From   = "coraatelier@gmail.com";
    $mail->FromName = $from;
    $mail->Subject  = "Contato pelo Site";
    $mail->IsHTML(true); 

    $mensagemHTML = "<h3>FORMULARIO CONTATO</h3>";
    $mensagemHTML .= "<b>Nome:</b> " . $nome . "<br/>";
    $mensagemHTML .= "<b>E-mail:</b> " . $email . "<br/>";
    $mensagemHTML .= "<b>Mensagem:</b>";
    $mensagemHTML .= "<p>".$message."</p>";
    $mensagemHTML .= "<hr>";

    $mail->CharSet = 'UTF-8';
    $mail->MsgHTML($mensagemHTML);
    $mail->AddAddress($to);


    $mail->Send();

    echo "Obrigado pela mensagem. Entraremos em contato em breve com a resposta.<p></p>\n";

  } catch (phpmailerException $e) {

    echo $e->errorMessage(); //Pretty error messages from PHPMailer

  } catch (Exception $e) {

    echo $e->getMessage(); //Boring error messages from anything else!

  }
      
  $mail->ClearAllRecipients();
  $mail->ClearAttachments();

  function getPost( $key ){
    return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;
  }
  function filter( $var ){
    return $var;//faça o tratamento
  }

?>