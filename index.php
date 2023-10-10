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

        <form method="post" action="">
            <select name="park" class="form-select w-50">
                <option value="">Filtra in base alla presenza di parcheggio</option>
                <option value="park">Con parcheggio</option>
                <option value="nopark">Senza parcheggio</option>
            </select>
            <button type="submit">Filtra</button>
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

                $park_filter = $_POST["park"];
                var_dump($park_filter);

                foreach ($hotels as $hotel) {

                    if ($park_filter == 'park' && $hotel['park'] == 1) {
                        var_dump($hotel);

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