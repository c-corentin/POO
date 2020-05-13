<?php   
    require 'catalog.php';

    $audiA3 = new car('Audi A3',115601,3.5,"2018",'available', 'FR-16QS46');

    $audiA3 -> rouler();
    
    $jeep = new car('Jeep Wrangler',86134,4.8,"2019",'available','BE-395-QSD');

    $renault = new car('Renault Twingo',143621,0.8,"2019",'available','DE-4494SDF32');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car park</title>
</head>

<body>
    <h1>Catalog</h1>

    <table>

        <tr>
            <th>Picture</th>
            <th>Brand</th>
            <th>Kilometer</th>
            <th>Weight</th>
            <th>Date</th>
            <th>Available</th>
            <th>Plate number</th>
            <th>Used</th>
            <th>Country</th>
            <th>Use</th>
        </tr>
        <tbody>
            <tr>
                <td>

                    <img src="https://www.cars-data.com/pictures/thumbs/350px/audi/audi-a4_4124_1.jpg" alt="audiA3"
                        width="150" heigth="150">

                </td>
                <?= $audiA3->display()?>
            </tr>
            <tr>
                <td>

                    <img src="https://www.cars-data.com/pictures/thumbs/350px/jeep/jeep-wrangler-unlimited_4215_1.jpg"
                        alt="jeep" width="150" heigth="150">

                </td>
                <?= $jeep->display()?>
            </tr>
            <tr>
                <td>

                    <img src="https://www.cars-data.com/pictures/thumbs/350px/renault/renault-twingo_4312_1.jpg"
                        alt="renault" width="150" heigth="150">

                </td>
                <?= $renault->display()?>
            </tr>

        </tbody>

    </table>
</body>

</html>