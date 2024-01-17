<?php require 'db-connect.php'; ?>

<a href="index.php">トップページへ</a>
<?php
$pdo = new PDO($connect,USER,PASS);

$t=$_POST['t'];
$m=$_POST['m'];
$s=$_POST['s'];


$sql = $pdo->prepare('insert into tuuka(name,count,KID) values(?,?,?)');
$sql->execute([$t,$m,$s]);

echo '<br>';
echo '通貨名',$t,'：',$m,'枚：',$s,'が追加されました';
?>