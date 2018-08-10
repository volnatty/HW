<html>
<body>
<form method="GET">
    Bet:<input type="number" name="bet"><br/>
    <p style="text-indent:140px"> England &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Belgium<br/></p>
    Score:<input type="number" name="en"> : <input type="number" name="be">
    <input type="submit" value="CHECK">

</form>
<?php
$bet=$_GET['bet'];
$en=$_GET['en'];
$be=$_GET['be'];
if ($en==0) $en_w=$bet*(2.5-1.5);
    else $en_w=$bet*1.5*$en;
    if ($be==0) $be_w=$bet*(2.5-1.5);
        else $be_w=$bet*2.5*$be;
echo "If you bet for England you won ".$en_w." coins, for Belgium - ".$be_w." coins".'<br>';


?>
</body>
</html>