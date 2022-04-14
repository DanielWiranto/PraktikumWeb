<form method="POST">
    <input type="text" name="kalimat">
    <input name="submit" type="submit"  value="submit"><br>
</form>

<?php
    $kalimat = 0;
    $long = 0;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['kalimat'])){
            $kalimat = $_POST['kalimat'];
         }
            $long = strlen($kalimat);
            $i = 0;
            while($i < $long){
                $k = $long;
            while($k > 0){
                if ($k == $long){
                    echo strtoupper($kalimat[$i]);
                } else echo strtolower($kalimat[$i]);
                 $k--;
             }
             $i++;
         }
    }
?>
