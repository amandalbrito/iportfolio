<?php 

        $nome = addcslashes($_POST['nome']); //Variável para recolher informações. adsslashes é para não ter erros ao enviar
        $email = addcslashes($_POST['email']);
        $assunto = addcslashes($_POST['assunto']);
        $mensagem = addcslashes($_POST['mensagem']);

    $to = "amandaluciabrito73@gmail.com"; // Para onde será enviado
    $assuntoEmail = "Conatato- IPortfolio"; //$ + variável 
    $body ="Nome: ".$nome."\n"; //.= Concatenação= unificar duas informações 
        $body .="Email: ".$email."\n"; //quebra linha 
        $body .="Assunto: ".$assunto."\n";
        $body .="Mensagem: ".$mensagem;

    $header = "From: amandaluciabrito@hotmail.com" ."\r\n" ."Reply-To: ".$email ."\r\n" ."X-Mailer:PHP/" .phpversion(); //."X=Mailer:PHP/" .phpversion() versão php

    if(mail($to,$assunto,$body,$header)){ //Valor verdadeiro
        echo("Email enviado com sucesso");
    }else{ //Valor falso
        echo("Houve um erro ao enviar o emial ");
    }
?>
