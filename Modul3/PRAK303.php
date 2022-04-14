<form method="POST">
     <label> Batas Bawah : </label>
    <input type="text" name="bawah"><br>
    <label> Batas Atas : </label>
    <input type="text" name="atas"><br>
    <input type="submit" value="cetak" name="hitung">    
</form>
    
<?php
     if (isset($_POST['hitung'])) {

    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];
        do {
            if (($bawah + 7) % 5 == 0) {
                echo "<img src='star-images-9441.png' height='20' width='20'>";
            } else {
                echo "$bawah ";
            }
            $bawah++;
        } while ($bawah <= $atas);
    }
?>

