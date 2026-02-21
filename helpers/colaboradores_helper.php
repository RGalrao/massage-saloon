<?php

session_start();

function login($username, $password){
  $colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE username=?", [$username]);
  if(!empty($colaborador) && password_verify($password, $colaborador["password"])){
    $_SESSION["colaborador"] = $colaborador;
    idu_sql("UPDATE colaboradores SET ultimo_acesso=NOW() WHERE id=?",  [$colaborador['id']]); 
    header("Location: home.php");
  }
}

function verificar_login(){
  global $colaborador;
  if(!empty($_SESSION["colaborador"])){
    $colaborador = $_SESSION["colaborador"];
  }
  else{
    header("Location: index.php");
  }
}

function logout(){
  session_destroy();
}

?>

