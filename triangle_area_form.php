<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle area From</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            box-sizing: border-box;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        h3 {
            font-size: 20px;
            color: #555;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            text-align: left;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: red;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px; 
            cursor: pointer;
            font-size: 16px;
            width: 48%;
            margin-top: 10px;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
</head>
<body>
    <div class="container">
        <h2>โปรแกรมคำนวณพื้นที่รูปสามเหลี่ยม</h2>
        <h3>กรุณากรอกข้อมูล</h3>
        <form action="triangle_area.php" method="POST">
            <label for="height">ความสูง</label>
            <input type="text" id="height" name="height" placeholder="กรอกความสูง" required>
            
            <label for="width">ความยาวฐาน</label>
            <input type="text" id="width" name="width" placeholder="กรอกความยาวฐาน" required>
            
            <input type="submit" value="คำนวณ">
            <input type="reset" value="ล้างข้อมูล">
        </form>
    </div>
</body>
</html>
</html>