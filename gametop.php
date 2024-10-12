<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="tanaka.css" />
    <title>ゲームトップ</title>
</head>
<body>
php----------------
<?php
if(isset($_GET['lv'])){
  $lv=$_GET['lv'];
}else{
  $lv=5;
}
?>
----------------php
<h3>RPGbattle_tytle</h3>

挑戦する難易度を選択してください。
<form action="cardChoice.php" method="get" />
    <input type="radio" name="elv" value="3">←
    <input type="button" class="btn" id="easy_btn" value="よわい"  />弱いスライムと戦います。<br>

    <input type="radio" name="elv" value="6" checked>←
    <input type="button" class="btn" id="normal_btn" value="ふつう"  />普通なスライムと戦います。<br>

    <input type="radio" name="elv" value="12">←
    <input type="button" class="btn" id="hard_btn" value="つよい"  />ボススライムと戦います。<br>

    <br>
    <input type="submit" value="GO!">

    <input type="hidden" value=<?php echo $lv; ?>  name="lv">
    


</form>





</body>
</html>