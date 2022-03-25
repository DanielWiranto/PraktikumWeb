<form action="" method="post">
        Nilai : <input type="number" name="angka"> <br>
        <input type="submit" name="submit" value="Konversi">
    </form>

 <?php
if (isset($_POST['submit'])) {
     $angka = $_POST['angka'];
    if ($angka >= 0 && $angka < 1000) {
        if ($angka == 0) {
            echo "Nol";
        } else if ($angka > 0 && $angka < 10) {
            echo "Satuan";
        } else if ($angka > 10 && $angka < 20) {
            echo "Belasan";
        } else if($angka == 10){
            echo "Puluhan";
        } else if (($angka >= 20 && $angka < 100) ) {
            echo "Puluhan";
        } else if ($angka >= 100 && $angka <1000) {
            echo "Ratusan";
        }
        } else {
            echo "Anda Menginput Melebihi Limit Bilangan";
        }
 }
 ?>
 

