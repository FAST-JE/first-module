<?php
$db = include '../database/start.php';

$post = $db->getOne('posts', $_GET['id']);
echo $post['title'];
