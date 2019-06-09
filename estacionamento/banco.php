<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'estacionamentos';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}
function buscar_estacionamentos($conexao)
{
    $sqlBusca = 'SELECT * FROM estacionamentos';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $estacionamentos = array();
    while ($estacionamento = mysqli_fetch_assoc($resultado)) {
        $estacionamentos[] = $estacionamento;
    }
    return $estacionamento; //vetor para o banco de dados
}
function buscar_estacionamento($conexao, $id)
{
    $sqlBusca = 'SELECT * FROM estacionamentos WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}
function gravar_estacionamento($conexao, $estacionamento)
{
    $sqlGravar = "
        INSERT INTO estacionamentos
        (placa, marca, modelo, hora_entrada, hora_saida)
        VALUES
        (
            '{$estacionamento['placa']}',
            {$estacionamento['marca']},
            '{$estacionamento['modelo']}',
			'{$estacionamento['hora_entrada']}',
            {$estacionamento['hora_saida']}
        )
    ";
    mysqli_query($conexao, $sqlGravar);
}
function editar_estacionamento($conexao, $estacionamento)
{
    $sqlEditar = "
        UPDATE estacionamentos SET
            id = '{$estacionamento['id']}',
            placa = '{$estacionamento['placa']}',
            modelo = {$estacionamento['modelo']},
            hora_entrada = '{$estacionamento['hora_entrada']}',
            hora_saida = {$estacionamento['hora_saida']}
        WHERE id = {$estacionamento['id']}
    ";
    mysqli_query($conexao, $sqlEditar);
}
function remover_estacionamento($conexao, $id)
{
    $sqlRemover = "DELETE FROM estacionamentos WHERE id = {$id}";
    mysqli_query($conexao, $sqlRemover);
}