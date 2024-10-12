<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="common.css" />
    <title>トップページ</title>
</head>
<body>

<?php
    $lv=@$_GET['lv'];
    $elv=@$_GET['elv'];
    $hp=@$_GET['hp'];
    $ehp=@$_GET['ehp'];
    $act=@$_GET['act'];
    $effect;
    if($act==1){$effect=@$_GET['act1effect'];}
    else if($act==2){$effect=@$_GET['act2effect'];}
    else{$effect=@$_GET['act3effect'];}
?>

<h1>Webアプリケーション構築実験</h1>
</body>
</html>