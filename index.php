<html>

<head>
    <title>
    </title>
    <style>
        body p {
            text-align: center;
        }

        table {
            margin-left: 30%;
            width: 20px;
        }

        table tr td {
            text-align: center
        }
    </style>

</head>

<body>
    <br>
    <br>
    <p align="center">Data Pemantauan Covid19 wilayah Banten <br> 18 April 2020 21:38:16
        (<?php
            date_default_timezone_set('Asia/Jakarta');
            $time = time();
            echo date('l, d-m-y H:i:s a');  ?>)<br>
        Kristianus Mon/171011400937</p>

    <table border="1" cellspacing="10" cellpadding="20">
        <tr>
            <th>Positif</th>
            <th>Dirawat</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
        </tr>
        <tr>
            <td><?php echo '2902'; ?></td>
            <td><?php echo '1769'; ?> </td>
            <td><?php echo '206'; ?></td>
            <td><?php echo '257'; ?></td>
        </tr>
    </table>



</body>

</html>