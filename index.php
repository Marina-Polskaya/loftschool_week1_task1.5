<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test page</title>
    </head>
    <body>
        <?php
        /* Создайте массив $bmw с ячейками: model, speed, doors, year.
        Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”.
        Создайте массивы $toyota' и '$opel аналогичные массиву $bmw (заполните данными).
        Объедините три массива в один многомерный массив.
        Выведите значения всех трех массивов.*/     
        
        $bmw = [
            'model' => 'X5',
            'speed' => 120,
            'doors' => 5,
            'year' => "2015"
        ];
        
        $toyota = [
            'model' => 'Camry',
            'speed' => 115,
            'doors' => 4,
            'year' => '2018'
        ];
        
        $opel = [
            'model' => 'Astra',
            'speed' => 110,
            'doors' => 4,
            'year' => '2023'
        ];
        
        $car = [
            'bmw'=> $bmw,
            'toyota' => $toyota,
            'opel' => $opel
        ];
        
        foreach ($car as $carBrandKey => $carBrandName) {
            echo "CAR $carBrandKey<br />";
            echo "{$car[$carBrandKey]['model']} {$car[$carBrandKey]['speed']} {$car[$carBrandKey]['doors']} {$car[$carBrandKey]['year']}<br /><br />";            
        }
        ?>
    </body>
</html>
