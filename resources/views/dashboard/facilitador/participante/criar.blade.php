<form method="post">
@csrf
    <label>Nome</label>
    <input type="text" name="nome" id="nome">
    <label>Nick</label>
    <input type="text" name="nick" id="nick">
    <label>Genero</label>
    <select id="genero" name="genero">
        <option value="masculino">Masculino</option>
        <option value="ferminino">Feminino</option>
        <label>Data de nascimento</label>
        <input type="date" name="data_nascimento" id="data_nascimento">
        <label>senha</label>
        <input type="password" name="senha" id="senha">
    </select>
    <button type="submit">Cadastrar</button>
</form>