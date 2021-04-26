<head>
    <meta charset="UTF-8">
    <title> Formulários</title>
    <style>
        label,
        input {
            display: block;
            margin: 5px;
        }

        label {
            margin-top: 5px;
        }
    </style>
</head>
<body>
  <form action="04_manipulaGET_POST.php" autocomplete="off" enctype="multipart/form-data" method="POST">
    
    <label for="campoNome">Nome: </label>
    <input type="text" name="campoNome" id="campoNome" maxlength="10" placeholder="Digite o Nome" required autofocus autocomplete="on"><br>

    <label for="campoPlaca">Placa: </label>
    <input type="text" name="campoPlaca" id="campoPlaca" pattern="[a-zA-Z]{3}-[0-9]{4}" title="aaa-1111"><br>

    <label for="meuRadio">Escolha 1</label>
    <input type="radio" name="meuRadio" id="escolha1" value="1"><br>

    <label for="meuRadio">Escolha 2</label>
    <input type="radio" name="meuRadio" id="escolha2" value="2"><br>

    <label for="meuRadio">Escolha 3</label>
    <input type="radio" name="meuRadio" id="escolha3" value="3"><br>

    <label for="meuRadio2">Escolha 5</label>
    <input type="radio" name="meuRadio2" id="escolha5" value="5"><br>

    <label for="meuRadio2">Escolha 7</label>
    <input type="radio" name="meuRadio2" id="escolha7" value="7"><br>

    <label for="meuCheckBox">Escolha CheckBox</label>
    <input type="CheckBox" name="meuCheckBox" id="meuCheckBox" value="4"><br>

    <label for="meuCheckBox2">Escolha CheckBox</label>
    <input type="CheckBox" name="meuCheckBox2" id="meuCheckBox2" value="5"><br>

    <label for="meuCampoEmail">Campo Email</label>
    <input type="email" name="meuCampoEmail" id="meuCampoEmail"><br>

    <textarea id="meuTextArea" name="meuTextArea" rows="10" cols="50">Texto de teste
    </textarea>

    <fieldset>
      <legend>Minhas informações</legend>
      <label for="meuSelect">Meu campo Select</label>
      <select name="meuSelect[]" id="meuSelect" size="3" multiple>
        <option value="1">Opção 1</option>
        <option value="2">Opção 2</option>
        <option value="3">Opção 3</option>
        <option value="4">Opção 4</option>
        <option value="5">Opção 5</option>
      </select>
    </fieldset><br>

    <label for="minhaLista">Escolha um item da lista: </label>
    <input list="lista" name="minhaLista" id="minhaLista">
    <datalist id="lista">
      <option value="item 1">
      <option value="item 2">
      <option value="item 3">
      <option value="item 4">
      <option value="o item 5">
    </datalist><br>

    <label for="minhaCor">Escolha a Cor</label>
    <input type="color" name="minhaCor"><br>

    <label for="minhaData">Escolha uma Data</label>
    <input type="date" name="minhaData"><br>

    <label for="meuArquivo">Escolha um Arquivo</label>
    <input type="file" name="meuArquivo" multiple><br>

    <label for="meuCampoHidden">Campo Oculto</label>
    <input type="hidden" name="meuCampoHidden" value="Valor Escondido"><br>

    <label for="minhaSenha">Digite uma Senha:</label>
    <input type="password" name="minhaSenha"><br>

    <label for="meuNumero">Digite um numero de 10 a 100:</label>
    <input name="meuNumero" type="number" min="10" max="100" step="5"><br>

    <button onclick="alert('Você clicou no botão')">Meu Botão</button><br>
    <input type=”reset” value="reset"><br>

    <input type="submit" value="Envio">
  </form>
</body>

