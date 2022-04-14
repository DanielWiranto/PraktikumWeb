<form method="POST">
        <label>Tinggi : </label>
        <input name="tinggi" type="text" ><br>
        <label>Alamat Gambar : </label>
        <input name="gambar" type="url" ><br>
        <input type="submit" name="cetak" value="Cetak"><br>
</form>

<?php
     $t = 0;
     $gambar = "";
     $i = 0;
   
    if($_SERVER['REQUEST_METHOD'] == "POST"){
         if (isset($_POST['tinggi'])){
             $t = $_POST['tinggi'];
         }
         if (isset($_POST['gambar'])){
             $gambar = $_POST['gambar'];
         }
         echo "<table>";
         while ($t > $i){
             $j = 0;
            echo "<tr><td>";
            while ($j < $t){
                echo "<img src='$gambar' Height = '20px' widht = '20px' align='right'>";
                 $j ++;
              }
              $t --;
          }
          echo "</table>";
     }
?>

