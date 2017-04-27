<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $data = ['apple' => '頻果','banana' => '香蕉','melo' => '西瓜'];

        if ( @$data['orange'] == '')
            echo "查無此果";
    ?>
    <!--<hr>
    現在我要把我的水果全部秀出來:<br> 

    <?php
        // foreach ($data as $en => $cn) {
        //     echo "英文: " .$en . " ,中文: ". $cn."<br>";
        // }
    ?>-->

    <table border="1">
    <tr>
        <td>英文</td>
        <td>中文</td>
    </tr>
    <?php foreach($data as $en => $cn):?>
    <tr>
        <td><?= $en;?></td>
        <td><?= $cn;?></td>
    </tr>
    <?php endforeach;?>
    </table>


</body>
</html>