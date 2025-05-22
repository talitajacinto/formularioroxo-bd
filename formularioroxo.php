<?php 
if(isset($_POST['submit'])) 
{ 
//print_r('Nome: ' . $_POST['name']); 
// print_r('<br>'); 
// print_r('Email: ' . $_POST['email']);
// print_r('<br>');
// print_r('assunto: ' . $_POST['subject']);
// print_r('<br>');
// print_r('mensagem: ' . $_POST['message']);


include_once('config.php');
$nome = $_POST['nome']; 
$email = $_POST['email']; 
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem']; 


$result = mysqli_query ($conexao, "INSERT INTO usuario (nome,email,assunto, mensagem)
 VALUES ('$nome','$email','$assunto','$mensagem')");
 

 }
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="form_box">
            <h2 class="title">Envie sua mensagem</h2>

                <form action="formularioroxo.php" method="POST">            

                    <input type="text" name="nome" placeholder="Seu nome">
                    <input type="email" name="email" placeholder="Seu e-mail">
                    <input type="text" name="assunto" placeholder="Assunto">

                    <textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>

                    <button type="submit" name= "submit">Enviar mensagem</button>
          
                </form>
        </div>
    </div>
    
</body>
</html>