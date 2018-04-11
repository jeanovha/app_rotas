<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../css/app.css" rel="stylesheet">
    <title>Alterar</title>
</head>
<body>
<div class="container">
    <h1 class="mt-2">Alterar produto</h1>
    <form action="/clientes/alterar" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <label for="id">ID: <span class="text-danger">*</span></label>
            <input type="text" id="id" name="id" class="form-control" required readonly value="{{ $cliente->id }}">
        </div>
        <div class="form-group">
            <label for="nomeAquicultor">Descrição: <span class="text-danger">*</span></label>
            <input type="text" id="nomeAquicultor" name="nomeAquicultor" class="form-control" autofocus required value="{{ $cliente->nomeAquicultor }}">
        </div>
        <div class="form-group">
            <label for="atividade">Atividade: <span class="text-danger">*</span></label>
            <input type="text" id="atividade" name="atividade" class="form-control" required value="{{ $cliente->atividade }}">
        </div>
        <div class="form-group">
            <label for="CPF">CPF: <span class="text-danger">*</span></label>
            <input type="text" id="CPF" name="CPF" class="form-control" required value="{{ $cliente->CPF }}">
        </div>
        <div class="form-group">
            <label for="rg">RG: </label>
            <input type="text" id="rg" name="rg" class="form-control" value="{{ $cliente->rg }}">
        </div>
        <div class="form-group">
            <label for="naturalidade">Naturalidade: </label>
            <input type="text" id="naturalidade" name="naturalidade" class="form-control" value="{{ $cliente->naturalidade }}">
        </div>
        <div class="form-group">
            <label for="inscricaoEstadual">Naturalidade: </label>
            <input type="text" id="inscricaoEstadual" name="inscricaoEstadual" class="form-control" value="{{ $cliente->inscricaoEstadual}}">
        </div>
        <div class="form-group">
            <label for="tipoPropriedade">Tipo Propriedade: </label>
            <input type="text" id="tipoPropriedade" name="tipoPropriedade" class="form-control" value="{{ $cliente->tipoPropriedade}}">
        </div>


        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Alterar">
    </form>
</div>
</body>
</html>