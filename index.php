<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello!</h1>
<?php
    $dat = date("d.m.y");
    echo "$dat";
?>
<br>
<?php 
    $dat_cur = date("h.i.s");
    echo "$dat_cur";
?>
<br>
<?php 
    for ($i = 1; $i <= 5; $i++) {
        echo ($i * $i * $i);
    }
?>
    
</body>
</html>