<?php require 'db-connect.php'; ?>
<table border="1">
        <thead>
            <tr><th>ID</th><th>通貨名</th><th>枚数</th></tr>
        </thead>
<?php
    $pdo=new PDO($connect, USER, PASS);
    foreach ($pdo->query('select * from tuuka ') as $row) {
        echo '<tr>';
        echo '<td>', $row['ID'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '<td>', $row['count'], '</td>';

         echo '<td>';
         echo '<form action="edit-input.php" method="POST">';
         echo '<input type="hidden" name="id" value="',$row['ID'],'">';
         
        echo '<button type="submit" id="button2">編集</button>';
         echo '</form>';

        echo '</td>';
        echo '<td>';
        echo '<form action="delete-output.php" method="POST">';
        echo '<input type="hidden" name="id" value="',$row['ID'],'">';
        echo '<button type="submit">削除</button>';
        echo '</form>';

        echo '</td>';
        echo '</tr>';
        echo "\n";
    }
?>
<a href="index.php">トップページへ</a>