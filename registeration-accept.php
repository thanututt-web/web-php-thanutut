<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลใบสมัคร</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 30px;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .info {
            margin-bottom: 12px;
            padding: 10px 12px;
            background: #f9f9f9;
            border-radius: 6px;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 180px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ข้อมูลที่ได้รับจากใบสมัคร</h2>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = htmlspecialchars($_POST['fullname'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $phone = htmlspecialchars($_POST['phone'] ?? '');
            $password = htmlspecialchars($_POST['password'] ?? '');
            $salary = htmlspecialchars($_POST['salary'] ?? '');
            $start_date = htmlspecialchars($_POST['start_date'] ?? '');
            $gender = htmlspecialchars($_POST['gender'] ?? '');
            $position = htmlspecialchars($_POST['position'] ?? '');
            $description = htmlspecialchars($_POST['description'] ?? '');
            $skills = $_POST['skills'] ?? [];
            $skillText = !empty($skills) ? implode(', ', array_map('htmlspecialchars', $skills)) : 'ไม่มีข้อมูล';

            echo "<div class='info'><span class='label'>ชื่อ-นามสกุล:</span> $fullname</div>";
            echo "<div class='info'><span class='label'>อีเมล:</span> $email</div>";
            echo "<div class='info'><span class='label'>เบอร์โทรศัพท์:</span> $phone</div>";
            echo "<div class='info'><span class='label'>รหัสผ่าน:</span> $password</div>";
            echo "<div class='info'><span class='label'>เงินเดือนที่คาดหวัง:</span> $salary</div>";
            echo "<div class='info'><span class='label'>วันที่เริ่มงานได้:</span> $start_date</div>";
            echo "<div class='info'><span class='label'>เพศ:</span> $gender</div>";
            echo "<div class='info'><span class='label'>ตำแหน่งที่สนใจ:</span> $position</div>";
            echo "<div class='info'><span class='label'>ทักษะความสามารถ:</span> $skillText</div>";
            echo "<div class='info'><span class='label'>แนะนำตัวเพิ่มเติม:</span> $description</div>";
        } else {
            echo "<p>ไม่พบข้อมูลการส่งฟอร์ม</p>";
        }
        ?>

        <a href="registeration-form.php">กลับไปหน้าฟอร์ม</a>
    </div>
</body>
</html>
