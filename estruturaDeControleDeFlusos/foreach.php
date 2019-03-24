<?php
$meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho",
              "Agosto","Sentembro","Outubro","Novembro","Dezembro");

foreach ($meses as $i => $mes) { //O $i guarda a posição da variavel no array
  //echo "Posição: ".$i."<br>";
  //echo "O mes é : ".$mes."<br/><br/>";
}
 ?>
//////////////////////////////////////////
<form>
  Nome<input type="text" name="Nome"><br/>
  Senha<input type="password" name="Senha" label="Senha"><br/>
  Data de nacimento<input type="date" name="nacimento" label="Data de nascimento"><br/>
  <input type="submit" value="ok">
</form>

<?php
  if(isset($_GET)){
    foreach ($_GET as $key => $value):
      echo "Nome do campo: ".$key."<br>";
      echo "Valor do campo: ".$value;
      echo "<hr>";
    endforeach;
  }
?>
