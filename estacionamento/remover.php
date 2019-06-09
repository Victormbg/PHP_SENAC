<?php
include "banco.php";
remover_estacionemento($conexao, $_GET['id']);
header('Location: tarefas.php');