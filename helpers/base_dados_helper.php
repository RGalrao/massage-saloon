<?php

$db = [
  "host" => "localhost",
  "dbname" => "site_deb_db",
  "user" => "root",
  "pass" => "",
];

try {
  $pdo = new PDO(
    "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8mb4;",
    $db['user'],
    $db['pass']
  );

  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  exit("Erro ao conectar à base de dados: " . $e->getMessage());
}

function select_sql($sql, $parametros = []){
  global $pdo;
  $consulta = $pdo->prepare($sql);
  $consulta->execute($parametros);
  return $consulta->fetchAll(PDO::FETCH_ASSOC);
}

function select_sql_unico($sql, $parametros = []){
  global $pdo;
  $consulta = $pdo->prepare($sql);
  $consulta->execute($parametros);
  return $consulta->fetch(PDO::FETCH_ASSOC);
}

function idu_sql($sql, $parametros = []){
  global $pdo;
  $consulta = $pdo->prepare($sql);
  $consulta->execute($parametros);
  return $pdo->lastInsertId();
}

?>