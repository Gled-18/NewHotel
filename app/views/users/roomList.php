
<?php

if (isset($_POST['startDate'])) {

    $startDate = $_POST['start'];
    // echo $startDate;
}

if (isset($_POST['end'])) {

    $endDate = $_POST['end'];
    // echo $endDate;
}

// $query  = 'SELECT * FROM roomData WHERE startDate NOT BETWEEN $startDate AND $endDate '

//EXECUTE QUERY..... MERR TE DHENAT SI ARRAY ME POSHTE

$arrayVariable = [
    [
        'id' => 1,
        'price' => 1
    ],
    [
        'id' => 3,
        'price' => 2
    ],
    [
        'id' => 2,
        'price' => 3
    ],

    [
        'id' => 4,
        'price' => 4
    ],


];

// ktheje ne format json
echo json_encode($arrayVariable);



?>