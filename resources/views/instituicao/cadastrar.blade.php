<form method="POST">
@csrf
    <label>nome</label>
<input type="text" name="nome" id="nome">
<label>cep</label>

<input type="text" name="cep" id="cep">
<label>numero</label>

<input type="text" name="numero" id="numero">
<label>logradouro</label>

<input type="text" name="logradouro" id="logradouro">
<label>complemento</label>

<input type="text" name="complemento" id="complemento">
<label>bairro</label>
<input type="text" name="bairro" id="bairro">
<label>localidade</label>
<input type="text" name="localidade" id="localidade">
<label>uf</label>
<input type="text" name="uf" id="uf">
<button type="submit">Inserir</button>
</form>