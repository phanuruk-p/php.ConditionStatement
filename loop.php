<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำสั่ง Loop ใน php </title>
</head>
<body>
    <h1>การใช้คำสั่งแบบวนรอบ Loop Statement</h1>
    <?php
        echo"<h2>while loop</h2>";
        echo "<br>";
        $x = 1;
        while ($x <= 5) {
            if($x==3) break;
            echo "รอบที่ $x <br>";
            $x++;
        }
        $i = 1;
        while ($i <= 40) {
            echo "-"; $i++;
        } echo "<br>";
        echo"<h2>do while loop</h2>";
        echo "<br>";
        $z = 1;
        do {
            echo "do..while รอบที่ $z <br>";
            $z++;
        }while($z <= 5);
        $c = 1;
        while ($c <= 40) {
            echo "-"; $c++;
        } echo "<br>";

        echo"<h2>for loop</h2>";
        echo "<br>";
        for ($i=1; $i<= 5; $i++) { 
            echo "รอบที่ $i <br>";
        }
        echo "-------------------------------------<br>";
        echo"<h2>for loop ซ้อนกัน </h2>";
        echo "<br>";
        for ($i=1; $i <=5 ; $i++){
            for ($j=1; $j <= $i; $j++) { 
                echo "*";
            }
            echo "<br>";
        }
        echo "-------------------------------------<br>";
        echo"<h2>foreach loop แบบปกติ </h2>";
        echo "<br>";
        $pet = array("แมว","สุนัข","นกแก้ว","ปลาทอง","หมูเด้ง");
        foreach ($pet as $value) {
            echo "ฉันชอบ$value<br>";
        }
        echo "-------------------------------------<br>";
        echo"<h2>foreach loop แบบ key=>value </h2>";
        echo "<br>";
        $food = array("หมวย"=>"ส้มตำ", "บูม"=>"หมูย่าง","บีม"=>"ผัดกระเพรา","อาร์ต"=>"ข้าวมันไก่");
        foreach ($food as $student => $value) {
            echo"ชื่อ $student ชอบกิน $value <br>";
        }


    ?>
</body>
</html>