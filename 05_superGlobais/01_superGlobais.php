<h1>SuperGlobais</h1>
<?php
  $var = 50;
  
  function funcao(){
    $GLOBALS['dobro'] = $GLOBALS['var'] * 2;
  }

  funcao();
  echo $dobro;
?>

<h1>SuperGlobais</h1>
<?php
  echo $_SERVER['PHP_SELF']."<br>";
  echo $_SERVER['SERVER_NAME']."<br>";
  echo $_SERVER['HTTP_HOST']."<br>";
  echo $_SERVER['SCRIPT_NAME']."<br>";
  echo $_SERVER['SERVER_PORT']."<br>";
  echo $_SERVER['REQUEST_METHOD']."<br>";
?>