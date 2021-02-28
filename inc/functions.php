<?php
function validate(){
    $validation= array();
    $pastabaBool = !preg_match('/^(\w{1,}\s+){10,100}/', $_POST['pastabos']);
    $asmenskodasBool = !preg_match('/\d{11}/', $_POST['asmenskodas']);
    $vardasBool = !preg_match('/\A[A-Z][a-z]{1,100}/', $_POST['vardas']);
    $pavardeBool = !preg_match('/\A[A-Z][a-z]{1,100}/', $_POST['pavarde']);

    if ($pastabaBool == True){array_push($validation, "Pastaba turi būti nuo 50 iki 1000 simbolių.");}
    if ($asmenskodasBool == True){array_push($validation, "Asmens kodą turi sudaryti 11 skaitmenų.");}
    if ($vardasBool == True){array_push($validation, "Vardas turi prasidėti didžiąją raide.");}
    if ($pavardeBool == True){array_push($validation, "Pavardė turi prasidėti didžiąją raide.");}
    if (empty($_POST['BagazoSvoris'])){array_push($validation, "Reikia pasirinkti bagazo svori.");}
    if (empty($_POST['isvykimoMiestas'])){array_push($validation, "Reikia pasirinkti isvykimo miesta.");}
    if (empty($_POST['skrydziai'])){array_push($validation, "Reikia pasirinkti skrydzio numeri.");}
    if (empty($_POST['atvykimoMiestas'])){array_push($validation, "Reikia pasirinkti atvykimo miesta.");}

    return $validation;
}


function printData($data){
    $data = "data/zinutes.txt"; //kelias i faila
    $content = file_get_contents($data); //nuskaitom tekstini faila
    $formData = implode(', ',$_POST);
    $content.= $formData."/n";
    file_put_contents($data, $content);
    $messages = file_get_contents($data, true);
    $messages = explode('/n', $messages);
    var_dump($messages);
}