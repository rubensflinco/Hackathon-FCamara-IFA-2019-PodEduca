<form method="POST">
@csrf
    <label>nome</label>
<input type="text" name="nome" id="nome">
<label>codigo</label>
<input type="text" name="codigo" id="codigo">

<label>intituicao_id</label>
<input type="text" name="intituicao_id" id="intituicao_id">

<label>facilitador_id</label>
<input type="text" name="facilitador_id" id="facilitador_id">

<button type="submit">Inserir</button>
</form>