<?php 

session_start();
 $id=$_POST["id_usuarios"];

echo $email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
echo $senha = isset ($_POST[ 'senha' ] ) ? $_POST[ 'senha' ] : null;
$senha = md5($senha);

$connect = mysqli_connect('sql10.freesqldatabase.com','sql10346904','PqmNhtNC6g','sql10346904', '3306');
$ver = "UPDATE usuarios SET email = '$email',senha='$senha' WHERE id=$id";
$verifica = mysqli_query($connect,$ver);
//$dados = mysqli_fetch_assoc($verifica);
  
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Dados Atualizados');window.location
        .href='login.php';</script>";   
      
?>