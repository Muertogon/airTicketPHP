<?php

if(isset($_POST['send'])){
    foreach (validate() as $erroras) {
        echo "*" . $erroras . "<br>";
    }
};
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Air Ticket</title>
    <style>
        b{
            color:#34998b;
        }
        th, tr{
            padding: 2px;
        }
        table {
            border: 1px solid black;

        }
        .container{
            padding: 2em;
            border: 2px solid black;
        }
        body{
            padding: 20px;
        }
        label{
            color: firebrick;
        }
    </style>
</head>
<body>

<div class="container">
    <form id="myform" method="post">
        <div class="form-group">
            <label for="vardas">Vardas</label>
            <input type="text" class="form-control " placeholder="John" id="vardas" name="vardas" aria-describedby="vardasHelp">
            <small id="vardasHelp" class="form-text text-muted">Įveskite vardą</small>
        </div>
        <div class="form-group">
            <label for="pavarde">Pavarde</label>
            <input type="text" class="form-control" placeholder="Smith" id="pavarde" name="pavarde" aria-describedby="pavardeHelp">
            <small id="pavardeHelp" class="form-text text-muted">Įveskite pavardę</small>
        </div>
        <div class="form-group">
            <label for="asmenskodas">Asmens kodas</label>
            <input type="number" class="form-control" placeholder="xxxxxxxxxxx" id="asmenskodas" name="asmenskodas" aria-describedby="asmenskodasHelp">
            <small id="nameHelp" class="form-text text-muted">Įveskite asmens kodą</small>
        </div>
        <div class="form-group">
            <select class="form-control" name="skrydziai">
                <option selected disabled>-- Skrydzio numerį --</option>
                <?php foreach ($skrydziai as $nr):?>
                    <option value="<?=$nr;?>"><?=$nr;?></option>
                <? endforeach;?>
            </select>
            <small id="skrydidHelp" class="form-text text-muted">Pasirinkite skrydžio numerį</small>
        </div>
        <div class="form-group">
            <select class="form-control" name="isvykimoMiestas">
                <option  selected disabled>-- Išvykimo miestas --</option>
                <?php foreach ($isMiestai as $miestas):?>
                <option value="<?=$miestas;?>"><?=$miestas;?></option>
                <? endforeach;?>
            </select>
            <small id="isMiestasHelp" class="form-text text-muted">Pasirinkite išvykimo miestą</small>
        </div>
        <div class="form-group">
            <select class="form-control" name="atvykimoMiestas">
                <option selected disabled>-- Atvykimo miestas --</option>
                <?php foreach ($atMiestai as $atMiest):?>
                    <option value="<?=$atMiest;?>"><?=$atMiest;?></option>
                <? endforeach;?>
            </select>
            <small id="atMiestasHelp" class="form-text text-muted">Pasirinkite atvykimo miestą</small>
        </div>
        <div class="form-group">
            <label for="kaina">Iveskite kaina</label>
            <input type="number" class="form-control" placeholder="xxxx€" id="kaina" name="kaina" aria-describedby="kainaHelp">
            <small id="kainaHelp" class="form-text text-muted">Įveskite keliones kaina</small>
        </div>
        <div class="form-group">
            <select class="form-control" name="BagazoSvoris">
                <option selected disabled>-- Bagažo svoris --</option>
                <?php foreach($bagazas as $svoris):?>
                    <option value="<?=$svoris;?>"><?=$svoris;?></option>
                <?php endforeach;?>
            </select>
            <small id="atMiestasHelp" class="form-text text-muted">Pasirinkite savo bagazo svori</small>
        </div>
        <div class="form-group">
            <label for="Pastabos">Pastabos</label>
            <input type="text" class="form-control" id="pastabos" name="pastabos" aria-describedby="pastabosHelp">
        </div>
        <button type="submit" class="btn btn-primary" name="send">Spausdinti</button>
    </form>
    <div class="row">
    <table>
        <?php
        echo "<tr>";
            echo "<th>"."<b>"."Keleivio vardas"."</b>"."</th>";
            echo "<th>"."<b>"."Data"."</b>"."</th>";
            echo "<th>"."<b>"."Laikas"."</b>"."</th>";
        echo "</tr>";
        echo "<tr>";
             echo "<th>".$_POST["vardaspavarde"]."</th>";
            echo "<th>".date("F jS")."</th>";
            echo "<th>".date("h:i:s")."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>"."<b>"."Iš"."</b>"."</th>";
            echo "<th>"."<b>"."Skrydis"."</b>"."</th>";
            echo "<th>"."<b>"."Vieta"."</b>"."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>".$_POST["isvykimoMiestas"]."</th>";
            echo "<th>".$_POST["skrydziai"]."</th>";
            echo "<th>".rand(20, 43)."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>"."<b>"."I"."</b>"."</th>";
            echo "<th>"."<b>"."Vartai"."</b>"."</th>";
            echo "<th>"."<b>"."Sėsti iki"."</b>"."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>".$_POST["atvykimoMiestas"]."</th>";
            echo "<th>".rand(1, 3)."</th>";
            echo "<th>"."..."."</th>";
        echo "</tr>";
        ?>
    </table>
    <table>
        <?php
        $iprastaKaina = $_POST['kaina'];
        $kainawitMok = $_POST['kaina']+ 30;
        echo "<tr>";
            echo "<th>"."<b>"."Keleivio vardas"."</b>"."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>".$_POST["vardaspavarde"]."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>"."<b>"."Kelionės maršrutas"."</b>"."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>".$_POST["isvykimoMiestas"]."--------->".$_POST["atvykimoMiestas"]."</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>"."<b>"."Kaina (Įskaitant bagažo mokestį)"."</b>"."</th>";
        echo "</tr>";
        echo "<tr>";
            if ($_POST['BagazoSvoris'] == '20kg<..'){
                echo "<th>".$kainawitMok."€"."</th>";
            }else{
                echo "<th>".$iprastaKaina."€"."</th>";
            }

        echo "</tr>";
        ?>
    </table>
    </div>
</body>
</html>