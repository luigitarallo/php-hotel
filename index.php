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
    <title>PHP HOTEL</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center text-success">The Best Hotels in the World</h1>

        <?php foreach ($hotels as $key => $hotel): ?>
            <h2>
                <?php echo $hotel['name']; ?>
            </h2>
            <p class="text-primary"> Description:
                <?php echo $hotel['description']; ?>
            </p>
            <p class="text-danger"> Parking:
                <?php echo $hotel['parking'] ? 'Yes' : 'No'; ?>
            </p>
            <p class="text-secondary"> Vote:
                <?php echo $hotel['vote']; ?>
            </p>
            <p> Distance from center:
                <?php echo $hotel['distance_to_center']; ?> Km
            </p>
        <?php endforeach; ?>

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
                <?php foreach ($hotels as $key => $hotel): ?>
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