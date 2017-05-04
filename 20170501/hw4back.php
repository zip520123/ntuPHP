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
        $getVocabulary = $_GET['vocabulary'];
        $searchAll = $_GET['all'];
        $getVocabularyLower = strtolower($getVocabulary);
        echo "<h1>$getVocabulary:</h1>";
        // echo "<h1>searchAll: $searchAll</h1>";
        print_r($_GET);
        require_once("hw4dict.php");
        if (searchAll == true){
            foreach ($dict as $dictKey => $dictValue) {
                $dictKeyLower = strtolower(substr($dictKey,0,1));
                if ($dictKeyLower == $getVocabularyLower) {
                    echo '<p>'.$dictKey.":".$dictValue;            
                }
            }
        }else{
            echo "fal";
            foreach ($dict as $dictKey => $dictValue) {
                if ($getVocabularyLower == $dictKey || $getVocabularyLower == $dictValue) {
                    echo '<p>'.$dictKey.":".$dictValue;          
                }
            }
        }
            
            
        

        // $array = range('A','Z');

        //     $keyLower = strtolower($value);

            


            
        
    ?>
    <!--<h1>A:</h1>-->
</body>
</html>