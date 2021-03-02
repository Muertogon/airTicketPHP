<?php
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