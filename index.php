<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 01 BASIC</title>
        <meta name="viewport" content="width-divice-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <h1>Variablen und Arrays</h1>

            <?php
            $a = 1; // Integer
            $b = 'zeichenkette'; // string
            $c = '3'; // string
            $d = 1.45; // float
            $e = '1.45'; // string
            $f = "1.45"; // string
            $g = '$d';
            $h = "$d";
            $i = 'Price: ' . $d . ' Euro';
            $j = "Price: $d €";
            $k = $f * 1;
            $l = floatval($f);
            $productPrice = 10.5;
            $amount = 5;
            $sum = $productPrice * $amount;
            // 5 x Produkt à 10 € = 50 €
            $m = "$amount x Produkt à $productPrice € = $sum €";
            $n = sprintf("%d x Produkt à %.2f € = %.2f €", $amount, $productPrice, $sum);

            // Arrays
            // Indiziertes Array
            $amounts = [20, 50, 40];
            $output = "Der erste wert im array: $amount[0]";
            $cities = ['Berlin', 'Rom', 'Madrid', 'Paris'];
            $cities[4] = 'Oslo'; // vgl. 5
            // Assoziatives Array
//            $airports = [];
//            $airports['TXL'] = 'Berlin Tegel';
//            $airports['SXF'] = 'Berlin Schönefeld';
            
              $airports = [
                  'TXL' => 'Berlin Tegel',
                  'SXF' => 'Berlin Schönefeld'
                  ];
              $airports['JFK'] = 'JFK Airport New York';
              
              
              
              
            ?>

            <hr>
        </div>
        <hr>
        <pre>
<!-- Anzahl der elemente im Array: --> <?php //echo count($amounts);  ?>
<!-- Der erste Wert im Array  --><?php //echo $amounts[0] . "\n";  ?>
            <?php //echo $output; ?>

            <?php
            // echo $n;
            // var_dump($cities);
            // echo count($cities);
//            for ($i = 0; $i < count($cities); $i++) {
//                echo $cities[$i] . "\n";
//            }
//            foreach ($cities AS $key => $city) {
//                echo $key. ': ' . $city . "\n";
//            }
//            foreach ($cities AS $city) {
//                echo $city . "\n";
//            }
            //echo count($airports);
            var_dump($airports);
            foreach ($airports as $key => $airport) {
                printf("%s : %s \n", $key, $airport);
            }
            
            
            
            
            
            
            
            
            ?>
        </pre>  


    </body>
</html>
