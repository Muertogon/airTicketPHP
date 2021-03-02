<?php
if(isset($_POST['send'])){
    $iprastaKaina = $_POST['kaina'];

    if(empty(validate()) == False){
        foreach (validate() as $erroras) {
            echo "*" . $erroras . "<br>";
        }
    }else{
        printData();
    }
}
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
            padding: 5em;
            border: 2px solid black;
        }
        body{
            padding: 20px;
        }
        label{
            color: firebrick;
        }
        .rip, tr, th{
            border: 1px solid black;
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
                <?php endforeach;?>
            </select>
            <small id="skrydidHelp" class="form-text text-muted">Pasirinkite skrydžio numerį</small>
        </div>
        <div class="form-group">
            <select class="form-control" name="isvykimoMiestas">
                <option  selected disabled>-- Išvykimo miestas --</option>
                <?php foreach ($isMiestai as $miestas):?>
                <option value="<?=$miestas;?>"><?=$miestas;?></option>
                <?php endforeach;?>
            </select>
            <small id="isMiestasHelp" class="form-text text-muted">Pasirinkite išvykimo miestą</small>
        </div>
        <div class="form-group">
            <select class="form-control" name="atvykimoMiestas">
                <option selected disabled>-- Atvykimo miestas --</option>
                <?php foreach ($atMiestai as $atMiest):?>
                    <option value="<?=$atMiest;?>"><?=$atMiest;?></option>
                <?php endforeach;?>
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
        <table class="rip">
            <h3>Skrydziu rezervacijos</h3>
            <tr>
                <th>Vardas</th>
                <th>Pavarde</th>
                <th>Asmens Kodas</th>
                <th>Skrydzio numeris</th>
                <th>Is</th>
                <th>I</th>
                <th>Kaina</th>
                <th>Bagazas</th>
                <th>Pastaba</th>
                <th>Bilietas</th>
            </tr>
            <?php
                $tableItems = getYes();

                $tableItems = array_chunk($tableItems, 9);

                foreach ($tableItems as $data){
                    echo '<tr>';
                    echo "<form action='./ticket.php' method='post'>";
                    $i = 0;
                    foreach ($data as $rezervacija){
                        echo '<input type="hidden" name="'.$i.'" value="'.$rezervacija.'">';
                        echo '<th>'.$rezervacija.'</th>';
                        $i++;
                    }
                    echo '<th>'.'<button type="submit">Perziureti Bilieta</button> '.'</th>';
                    echo '</form>';
                    echo '</tr>';
                }
                ?>
        </table>

    </div>
</body>
</html>