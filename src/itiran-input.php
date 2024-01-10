<?php require 'db-connect.php'; ?>
<div id="back">
    <h1>購入通貨一覧</h1>
</div>
<?php
$pdo = new PDO($connect,USER,PASS);

$sql = $pdo->query('select * from tuuka left join kate on tuuka.KID=kate.KID');//一覧

foreach($sql as $row){
    echo 'ID：',$row['ID'],'<br>';
    echo '通貨名：',$row['name'],'<br>';
    echo '枚数：',$row['count'],'枚','<br>';
    echo '種類：',$row['K.name'],'<br>';
}

?>
<a href="index.php">トップページへ</a>