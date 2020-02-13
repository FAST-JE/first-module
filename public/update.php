<?php
$db = include '../database/start.php';

$db->update('posts', [
    'title' => $_POST['title']
], $_POST['id']);

header('Location: /');