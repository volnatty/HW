<?php
$si=$_POST['si'];
$no=$_POST['no'];
$wow=$_POST['ha'];
var_dump($si);
var_dump($no);
var_dump($wow);
echo '<br>'."<br>";
if (isset($si)) {$num=8; echo $num;};
if (isset($no)) {$num=3; echo $num;};
if (isset($wow)) echo "IT IS 5!!!!";
echo "Wow, playing again....".'<br>'.'<br>';
echo "Is Your number MORE than $num ?".'<br>';
?>
<html>
<body>
<form method="POST" action="hw83.php">
    YES:<input type="checkbox" name="si">
    NO:<input type="checkbox" name="no">
    I loose (((( - it is   :<input type="checkbox" name="ha">
    <input type="submit" name="check">

</form>
</body>
</html>
