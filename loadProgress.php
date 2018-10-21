<?php
$session = $_GET["session"];
$file = 'submissions/'.$session.'.json';
$json = file_get_contents($file);
$_SESSION["petApplication"] = json_decode($json);

header('Location: index_5.html');