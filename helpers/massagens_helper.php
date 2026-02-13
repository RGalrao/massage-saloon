<?php

// funçao para obter todas as massagens em "stock"
function get_massagens() {
  $sql = "SELECT * FROM massagens";
  return select_sql($sql);
}

// funçao para obter uma massagem especifica
function get_massagem($id) {
  $sql = "SELECT * FROM massagens WHERE id = ?";
  return select_sql_unico($sql, [$id]);
}




// funçao para obter disponibilidade do terapeuta
function get_disponibilidade() {
  $sql = "SELECT * FROM disponibilidade";
  $disponibilidade = select_sql($sql);
  return $disponibilidade;
}

// funçao para inserir disponibilidade do terapeuta
function inserir_disponibilidade($dia, $hora) {
  $sql = "INSERT INTO disponibilidade (dia_disponivel, hora_disponivel) VALUES (?, ?)";
  return idu_sql($sql, [$dia, $hora]);
}





// funçao para inserir reserva
function inserir_reserva($nome_cliente, $massagem_marcada, $tipo_massagem, $dia, $horas, $contacto_cliente) {
  $sql = "INSERT INTO reservas (nome_cliente, massagem_marcada, tipo_massagem, dia, horas, contacto_cliente) VALUES (?, ?, ?, ?, ?, ?)";
  return idu_sql($sql, [$nome_cliente, $massagem_marcada, $tipo_massagem, $dia, $horas, $contacto_cliente]);
}

// funçao para obter todas as reservas existentes
function get_reservas() {
  $sql = "SELECT * FROM reservas";
  return select_sql($sql);
} 

// funçao para obter reservas em dias e horas especificas
function get_reservas_dia_hora($dia, $hora) {
  $sql = "SELECT * FROM reservas WHERE dia = ? AND horas = ?";
  return select_sql($sql, [$dia, $hora]);
}

// funçao para obter reserva especifica
function get_reserva($id) { 
  $sql = "SELECT * FROM reservas WHERE id = ?";
  return select_sql_unico($sql, [$id]);
}

// funçao para eliminar reserva especifica
function eliminar_reserva($id) {
  $sql = "DELETE FROM reservas WHERE id = ?";
  return idu_sql($sql, [$id]);
}

// funçao para atualizar reserva especifica
function atualizar_reserva($id, $nome_cliente, $massagem_marcada, $tipo_massagem, $dia, $horas, $contacto_cliente) {
  $sql = "UPDATE reservas SET nome_cliente = ?, massagem_marcada = ?, tipo_massagem = ?, dia = ?, horas = ?, contacto_cliente = ? WHERE id = ?";
  return idu_sql($sql, [$nome_cliente, $massagem_marcada, $tipo_massagem, $dia, $horas, $contacto_cliente, $id]);
}

// funçao para obter reservas por nome do cliente
function get_reservas_por_cliente($nome_cliente) {
  $sql = "SELECT * FROM reservas WHERE nome_cliente = ?";
  return select_sql($sql, [$nome_cliente]);
}


?>