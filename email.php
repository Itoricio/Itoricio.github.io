<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$sobrenome = addslashes($_POST['lastname']);
$mensagem = addslashes($_POST['message']);


$to = "mauricio33ito@hotmail.com";
$subject = "Contato - portfolio";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Sobrenome: ".$lastname. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:mauricio33ito@hotmail.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();       

if(mail($to,$subject,$body,$header)){ 

    echo("Email enviado com sucesso!");

}else{

    echo("O email não pode ser enviado!");
} 


}

?>
