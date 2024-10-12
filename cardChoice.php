<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="tanaka.css" />
    <title>ksort</title>
</head>
<body>

<?php
    //
    $hpConst=100;
    $lv=@$_GET['lv'];
    $elv=@$_GET['elv'];
    $Mhp=$lv*$hpConst;
    $eMhp=$elv*$hpConst;
    if(isset($_GET['hp'])){$hp=$_GET['hp'];}
    else{$hp=$Mhp;}
    if(isset($_GET['ehp'])){$hp=$_GET['ehp'];}
    else{$ehp=$eMhp;}

    //ここからアクションカードの効果決定
    $ssr=15;
    $sr=40;

    $act1rand=rand(0, 99)+1;//(0,n)で０からｎまで
    $act2rand=rand(0, 99)+1;
    $act3rand=rand(0, 99)+1;
    $act1effect;
    if($act1rand<=$ssr){$act1effect=450;}
    else if($act1rand<=($ssr+$sr)){$act1effect=180;}
    else {$act1effect=90;}

    $act2effect;
    if($act2rand<=$ssr){$act2effect=100;}
    else if($act2rand<=($ssr+$sr)){$act2effect=70;}
    else {$act2effect=40;}

    $act3effect;
    if($act3rand<=$ssr){$act3effect=375;}
    else if($act3rand<=($ssr+$sr)){$act3effect=150;}
    else {$act3effect=75;}
?>
あなた；レベル<?php echo $lv; ?>　、HP　<?php echo $hp; ?>／<?php echo $Mhp; ?><br>
あいて；レベル<?php echo $elv; ?>　、HP　<?php echo $ehp; ?>／<?php echo $eMhp; ?><br>

使うカードを選ぼう！
<form action="turnEnd.php" method="get" />
    <input type="radio" name="act" value="1">←
    <input type="button" class="btn" id="red_btn" value="こうげき"  />相手に<?php echo $act1effect; ?>ダメージ<br>

    <input type="radio" name="act" value="2">←
    <input type="button" class="btn" id="blue_btn" value="ぼうぎょ"  />このターンに受けるダメージを<?php echo $act2effect; ?>%カット<br>

    <input type="radio" name="act" value="3">←
    <input type="button" class="btn" id="green_btn" value="かいふく"  />自分のHPを<?php echo $act3effect; ?>回復<br>

    <input type="submit" value="GO!">

    <input type="hidden" value=<?php echo $act1effect; ?>  name="act1effect">
    <input type="hidden" value=<?php echo $act2effect; ?>  name="act2effect">
    <input type="hidden" value=<?php echo $act3effect; ?>  name="act3effect">
    <input type="hidden" value=<?php echo $lv; ?>  name="lv">
    <input type="hidden" value=<?php echo $elv; ?>  name="elv">
    <input type="hidden" value=<?php echo $hp; ?>  name="hp">
    <input type="hidden" value=<?php echo $ehp; ?>  name="ehp">
    

</form>


</body>
</html>