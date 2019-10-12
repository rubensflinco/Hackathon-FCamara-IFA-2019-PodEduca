<form method="post">
@csrf
    <label>Nome</label>
    <input value="{{ $participante->nome }}" type="text" name="nome" id="nome">
    <label>Nick</label>
    <input value="{{ $participante->nick }}" type="text" name="nick" id="nick">
    <label>Genero</label>
    <select value="{{ $participante->genero }}" id="genero" name="genero">
        <option value="masculino">Masculino</option>
        <option value="ferminino">Feminino</option>
    </select>
        <label>Data de nascimento</label>
        <input value="{{ $participante->date }}" type="date" name="data_nascimento" id="data_nascimento">
        <label>senha</label>
        <input value="{{ $participante->password }}" type="password" name="senha" id="senha">
    <button type="submit">Cadastrar</button>
</form>