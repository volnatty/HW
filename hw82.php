<?php
$si=$_POST['si'];
$no=$_POST['no'];
$wow=$_POST['ha'];
//var_dump($si);
//var_dump($no);
//var_dump($wow);
echo '<br>'."<br>";
if (isset($si)) {$num=8; echo '<br>'.'<br>';
    echo "Wow, playing again....".'<br>'.'<br>';
    echo "Is Your number MORE than $num ?".'<br>';
?>
<html>
<body>
<form method="POST" action="hw83.php">
    YES:<input type="checkbox" name="si8">
    NO:<input type="checkbox" name="no8">
    I loose (((( - it is 8  :<input type="checkbox" name="ha8">
    <input type="submit" name="check">

</form>
</body>
</html>
<?php
};
if (isset($no)) {$num=3; echo '<br>'.'<br>';
    echo "Wow, playing again....".'<br>'.'<br>';
    echo "Is Your number MORE than $num ?".'<br>';
    ?>
<html>
<body>
<form method="POST" action="hw84.php">
        YES:<input type="checkbox" name="si3">
        NO:<input type="checkbox" name="no3">
        I loose (((( - it is 3  :<input type="checkbox" name="ha3">
    <input type="submit" name="check">

</form>
</body>
</html>
<?php
};
if (isset($wow)) echo "IT IS 5!!!!";

?>
