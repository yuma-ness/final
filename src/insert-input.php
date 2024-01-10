
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/favorite.css?v=1.0.0">
    <title>Document</title>
</head>
<body>
<div id="div">
<a href="index.php">トップページへ</a>
</div>
<form action="insert-output.php" method="post">
<p class="main-a">  通貨名：　　　<input type="text" name="t"><br></p>
    <p class="main-a">_____________________________________</p>
    <p class="main-a">枚数：　　　<input type="number" min="0.1" step="0.1" name="m"><br></p>
    <p class="main-a">_____________________________________</p>

    <?php require 'db-connect.php'; ?>
    種類：<select name="s">
<?php
$pdo=new PDO($connect, USER, PASS);
$sql=$pdo->query('select * from kate ');//プルだううん
foreach ($sql as $row) {
echo '<option value="', $row['KID'], '">',$row['K.name'],'</option>';
        }
?>
</select>
<p class="main-a">_____________________________________</p>
    
    <a href="insert-output.php"><button>追加</button></a>
</form>

</body>
</head>
