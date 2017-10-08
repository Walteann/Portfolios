<?php 


$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['mensagem'];


$cabecalho = "From: ". $nome;


$corpoEmail =  "Fale Conosco - Hélio barros
                
                Nome:       $nome
                Email:      $email
                Assunto:    $assunto
                
                Mensagem:   $msg";


if(mail('heliomiguelbarros@gmail.com', "Fale Conosco - Hélio Barros", $corpoEmail, $cabecalho)){
    
    
    echo "<script>alert('Mensagem Enviada com Sucesso!!');</script>";
    echo "<script>window.location.assign('https://heliobarros.000webhostapp.com');</script>";
}else{
    echo "<script>alert('Erro ao enviarm tente diretamente pelo email walteann3@gmail.com ');</script>";
}




?>


