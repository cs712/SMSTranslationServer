<html>

<form name="input" action="server3.php" method="POST" id="key">
Sentence: <input type="text" name="sentence" />
<input type="submit" value="Translate" />
</form>
<?php

if(isset($_POST['sentence'])) {
  $sentence=$_POST['sentence'];
  echo "Sentence: ";
  echo $sentence;
  echo "<br>";
  $translation = $sentence; #for now its the same
  echo "Translation: ";
  echo $translation;
}

?>

</html>
