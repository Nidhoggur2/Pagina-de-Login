<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Login</title>
<link rel="stylesheet" type="text/css" href="estilo.css">

<body>
<div align="center">
<form align="center" action="index" class="formulario" method="post"> 
        <p> Faça seu Login.</p>
        
        <div class="div1">
            <label for="login">Seu Login:</label>
            <input type="text" id="login" name="login" placeholder="Login*" required>
        </div>
                <div class="div1">
            <label for="senha">Sua Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Senha*" required>
        </div>

        <input type="submit" name="acao" value="Enviar">

    </form>
 </div>

<div align="center">
<?php

if (isset($_POST["acao"])){ 
 

   $login=$_POST["login"]; 
   $senha=$_POST["senha"]; 

 
   if ($login=="admin"){ 
      echo "<p>Login Correto</p>"; 
   }
   else { 
      echo "<p>Login Incorreto</p>"; 
   }

   $senha=$_POST["senha"]; 

 
   if ($senha=="042"){ 
      echo "<p>Senha Correta</p>"; 
   }
   else { 
      echo "<p>Senha Incorreta</p>"; 
   };
} 
 ?>
</div>
</body>

</head>
</html>