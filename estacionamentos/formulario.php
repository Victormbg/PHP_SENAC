<form>
    <input type="hidden" name="id" value="<?php echo $estacionamento['id']; ?>" />
    <fieldset>
        <legend>Nova Estacionamento</legend>
        <label>
            Placa:
            <input type="text" name="placa" value="<?php echo $estacionamento['placa']; ?>" />
        </label>
        <label>
            Marca (Opcional):
            <textarea name="marca"><?php echo $estacionamento['marca']; ?></textarea>
        </label>
        <label>
            Modelo (Opcional):
            <input type="text" name="modelo" value="<?php echo traduz_data_para_exibir($estacionamento['modelo']); ?>" />
        </label>
        <label>
            hora_entrada (Opcional):
            <input type="text" name="hora_entrada" value="<?php echo traduz_data_para_exibir($estacionamento['hora_entrada']); ?>" />
        </label>
		<label>
            hora_saida (Opcional):
            <input type="text" name="hora_saida" value="<?php echo traduz_data_para_exibir($estacionamento['hora_saida']); ?>" />
        </label>
        <input type="submit" value="<?php echo ($estacionamento['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>" />
    </fieldset>
</form>