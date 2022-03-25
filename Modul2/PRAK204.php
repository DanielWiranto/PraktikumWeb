<form action="" method="post">
        Nilai : <input type="number" name="angka"> <br>
        <input type="submit" name="submit" value="Konversi">
    </form>

 <?php

 

if (isset($_POST['submit'])) {
     $angka = $_POST['angka'];
    if ($angka >= 0 && $angka < 1000) {
        if ($angka == 0) {
            echo "<h2> Hasil : NOL " ;
        } else if ($angka > 0 && $angka < 10) {
            echo "<h2> Hasil : Satuan " ;
        } else if ($angka > 10 && $angka < 20) {
            echo "<h2> Hasil : Belasan " ;
        } else if($angka == 10){
            echo "<h2> Hasil : Puluhan " ;
        } else if (($angka >= 20 && $angka < 100) ) {
            echo "<h2> Hasil : Puluhan " ;
        } else if ($angka >= 100 && $angka <1000) {
            echo "<h2> Hasil : Ratusan " ;
        }
        } else {
            echo "<h2> Hasil : Anda Menginput Melebihi Limit Bilangan";
        }
 }
 ?>
 

