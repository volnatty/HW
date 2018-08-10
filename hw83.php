s<?php
$si=$_POST['si'];
$no=$_POST['no'];
$wow=$_POST['ha'];
var_dump($si);
var_dump($no);
var_dump($wow);
echo '<br>'."<br>";
if (isset($si)) {echo "it is 4";};
if (isset($no)) {echo "it is 1 (or to - does'n matter)))";};
if (isset($wow)) echo "GOT IT!!!";

?>
<html>
<body>
<form method="POST" action="hw83.php">
    YES:<input type="checkbox" name="si">
    NO:<input type="checkbox" name="no">
    I loose (((( - it's   :<input type="checkbox" name="ha">
    <input type="submit" name="check">
</form>
</body>
</html>