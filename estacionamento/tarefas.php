<?php
session_start();
include "banco.php";
include "ajudantes.php";
$exibir_estacionamentos = true;
if (isset($_GET['placa']) && $_GET['placa'] != '') {
    $estacionamento = array();//vetor para o formulário
    $estacionamento['placa'] = $_GET['placa'];
    if (isset($_GET['marca'])) {
        $estacionamento['marca'] = $_GET['marca'];
    } else {
        $estacionamento['marca'] = '';
    }
    if (isset($_GET['modelo'])) {
        $estacionamento['modelo'] = traduz_data_para_banco($_GET['modelo']);
    } else {
        $estacionamento['modelo'] = '';
    }
    $estacionamento['hora_entrada'] = $_GET['hora_entrada'];
    if (isset($_GET['hora_saida'])) {
        $estacionamento['hora_saida'] = 1;
    } else {
        $estacionamento['hora_saida'] = 0;
    }
    gravar_estacionamentos($conexao, $estacionamento);
    header('Location: tarefas.php');
    die();
}
$lista_estacionamento = buscar_estaciomentos($conexao);
$estacionamentos = array(
    'id'         => 0,
    'placa'       => '',
    'marca'  => '',
    'modelo'      => '',
    'hora_entrada' => 1,
    'hora_saida'  => ''
);
include "template.php";