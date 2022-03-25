<?php 

    $nama = NULL;
    $nama2 = NULL;
    $nama3 = NULL;

    function insertionSort($array)
    {
        for ($i = 0; $i < count($array); $i++) {
            $val = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $array[$j] > $val) {
                $array[$j + 1] = $array[$j];
                $j--;
            }
            $array[$j + 1] = $val;
        }
        return $array;
    }
     
        if (isset($_POST['submit'])) {
            $huruf[] = $_POST['nama'];
            $huruf[] = $_POST['nama2'];
            $huruf[] = $_POST['nama3'];
            foreach (insertionSort($huruf) as $hasil) {
                echo " </br>",$hasil;
                
            }
        }
    
?>