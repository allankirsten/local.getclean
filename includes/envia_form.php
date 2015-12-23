<?php

  $nome               = $_POST['nome'];
  $email              = $_POST['email'];
  $telefone           = $_POST['telefone'];
  $message            = $_POST['message'];

  // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.getclean.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'contato@getclean.com.br'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'cabaco123'; // Senha do servidor SMTP (senha do email usado)
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $email; // Seu e-mail
$mail->Sender = "contato@getclean.com.br"; // Seu e-mail
$mail->FromName = "Contato pelo Site"; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('contato@getclean.com.br', 'Contato pelo site');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem pelo site"; // Assunto da mensagem

$mensagemHTML = "<h3>FORMULARIO CONTATO</h3>";
$mensagemHTML .= "<b>Nome:</b> " . $nome . "<br/>";
$mensagemHTML .= "<b>E-mail:</b> " . $email . "<br/>";
$mensagemHTML .= "<b>Telefone:</b> " . $telefone . "<br/>";
$mensagemHTML .= "<b>Mensagem:</b>";
$mensagemHTML .= "<p>".$message."</p>";
$mensagemHTML .= "<hr>";

$mail->Body = $mensagemHTML;
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
 
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
// Exibe uma mensagem de resultado
if ($enviado) {
echo "E-mail enviado com sucesso!";
} else {
echo "Não foi possível enviar o e-mail.
 
";
echo "Informações do erro: 
" . $mail->ErrorInfo;
}

?>