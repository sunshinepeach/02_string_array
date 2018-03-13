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
            <h1>String und Array Funktionen</h1>

            <?php
            $csv = "TXL|Berlin Tegel|Berlin;de";
            // explode() liefert ein Array
            $airport = explode('|', $csv);
            // implode() liefert einen String
            $string = implode(',', $airport);

            // Ersetzen von Strings
            // str_replace liefert einen neuen String
            // Trennzeichen ersetzen     
            $newCsv1 = str_replace('|', ':', $csv);
            // Wort ersetzen
            $newCsv2 = str_replace('Berlin', 'Spandau', $newCsv1);

            // mehrere unterschiedliche Stringelemente ersetzen
            // Liste serstellen --> Array
            $transDE = [':', 'Uhr', 'Bushaltestelle', 'Halle'];
            $transEN = ['.', 'H', 'Bus stop', 'hall'];

            // zu ersetzender String 
            $de = "13:00 Uhr Bushaltestelle Halle A"; //13:00
            // explode ' '
            $deArray = explode(' ', $de);
            // ['13:00', 'Uhr', 'Bushaltestell'...]
            // explode des ersten Array Elements ':'
            $deTime = explode(':', $deArray[0]);
            // ['13', '00']
            // Uhr = pm / am
            // if 13 > 12 --> 13-12 --> 1
            if ($deTime[0] > 12) {
                // echo $firstElement[0] - 12;
                //$deTime[0] = $deTime[0] - 12;
                $deTime[0] -= 12;
                $deArray[1] = 'pm';
            } elseif (intval($deTime[0]) === 0) {
                $deTime[0] = 12;
                $deArray[1] = 'am';
            } elseif (intval($deTime[0]) === 12) {
                $deArray[1] = 'pm';
            } else {
                $deArray[1] = 'am';
            }
          //  echo "$deTime[0] $deArray[1]";
            
            
            // ['1', '00']
            // implode '.'
            $deArray[0] =  implode('.', $deTime); 
            // 1.00
                // ['1:00', 'pm', 'Bushaltestell'...];
            // implode ' '
            $tmpString = implode(' ', $deArray);
            
            // 1:00 pm Bushaltestelle Halle A
            // str_replace($transDE, $transEN, ...)
                // 1:00 pm Bus stop hall A
            // neuer String
            $en = str_replace($transDE, $transEN, $tmpString); //$de
           
//            $time = explode(' ', $de)[0];
//            $time = explode(' ', $de)[0];
            ?>

            <hr>
        </div>
        <hr>
        <pre>
            <?php
            var_dump($en);
            ?>
        </pre>  


    </body>
</html>
