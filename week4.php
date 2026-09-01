<?php
$num = 2;
$limit = 12;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = isset($_POST['number']) ? (int)$_POST['number'] : 2;
    $limit = isset($_POST['limit']) ? (int)$_POST['limit'] : 12;
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background: #f4f7fb;
            margin: 0;
            padding: 40px 20px;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 14px rgba(0,0,0,0.08);
        }
        h1 {
            text-align: center;
            color: #1f3c88;
        }
        form {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            margin-bottom: 25px;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input {
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }
        button {
            background: #1f3c88;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }
        .result {
            margin-top: 20px;
            padding: 20px;
            background: #eef5ff;
            border-radius: 10px;
        }
        .table {
            display: grid;
            grid-template-columns: repeat(2, minmax(120px, 1fr));
            gap: 10px;
            margin-top: 10px;
        }
        .item {
            background: #fff;
            border: 1px solid #d5e1f5;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>สูตรคูณ</h1>

        <form method="POST" action="">
            <label for="number">ตัวเลข:</label>
            <input type="number" id="number" name="number" value="<?php echo $num; ?>" min="1" required>

            <label for="limit">ถึงค่า:</label>
            <input type="number" id="limit" name="limit" value="<?php echo $limit; ?>" min="1" max="50" required>

            <button type="submit">แสดงสูตรคูณ</button>
        </form>

        <div class="result">
            <h2>ตารางสูตรคูณของ <?php echo $num; ?></h2>
            <div class="table">
                <?php
                for ($i = 1; $i <= $limit; $i++) {
                    echo '<div class="item">' . $num . ' x ' . $i . ' = ' . ($num * $i) . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
