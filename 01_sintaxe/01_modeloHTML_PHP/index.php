<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Web II</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Linguagem de Programação Web II</h1>
    </header>
    <main class="principal">
    <?php
        echo "<h1>PHP gerando conteúdo no HTML!</h1>";
        $frase = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.";
        echo "<p>$frase</p>";
    ?>
    </main>
    <footer class="rodape">
    <p>Mauro dos Santos - mauro.arruda@ifms.edu.br</p>
    </footer>
</body>

</html>

