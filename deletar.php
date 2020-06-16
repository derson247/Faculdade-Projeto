<?php 

session_start();
$id = $_POST["id_usuarios"];


$connect = mysqli_connect('sql10.freesqldatabase.com','sql10346904','PqmNhtNC6g','sql10346904', '3306');
$ver = "DELETE from usuarios WHERE id=$id";
$verifica = mysqli_query($connect,$ver);
//$dados = mysqli_fetch_assoc($verifica);
  
session_destroy();

        echo"<script language='javascript' type='text/javascript'>
        alert('Usuario Deletado');window.location
        .href='index.php';</script>";   

         
      