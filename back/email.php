<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

    // iniciou o IF e nao abriu as opçõa
    
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone']);
    
    $to= "igor.camila23@gmail.com";
    $subject = "Contato  Site!";
    $body = "Nome: ".$nome. "\n".
    "E-mail: ".$email."\n".
    "Celular: ".$phone;
    
    $header = "From:igorga.jsantos@gmail.com"."\r\n"."reply-to:".$email."\r\n"."z=mailer:PHP/".phpversion();
    
    if(mail($to,$subject,$body,$header)){
        echo("Solicitação de contato enviada com sucesso!");
    }else{
        echo("Erro ao enviar solicitação!");
    }; 
}

?>