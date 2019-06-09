<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'tarefas';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}
function buscar_tarefas($conexao)
{
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $estacionamentos = array();
    while ($estacionamento = mysqli_fetch_assoc($resultado)) {
        $estacionamentos[] = $estacionamento;
    }
    return $estacionamentos; //vetor para o banco de dados
}
function buscar_tarefa($conexao, $id)
{
    $sqlBusca = 'SELECT * FROM tarefas WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}
function gravar_tarefa($conexao, $estacionamento)
{
    $sqlGravar = "
        INSERT INTO tarefas
        (placa, marca, modelo, hora_entrada, hora_saida)
        VALUES
        (
            '{$estacionamento['placa']}',
            '{$estacionamento['marca']}',
            {$estacionamento['modelo']},
            '{$estacionamento['hora_entrada']}',
            {$estacionamento['hora_saida']}
        )
    ";
    mysqli_query($conexao, $sqlGravar);
}
function editar_tarefa($conexao, $estacionamento)
{
    $sqlEditar = "
        UPDATE tarefas SET
            placa = '{$estacionamento['placa']}',
            marca = '{$estacionamento['marca']}',
            modelo = {$estacionamento['modelo']},
            hora_entrada = '{$estacionamento['hora_entrada']}',
            hora_saida = {$estacionamento['hora_saida']}
        WHERE id = {$estacionamento['id']}
    ";
    mysqli_query($conexao, $sqlEditar);
}
function remover_tarefa($conexao, $id)
{
    $sqlRemover = "DELETE FROM tarefas WHERE id = {$id}";
    mysqli_query($conexao, $sqlRemover);
}