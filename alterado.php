<?php 

session_start();
 $id=$_POST["id_usuarios"];

$nome = isset( $_POST[ 'nome' ] ) ? $_POST[ 'nome' ] : null ;
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : null ;
$senha = isset ($_POST[ 'senha' ] ) ? $_POST[ 'senha' ] : null;
$senha = md5($senha);

$connect = mysqli_connect('sql10.freesqldatabase.com','sql10346904','PqmNhtNC6g','sql10346904', '3306');
$update = "UPDATE usuarios SET nome = '$nome', email = '$email',senha='$senha' WHERE id=$id";
$ver = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$verifica = mysqli_query($connect,$update);
$aposUpdate = mysqli_query($connect,$ver);
$dados = mysqli_fetch_assoc($aposUpdate);
  
 if (isset($dados)) {
     
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $dados['nome'];
	$_SESSION['id_usuarios'] = $dados['id'];
        setcookie("email",$email);
        
        echo"<script language='javascript' type='text/javascript'>
        alert('Dados Atualizados');window.location.href='profile.php';</script>";
 }
 else {
     echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possivel atualizar os dados');window.location.href='alterar.php';</script>";
 }
 