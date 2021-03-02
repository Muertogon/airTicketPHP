<?php include 'inc/functions.php';
$skrydzioData = ($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ticket</title>
    <style>
        b{
            color:#34998b;
        }
        th, tr{
            padding: 2px;
        }
        .ass{
            border: 1px solid black;
            background-image: url("inc/images.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <table class="ass">
        <tr>
            <th><b>Keleivio vardas</b></th>
            <th><b>Kaina</b></th>
            <th><b>Asmens kodas</b></th>
        </tr>
        <tr>
            <th><?= $skrydzioData[0];?> <?=$skrydzioData[1];?></th>
            <th><?php
                $iprastaKaina = $skrydzioData[6];
                $kainasuMok = $skrydzioData[6]+ 20;
                if($skrydzioData[7]=='20kg<..'){
                    echo $kainasuMok;
                    }else{
                        echo $skrydzioData[7];
                };
                ?> €</th>
            <th><?= $skrydzioData[2];?></th>
        </tr>
        <tr>
            <th><b>Is</b></th>
            <th><b>Bagazas</b></th>
            <th><b>Skrydzio numeris</b></th>
        </tr>
        <tr>
            <th><?= $skrydzioData[4];?></th>
            <th><?= $skrydzioData[7];?></th>
            <th><?= $skrydzioData[3];?></th>
        </tr>
        <tr>
            <th><b>I</b></th>
            <th><b>Pastaba</b></th>
        </tr>
        <tr>
            <th><?= $skrydzioData[5];?></th>
            <th><?= $skrydzioData[8];?></th>

        </tr>
    </table>
</body>
</html>