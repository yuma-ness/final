<?php require 'db-connect.php'; ?>
<div id="back">
    <h1>購入通貨一覧</h1>
</div>
<?php
$pdo = new PDO($connect,USER,PASS);

$sql = $pdo->query('select * from tuuka ');//一覧


?>