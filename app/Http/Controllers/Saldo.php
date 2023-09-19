<form method="POST" actions="">
    <table>
        <tr><td>Saldo Awal </td><td> :<input type="text" name="salawal"></td></tr>
        <tr><td>Lama Bulan </td><td> :<input type="text" name="bulan"></td></tr>
</table>
<input type="submit" value="Check">
<input type="reset" value="Reset">
</form>
<?php
echo "Saldo Awal = Rp $_POST[salawal],-<br>";
echo "Lama Bulan = Rp $_POST[bulan],-<br>";
$saldo=$_POST['salawal'];
$bulan=$_POST['bulan'];
for ($a=1;$a<=$bulan;$a++){
    if($saldo<=1100000){
    $bunga=0.03;
    $saldo=$saldo*$bunga+$saldo-9000;
}
else{
    $bunga=0.04;
    $saldo=$saldo*$bunga+$saldo-9000;
}
}
echo "Saldo Akhir = Rp $saldo,-";
?>










