<?php

require('./dao/FuncDAO.class.php');

$funcDAO = new FuncDAO();

//cria o array associativo
$dados = array("dados"=>$funcDAO->dados());

//converte o conteúdo do array associativo para uma string JSON
$json_str = json_encode($dados);

//imprime a string JSON
echo "$json_str";
