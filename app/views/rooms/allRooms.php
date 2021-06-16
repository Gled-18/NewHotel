<!-- query sql do me ktheje kto te dhena nga db -->
<?php

$listRoom = [
    [
        'RoomNo' => 1,
        'Floor' => 2,
        'Status' => 3,
        'typeName' => 4,
        'price' => 500
    ],
    [
        'RoomNo' => 0,
        'Floor' => 10,
        'Status' => 100,
        'typeName' => 11,
        'price' => 1100
    ]



];
print_r($listRoom);
echo json_encode($listRoom)

?>