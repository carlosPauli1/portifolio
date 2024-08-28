<?php

    $nomeUsuario = addslashes($_POST['nome']);
    $emailUsuario = addslashes($_POST['email']);
    $telefoneUsuario = addslashes($_POST['telefone']);
    $mensagemUsuario = addslashes($_POST['mensagem']);

    $destinatario = "carlosr.pauli05@gmail.com";
    $assunto = "Contato Formulario portifólio";
    $corpoEmail = "Nome: $nome \n E-mail: $email \n Telefone: $telefone Mensagem usuário: $mensagem";

    $cabecalhoEmail = "From: carlos.pauli@outlook.com"."\n"."Reply-to:". $email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destinatario,$assunto,$corpoEmail,$cabecalhoEmail)){
        echo("E-mail enviado com sucesso!");
    }
    else{
        echo("Ocorreu um erro. Tente novamente");
    }