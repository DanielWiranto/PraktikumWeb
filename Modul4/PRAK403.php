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
        height : 24px;
    }
    #green {
        background-color : #00B050;
    }
    #red {
        background-color : #FF0000;
    }
</style>
<body>
    <table>
        <tr>
        <th> No </th>
        <th> Nama </th>
        <th> Mata Kuliah diambil </th>
        <th> SKS </th>
        <th> Total SKS </th>
        <th> Keterangan </th>
        </tr>
    <?php
        $array = [
            "ridho" => [
                1,
                "Ridho",
                ["Pemrograman I",
                "Praktikum Pemrograman I",
                "Pengantar Lingkungan Lahan Basah",
                "Arsitektur Komputer"],
                [2, 1, 2, 3]
                ],
            "ratna" => [
                2,
                "Ratna",
                ["Basis Data I",
                "Praktikum Basis Data I",
                "Kalkulus"],
                [2, 1, 3]
                ],
            "tono" => [ 3, "Tono",
                ["Rekayasa Perangkat Lunak",
                "Analisis dan Perancangan Sistem",
                "Komputasi Awan",
                "Kecerdasan Bisnis"],
                [3, 3, 3, 3]
                ]
        ];
        getSumSks($array["ridho"]);
        getKet($array["ridho"]);
        getSumSks($array["ratna"]);
        getKet($array["ratna"]);
        getSumSks($array["tono"]);
        getKet($array["tono"]);
        
        tampil($array["ridho"]);
        tampil($array["ratna"]);
        tampil($array["tono"]);

    ?>
    </table>
    <?php
        function getSumSks(&$arraySample){
            $sum = array_sum($arraySample[3]);
            array_push($arraySample, $sum);
        }
        function getKet(&$arraySample){
            $string = "";
            if($arraySample[4] >= 8){
                $string = "<td id='green'> Tidak Revisi </td>";
                array_push($arraySample, $string);
            } else {
                $string = "<td id='red'> Revisi KRS </td>";
                array_push($arraySample, $string);
            }
        }
        function tampil($arraySample){
            echo "<tr>";
            $string = $arraySample[0];
            echo "<td>$string </td>";
            $string = $arraySample[1];
            echo "<td>$string </td>";
            $string = $arraySample[2][0];
            echo "<td>$string </td>";
            $string = $arraySample[3][0];
            echo "<td>$string </td>";
            $string = $arraySample[4];
            echo "<td>$string </td>";
            echo $arraySample[5];
            echo "</tr>";
            $i = 1;
            $long = sizeof($arraySample[2]);
            while ($i < $long){
                echo "<tr>";
                $k = 0;
                while ($k < 2){
                    echo "<td></td>";
                    $k ++;
                }
                $string = $arraySample[2][$i];
                echo "<td>$string </td>";
                $string = $arraySample[3][$i];
                echo "<td>$string </td>";
                $l = 0;
                while ($l < 2){
                    echo "<td></td>";
                    $l ++;
                }
                echo "</tr>";
                $i ++;
            }
        }
    ?>
</body>