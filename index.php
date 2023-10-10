<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="text-bg-dark">

    <div class="container w-75 py-4">

        <form method="get" action="" class="row g-3">
            <div class="col-3">
                <select name="park" class="form-select">
                    <option value="">Tutti gli Hotel</option>
                    <option value="park">Hotel con parcheggio</option>
                    <option value="nopark">Hotel senza parcheggio</option>
                </select>
            </div>
            <div class="col-3">
                <select name="vote" class="form-select">
                    <option value="0">Tutti gli Hotel</option>
                    <option value="1">Voto maggiore o uguale a 1</option>
                    <option value="2">Voto maggiore o uguale a 2</option>
                    <option value="3">Voto maggiore o uguale a 3</option>
                    <option value="4">Voto maggiore o uguale a 4</option>
                    <option value="5">Voto uguale a 5</option>
                </select>
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-light">Filtra</button>
            </div>
        </form>

        <table class="table table-dark table-striped">
            <thead>
                <tr class="">
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $park_filter = $_GET["park"];
                $vote_filter = $_GET["vote"];
                var_dump($park_filter);
                var_dump($vote_filter);

                foreach ($hotels as $hotel) {

                    $cond0 = $park_filter == '' && $hotel['vote'] >= $vote_filter;
                    $cond1 = $park_filter == 'park' && $hotel['parking'] == true && $hotel['vote'] >= $vote_filter;
                    $cond2 = $park_filter == 'nopark' && $hotel['parking'] == false && $hotel['vote'] >= $vote_filter;

                    if ($cond0 || $cond1 || $cond2) {

                ?>
                        <tr class="">
                            <th scope="row ">
                                <?php echo $hotel['name'] ?>
                            </th>
                            <td class="">
                                <?php echo $hotel['description'] ?>
                            </td>
                            <td class="">
                                <?php echo $hotel['parking'] ?>
                            </td>
                            <td class="">
                                <?php echo $hotel['vote'] ?>
                            </td>
                            <td class="">
                                <?php echo $hotel['distance_to_center'] ?>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>

    </div>

</body>

</html>