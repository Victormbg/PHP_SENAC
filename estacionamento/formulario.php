<form>
    <input type="hidden" name="id" value="<?php echo $estacionamento['id']; ?>" />
    <fieldset>
        <legend>Nova estacionamento</legend>
        <label>
            Placa:
            <input type="text" name="placa" value="<?php echo $estacionamento['nome']; ?>" />
        </label>
        <label>
            Marca:
            <textarea name="marca"><?php echo $estacionamento['descricao']; ?></textarea>
        </label>
        <label>
            Modelo:
            <input type="text" name="modelo" value="<?php echo traduz_data_para_exibir($estacionamento['prazo']); ?>" />
        </label>
        <label>
            hora entrada:
            <input type="text" name="hora_entrada" value="<?php echo traduz_data_para_exibir($estacionamento['prazo']); ?>" />
        </label>
		<label>
            hora de saida:
            <input type="text" name="hora_saida" value="<?php echo traduz_data_para_exibir($estacionamento['prazo']); ?>" />
        </label>
        <label>
            estacionamento concluída:
            <input type="checkbox" name="concluida" value="1" <?php echo ($estacionamento['concluida'] == 1) ? 'checked' : ''; ?> />
        </label>
        <input type="submit" value="<?php echo ($estacionamento['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>" />
    </fieldset>
</form>