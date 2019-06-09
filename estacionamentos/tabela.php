<table>
    <tr>
        <th>placa</th>
        <th>marca</th>
        <th>modelo</th>
        <th>hora_entrada</th>
        <th>hora_saida</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($lista_tarefas as $estacionamento) : ?>
        <tr>
            <td>
                <?php echo $estacionamento['placa']; ?>
            </td>
            <td>
                <?php echo $estacionamento['marca']; ?>
            </td>
            <td>
                <?php echo traduz_data_para_exibir($estacionamento['modelo']); ?>
            </td>
            <td>
                <?php echo traduz_prioridade($estacionamento['hora_entrada']); ?>
            </td>
            <td>
                <?php echo traduz_concluida($estacionamento['hora_saida']); ?>
            </td>
            <td>
                <a href="editar.php?id=<?php echo $estacionamento['id']; ?>">
                    Editar
                </a>
                <a href="remover.php?id=<?php echo $estacionamento['id']; ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>