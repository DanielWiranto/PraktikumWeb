<style>
.error {color: #FF0000;}
</style>

<?php
$namaErr = "";
$nama = "";
$nim = "";
$nimErr = "";
$jkErr = "";
$jk = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $namaErr = "Nama tidak boleh kosong";
  } else {
    $nama = $_POST["nama"];
  }
  if (empty($_POST["nim"])) {
    $nimErr = "NIM tidak boleh kosong";
  } else {
    $nim = $_POST["nim"];
  }
  if (empty($_POST["jk"])) {
    $jkErr = "Jenis kelamin tidak boleh kosong";
  } else {
    $jk = $_POST["jk"];
  }
}


?>



<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">  
  Nama : <input type="text" name="nama">
  <span class="error">* <?php echo $namaErr;?></span>
  <br>
  NIM: <input type="text" name="nim">
  <span class="error">* <?php echo $nimErr;?></span>
  <br>
  Jenis Kelamin:
  <span class="error">* <?php echo $jkErr;?></span>
  <br>
  <input type="radio" name="jk" value="Laki - Laki">Laki - Laki
  <br>
  <input type="radio" name="jk" value="Perempuan">Perempuan
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if (!empty($nama) && !empty($nim) && !empty($jk)){
echo "<h2>Output:</h2>";
echo $nama;
echo "<br>";
echo $nim;
echo "<br>";
echo $jk;
}
?>

