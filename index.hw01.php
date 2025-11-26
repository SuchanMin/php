<?php
    
    $university = "มหาวิทยาลัยตัวอย่าง";
    $faculty = "คณะวิทยาศาสตร์และเทคโนโลยี";
    $major = "สาขาวิทยาการคอมพิวเตอร์";

    $name = "สุวรรณา";
    $info = "เป็นคนชอบเรียนรู้ด้านเขียนโปรแกรม เน้นพื้นฐาน และทำโปรเจกต์พัฒนาเว็บ";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ข้อมูลนักศึกษา</title>
    <style>
        body { 
            font-family: Arial; 
            background: #f0f0f0; 
            padding: 30px;
        }
        .card {
            background: white; 
            padding: 20px; 
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: auto;
        }
        h2 { color: #333; }
    </style>
</head>
<body>

<div class="card">
    <h2>ข้อมูลนักศึกษา</h2>
    <p><strong>ชื่อ:</strong> <?= $name ?></p>
    <p><strong>มหาวิทยาลัย:</strong> <?= $university ?></p>
    <p><strong>คณะ:</strong> <?= $faculty ?></p>
    <p><strong>สาขา:</strong> <?= $major ?></p>
    <p><strong>แนะนำตัว:</strong> <?= $info ?></p>
</div>

</body>
</html>
