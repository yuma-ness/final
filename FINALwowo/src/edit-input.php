<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>リストedit</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
    <h1>商品編集画面</h1>
    <?php require 'db-connect.php'; ?>

<?php
    $pdo=new PDO($connect, USER, PASS);
	$sql=$pdo->prepare('select * from tuuka where ID=?');
	$sql->execute([$_POST['id']]);

	foreach ($sql as $row) {
        echo '<tr>';
		echo '<form action="edit-output.php" method="post">';
        echo '<td> ';
		
		echo '<div>';
		echo '<td>';
		echo ' <input type="hidden" name="i" value="', $row['ID'], '">','<br>';
		echo '</td> ';
		echo '通貨名','<input type="text" name="n" value="', $row['name'], '">','<br>';
		echo '</td> ';
		echo '<td>';
		echo '枚数',' <input type="text" name="c" value="', $row['count'], '">','<br>';
		echo '</td> ';
		
		
		echo '</div> ';
		echo '<div>','<td><input type="submit" value="更新"></td>','</div>';
		echo '</form>';
        echo '</tr>';
		echo "\n";
	}
?>
</table>
<div><button id="button3" onclick="location.href='index.php'">トップへ戻る</button></div>
    </body>
</html>