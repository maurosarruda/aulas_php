<head>
    <meta charset="UTF-8">
    <title> Formulários</title>
</head>
<body>
  <form action="manipulador.php" autocomplete="off" enctype="multipart/form-data" method="POST">
    
    <label for="campoNome">Nome: </label>
    <input type="text" name="campoNome" id="campoNome" placeholder="Digite o Nome" required autofocus autocomplete="on"><br>

    <label for="radioSexo">Masculino</label>
    <input type="radio" name="radioSexo" id="masculino" value="masculino"><br>

    <label for="radioSexo">Feminino</label>
    <input type="radio" name="radioSexo" id="feminino" value="feminino"><br>

    <label for="checkManha">Manhã</label>
    <input type="CheckBox" name="checkManha" id="checkManha" value="manha"><br>

    <label for="checkTarde">Tarde</label>
    <input type="CheckBox" name="checkTarde" id="checkTarde" value="tarde"><br>

    <label for="checkNoite">Noite</label>
    <input type="CheckBox" name="checkNoite" id="checkNoite" value="noite"><br>

    <label for="selectCidade">Cidade:</label>
    <select name="selectCidade[]" id="selectCidade" size="3" multiple>
      <option value="Campo Grande">Campo Grande</option>
      <option value="Dourados">Dourados</option>
      <option value="Ponta Porã">Ponta Porã</option>
      <option value="São Paulo">São Paulo</option>
      <option value="Rio de Janeiro">Rio de Janeiro</option>
    </select>

    <label for="data">Escolha uma Data</label>
    <input type="date" name="data"><br>

    <input type="submit" value="Envio">
  </form>
</body>

