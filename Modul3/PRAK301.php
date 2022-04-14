<form>
    <label>Jumlah Peserta </label>
    <input name="jp" type="text" ><br>
    <button>Submit</button>
</form>

<?php

$JP = @$_GET['jp'];
if ($JP) {
    $warna = array('red','green');
    $i = 1;
    $x = 0;
    while($i <= $JP) {
        $war = $warna[$x % count($warna)];
        echo "<font size='3'> <font color='$war'><h2>Peserta Ke-$i <br><h2>";
         $i++;
         $x++;
       
    }
}


?>

