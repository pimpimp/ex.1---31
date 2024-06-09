<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container"> 
            <h1>PHP & MariaDB</h1>
            <h1 style="color: blue;">สิ่งที่ต้องติดตั้ง</h1>
        <ul>
            <h3><li>Apache</li></h3>
            <h3><li>PHP</li></h3>
            <h3><li>MariaDB</li></h3>
        </ul>

        <h2>ให้นักเรียนค้นหาผลลัพธ์ของตัวแปร</h2>
        <p>ค้นหา: (ชื่อตัวแปร: $a) ผลลัพท์ลำดับที่ (ชื่อตัวแปร: $b) - (ชื่อตัวแปร: $c) จากทั้งหมด (ชื่อตัวแปร: $d)</p>
        <div class="row" style="padding-top: 20px;">
                <?php
                    $a = "php MariaDB"
                    $b = 1;
                    $c = 10;
                    $t = 1000;

                    echo "<h2 style='margin-bottom: -15px;'>ผลลัพธ์ที่ได้</h2><br>";
                    echo "ค้นหา $a ผลลัพท์ลำดับที่ $b - $c จากทั้งหมด $d"
                    ?>
        </div>
    </div>
</body>
</html>