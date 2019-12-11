<?php

require_once('controller/pdo/connect.php');

$sql = <<<TAG
SELECT * FROM pokemon p
INNER JOIN user u ON u.id = p.user_id
INNER JOIN type t ON t.id = p.type_id
INNER JOIN type t2 ON t2.id = p.type2_id
WHERE u.id = :user
TAG;
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'user' => $_SESSION['user']['id'],
]);

$pokemons = $stmt->fetchAll(PDO::FETCH_NAMED);
