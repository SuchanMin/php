<?php
    $university = "ราชภัฎอุดรธานี";
    $faculty = "คณะวิทยาศาสตร์";
    $major = "สาขาเทคโนโลยีสารสนเทศ";

    $name = "น.ส. สุจรรย์จิรา  วงค์สกูล";
    $info = "ชอบการออกแบบ UX/UI, ชอบการค้นหาข้อมูลเกี่ยวกับความสนใจในปัจจุบัน  ";
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title> Profile</title>

<!-- ฟอนต์หวานๆ -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">

<style>
    body {
        font-family: "Kanit", sans-serif;
        background: linear-gradient(135deg, #ffdde1, #ee9ca7);
        margin: 0;
        padding: 0;
    }
    
    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 50px;
        padding-bottom: 40px;
    }

    .card {
        background: rgba(255, 255, 255, 0.95);
        width: 430px;
        padding: 35px;
        border-radius: 25px;
        box-shadow: 0 15px 35px rgba(255, 140, 180, 0.4);
        animation: fadeIn 0.8s ease;
        border: 3px solid #ffd6e8;
        backdrop-filter: blur(6px);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(25px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .title {
        text-align: center;
        font-size: 30px;
        font-weight: 600;
        color: #d94f8c;
        margin-bottom: 25px;
        text-shadow: 0 1px 3px rgba(0,0,0,0.15);
    }

    .profile-img {
        width: 130px;
        height: 130px;
        background: #ffe6f0;
        border-radius: 50%;
        margin: auto;
        margin-bottom: 22px;
        display: block;
        border: 5px solid #ffbcd4;
        box-shadow: 0 0 12px rgba(255, 143, 178, 0.4);
    }

    .info-box {
        background: #fff0f6;
        padding: 14px 18px;
        border-radius: 14px;
        margin: 10px 0;
        font-size: 17px;
        color: #8a3d68;
        box-shadow: inset 0 0 6px rgba(255, 150, 180, 0.2);
        border: 2px solid #ffd1e6;
        transition: 0.25s;
    }

    .info-box:hover {
        transform: scale(1.03);
        background: #ffe6ef;
    }

    .btn {
        display: block;
        width: 100%;
        text-align: center;
        padding: 14px;
        margin-top: 22px;
        background: #ff8fb1;
        color: white;
        border-radius: 16px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.25s;
        font-size: 18px;
        box-shadow: 0 4px 10px rgba(255, 100, 150, 0.4);
    }

    .btn:hover {
        background: #ff6d97;
        transform: scale(1.05);
    }

</style>
</head>

<body>

<div class="container">
    <div class="card">

        <div class="title"> Profile </div>

        <img class="profile-img" src="pic/โปรไฟแนะนำ.jpg">

        <div class="info-box"><strong>ชื่อ:</strong> <?= $name ?></div>
        <div class="info-box"><strong>มหาวิทยาลัย:</strong> <?= $university ?></div>
        <div class="info-box"><strong>คณะ:</strong> <?= $faculty ?></div>
        <div class="info-box"><strong>สาขา:</strong> <?= $major ?></div>
        <div class="info-box"><strong>แนะนำตัว:</strong> <?= $info ?></div>


        <a class="btn" href="index.hw01.2.php"> งานลูป </a>

    </div>
</div>

</body>
</html>
