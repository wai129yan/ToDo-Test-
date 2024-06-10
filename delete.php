<?php
require 'config.php';

$pdoStatement = $pdo->prepare("Delete from todo where id=".$_GET['id']);
$pdoStatement->execute();

header("Location:index.php");
?>