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
        echo "<h2?>คำสั่ง if   <br></h2>";
        $x = 5 ;
        $y = 8 ;
        echo "\$x = $x <br>" ;
        echo "\$y = $y <br>" ;
        if($x<$y){
            echo "ตัวแปล x น้อยกว่าค่าในตัวแปล y <br>";
        }
        else{
            echo "ตัวแปล y น้อยกว่าค่าในตัวแปล x <br>";
        }
        echo "----------------------------<br>";

        echo "<h2> short hand if </h2>";
        $score = 45 ;
        if ($score >= 50) echo "ขอแสดงความยินดีคุณสอบผ่าน";
        else echo"เสียใจด้วย";
        echo "<br>";
        $result = $score >= 50 ? "ได้เกรด P": "ได้เกรด F ";
        echo "<br>";
        echo "<ผลการเรียนของคุณ".$result;
        echo"<br>";
        echo"------------------------------ <br>"; 
        echo "<h2> Switch case </h2>"; 
        echo "<br>";
        $pet = 'Cat';
        switch ($pet) {
            case 'Cat': echo "คุณชอบนอนเหมือนแมว<br>";
                break;
            case 'Dog': echo "คุณกลิ้งเหมือนสุนัข<br>";
                break;
            case 'Bird': echo "คุณบินเหมือนนก<br>";
                break;
            default:echo"คุณเป็นมนุษย์ หมาป่าเดียวดาย ";
                break;
        }
        ?>
</body>
</html>