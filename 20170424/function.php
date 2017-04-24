<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
           function discount($price , $rate)
        {
            $result = [];
            foreach ($price as $key => $value) {
                $result[$key] = $value * $rate;
            }

            return $result;
        }
        
        $price = [5000,5800,6430,420,990];

        $result = discount($price , 0.5);

        for ($i=0; $i < sizeof($result); $i++) { 
            echo $result[$i] . " , ";
        }
    ?>
</body>
</html>