<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบสมัครงาน</title>
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
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .radio-group {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .radio-group label {
            font-weight: normal;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .radio-group input {
            width: auto;
        }
        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(2, minmax(150px, 1fr));
            gap: 10px;
        }
        .checkbox-group label {
            font-weight: normal;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .checkbox-group input {
            width: auto;
        }
        .button-row {
            display: flex;
            gap: 15px;
        }
        .button-row button {
            cursor: pointer;
        }
        .submit-btn {
            background: #28a745;
            color: white;
            border: none;
        }
        .reset-btn {
            background: #dc3545;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ใบสมัครงาน</h2>
        <form action="registeration-accept.php" method="POST">
            <div class="form-group">
                <label for="fullname">ชื่อ-นามสกุล:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="email">อีเมล:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">เบอร์โทรศัพท์:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="password">รหัสผ่าน (สำหรับเข้าสู่ระบบ):</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="salary">เงินเดือนที่คาดหวัง:</label>
                <input type="number" id="salary" name="salary" min="0" required>
            </div>

            <div class="form-group">
                <label for="start_date">วันที่เริ่มงานได้:</label>
                <input type="date" id="start_date" name="start_date" required>
            </div>

            <div class="form-group">
                <label>เพศ:</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="ชาย" required> ชาย</label>
                    <label><input type="radio" name="gender" value="หญิง" required> หญิง</label>
                    <label><input type="radio" name="gender" value="อื่น ๆ" required> อื่น ๆ</label>
                </div>
            </div>

            <div class="form-group">
                <label for="position">ตำแหน่งที่สนใจ:</label>
                <select id="position" name="position" required>
                    <option value="">-- เลือกตำแหน่ง --</option>
                    <option value="โปรแกรมเมอร์">โปรแกรมเมอร์</option>
                    <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
                    <option value="การตลาด">การตลาด</option>
                </select>
            </div>

            <div class="form-group">
                <label>ทักษะความสามารถ:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="skills[]" value="PHP"> PHP</label>
                    <label><input type="checkbox" name="skills[]" value="HTML"> HTML</label>
                    <label><input type="checkbox" name="skills[]" value="CSS"> CSS</label>
                    <label><input type="checkbox" name="skills[]" value="SQL"> SQL</label>
                </div>
            </div>

            <div class="form-group">
                <label for="description">แนะนำตัวเพิ่มเติม:</label>
                <textarea id="description" name="description" rows="5" required></textarea>
            </div>

            <div class="button-row">
                <button type="submit" class="submit-btn">ส่งใบสมัคร</button>
                <button type="reset" class="reset-btn">ล้างข้อมูล</button>
            </div>
        </form>
    </div>
</body>
</html>
