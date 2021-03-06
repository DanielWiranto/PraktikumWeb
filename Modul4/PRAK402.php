<style type="text/css">
    table, th, tr, td {
        border : 1px solid;
        border-collapse : collapse;
        text-align: left;
        padding : 5px;
    }
    th {
        background-color : #D0CECE;
    }
    th, td {
        width : 120px;
        height : 24px;
    }
</style>
<body>
    <table>
        <tr>
        <th> Nama </th>
        <th> NIM </th>
        <th> Nilai UTS </th>
        <th> Nilai UAS </th>
        <th> Nilai Akhir </th>
        <th> Huruf </th>
        </tr>
    <?php
        $array = [
            "andi" => [ "Andi", 2101001, 87, 65],
            "budi" => [ "Budi", 2101002, 76, 79],
            "tono" => [ "Tono", 2101003, 50, 41],
            "jessica" => [ "Jessica", 2101004, 60, 75]
        ];
        getNilaiAkhir($array["andi"]);
        getHuruf($array["andi"]);

        getNilaiAkhir($array["budi"]);
        getHuruf($array["budi"]);

        getNilaiAkhir($array["tono"]);
        getHuruf($array["tono"]);

        getNilaiAkhir($array["jessica"]);
        getHuruf($array["jessica"]);
        
        tampil($array["andi"]);
        tampil($array["budi"]);
        tampil($array["tono"]);
        tampil($array["jessica"]);

    ?>
    </table>
    <?php
        function getNilaiAkhir(&$arraySample){
            $a = ($arraySample[2] * 0.4);
            $b = ($arraySample[3] * 0.6);
            $nilaiAkhir = $a + $b;
            array_push($arraySample, $nilaiAkhir);
        }
        function getHuruf(&$arraySample){
            $huruf = "";
            if ($arraySample[4] >= 80){
                $huruf = "A";
            } elseif ($arraySample[4] >= 70 && $arraySample[4] < 80){
                $huruf = "B";
            } elseif ($arraySample[4] >= 60 && $arraySample[4] < 70){
                $huruf = "C";
            } elseif ($arraySample[4] >= 50 && $arraySample[4] < 60){
                $huruf = "D";
            } else {
                $huruf = "E";
            } 
            array_push($arraySample, $huruf);
        }
        function tampil($arraySample){
            $j = 0;
            echo "<tr>";
            while ($j < 6){
                $string = $arraySample[$j];
                echo "<td>$string </td>";
                $j ++;
            }
            echo "</tr>";
        }
    ?>
</body>