
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
    <p><strong>ชื่อ: นางสาว สุจรรย์จิรา วงค์สกูล </strong> <?= $name ?></p>
    <p><strong>มหาวิทยาลัย: ราชภัฎอุดรธานี</strong> <?= $university ?></p>
    <p><strong>คณะ: วิทยาศาสตร์</strong> <?= $faculty ?></p>
    <p><strong>สาขา: เทคโนโลยีสารสนเทศ</strong> <?= $major ?></p>
    <p><strong>แนะนำตัว: ตอนนี้สนใจสนใจด้านการออกแบบ หน้าเพจ,แอป  ภาษาต่างประเทศ 
    <p><strong>เป้าหมายในอนาคต อยากทำงานเกี่ยวกับการค่าเฉลี่ยนความสนใจของคนในช่วงนั้นว่าสนใจอะไรเป็นพิเศษไหม , การออกแบบไม่ว่าจะเป็นเว็บ,แอป ,คอนเทนต่างๆ
        
    </strong> <?= $info ?></p>
</div>

</body>
</html>
