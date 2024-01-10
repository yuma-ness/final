<?php require 'db-connect.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('delete from tuuka where ID=?');

    if($sql->execute([$_POST['id']])){
        echo '削除に成功しました。';
    }else {
        echo '削除に失敗しました。';
    }
    echo '<a href="index.php">トップページへ</a>';
?>