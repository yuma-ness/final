<?php require 'db-connect.php'; ?>

<a href="index.php">トップページへ</a>
<?php
$pdo = new PDO($connect,USER,PASS);

$t=$_POST['t'];
$m=$_POST['m'];


$sql = $pdo->prepare('insert into tuuka(name,count) values(?,?)');
$sql->execute([$t,$m]);

echo '<br>';
echo '通貨名',$t,'：',$m,'枚','が追加されました';
?>