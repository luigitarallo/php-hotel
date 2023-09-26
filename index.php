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
// Controllo che siano stati selezionati dei valori altrimenti li imposto su "vuoti"
$filterParking = isset($_GET['parking']) ? $_GET['parking'] : '';
$filterRating = isset($_GET['rating']) ? $_GET['rating'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Hotel Filters</h1>
        <!-- FORM -->
        <form method="GET">
            <div class="form-group">
                <label for="parking">Filter by Parking:</label>
                <select name="parking" id="parking" class="form-control">
                    <option value="">All</option>
                    <option value="1">With Parking</option>
                    <option value="0">Without Parking</option>
                </select>
            </div>
            <div class="form-group">
                <label for="vote">Filter by Vote:</label>
                <select name="vote" id="vote" class="form-control">
                    <option value="">All</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary my-3">Apply Filters</button>
        </form>
        <!-- TABLE -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Km from center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel): ?>
                    <tr>
                        <th scope="row">
                            <?php echo $hotel['name']; ?>
                        </th>
                        <td>
                            <?php echo $hotel['description']; ?>
                        </td>
                        <td>
                            <?php echo $hotel['parking'] ? 'Yes' : 'No'; ?>
                        </td>
                        <td>
                            <?php echo $hotel['vote']; ?>
                        </td>
                        <td>
                            <?php echo $hotel['distance_to_center']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>