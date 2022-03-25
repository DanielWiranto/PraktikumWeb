<?php
    if (isset($_POST['enter'])) {

        $suhu = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $hasil;
    }
?>


    <form action="" method="post">
        Nilai : <input type="text" name="nilai" value="<?php if (isset($suhu)) echo $suhu ?>">
        <br> Dari: <br>
        <input type="radio" name="dari" <?php if (isset($dari) && $dari == "Celcius") echo "checked"; ?> value="Celcius"> Celcius <br>
        <input type="radio" name="dari" <?php if (isset($dari) && $dari == "Fahrenheit") echo "checked"; ?> value="Fahrenheit"> Fahrenheit <br>
        <input type="radio" name="dari" <?php if (isset($dari) && $dari == "Reamur") echo "checked"; ?> value="Reamur"> Reamur <br>
        <input type="radio" name="dari" <?php if (isset($dari) && $dari == "Kelvin") echo "checked"; ?> value="Kelvin"> Kelvin <br>

        Ke : <br>
        <input type="radio" name="ke" <?php if (isset($ke) && $ke == "Celcius") echo "checked"; ?> value="Celcius"> Celcius <br>
        <input type="radio" name="ke" <?php if (isset($ke) && $ke == "Fahrenheit") echo "checked"; ?> value="Fahrenheit"> Fahrenheit <br>
        <input type="radio" name="ke" <?php if (isset($ke) && $ke == "Reamur") echo "checked"; ?> value="Reamur"> Reamur <br>
        <input type="radio" name="ke" <?php if (isset($ke) && $ke == "Kelvin") echo "checked"; ?> value="Kelvin"> Kelvin <br>
        <input type="submit" name="enter" value="Konversi">
    </form>

<?php
    if (isset($_POST['enter'])) {
        switch ($dari) {
            case "Celcius":
                switch ($ke) {
                    case 'Celcius':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = (9/5)*$suhu + 32;
                        echo "<h2> Hasil Konversi:" . $hasil . "°F</h2>";
                        break;
                    case "Reamur":
                        $hasil = (4/5)*$suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = $suhu + 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            case "Fahrenheit":
                switch ($ke) {
                    case 'Celcius':
                        $hasil = ($suhu - 32) * 5 / 9;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "℉</h2>";
                        break;
                    case "Reamur":
                        $hasil = 4 / 9 *($suhu - 32)  ;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = ($suhu - 32) * 5 / 9 + 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            case "Reamur":
                switch ($ke) {
                    case 'Celcius':
                        $hasil = $suhu  / 0.8;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = $suhu * 2.25 + 32;
                        echo "<h2> Hasil Konversi:" . $hasil . "℉</h2>";
                        break;
                    case "Reamur":
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = ($suhu / 0.8) + 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            case "Kelvin":
                switch ($ke) {
                    case 'Celcius':
                        $hasil = $suhu - 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = ($suhu - 273) * 9 / 5 + 32;
                        echo "<h2> Hasil Konversi:" . $hasil . "℉</h2>";
                        break;
                    case "Reamur":
                        $hasil = ($suhu - 273) * 4 / 5;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
        }
    }
?>

