<?php

$value = "World";

try {
$db = new PDO('mysql:host=db;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');

$databaseTest = ($db->query('SELECT * FROM dockerSample'))->fetchAll(PDO::FETCH_OBJ);
} catch (Exception $e) {
    print $e->getMessage() . "\n";
}
print "OK\n";
?>

<html>
    <body>
        <h1>Hello, <?= $value ?>!</h1>

        <?php foreach($databaseTest as $row): ?>
            <p>Hello, <?= $row->name ?></p>
        <?php endforeach; ?>
    </body>
</html>
