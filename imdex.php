<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้คำสั่งแบบ condition (กลุ่มคำสั่ง if)</h1>
    <?php
        echo "<h2?>คำสั่ง if </h2>";
        $x = 5 ;
        $y = 8 ;
        echo "\$x = $x <br>" ;
        echo "\$y = $y <br>" ;
        if($x<$y){
            echo "ตัวแปล x น้อยกว่าค่าในตัวแปล y";
        }
        else{
            echo "ตัวแปล y น้อยกว่าค่าในตัวแปล x";
        }
        echo "----------------------------";
    ?>
</body>
</html>