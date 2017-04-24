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
    
       $grade = [
            'math' => [50,85,65,97,12,35,65] ,
            'chinese' => [85,65,97,12,35,65,70] ,
            'english' => [65,97,12,35,65,70,40] 
        ];

        $grade['php'] = [65,97,12,35,65,70,30];

        echo $grade['math'][3];

        echo $grade[0][3];

           foreach ($grade as $subject => $rowData) {
            echo "科目: ".$subject."<br>"; 
            foreach ($rowData as $key => $value) {
                echo "第".($key+1)."號同學成績為: ". $value."<br>";
            }
            echo "<hr>";
        }
    ?>
</body>
</html>