<?php

$para= "tmm1884@hotmail.com, tmm180884@gmail.com";
$assunto= "Contacto pelo Site";
$nome= $_REQUEST['nome'];
$fone= $_REQUEST['telefone'];
$email= $_REQUEST['email'];
$msg= $_REQUEST['assunto'];

        $corpo = "<strong> Mensagem de Contacto </strong><br><br>";
        $corpo .= "<strong> Nome: </strong> $nome";
        $corpo .= "<br><strong> Telefone: </strong> $fone";
        $corpo .= "<br><strong> Email: </strong> $email";
        $corpo .= "<br><strong> Mensagem: </strong> $msg";
        
        $header ="From $email Reply-to: $email";
        $header .="Content-Type: text/html; charset= utf-8";
        
mail($para,$assunto,$corpo,$header);

header("location:contacto.php?msg=enviado");