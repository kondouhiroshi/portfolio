<link rel="stylesheet" href="./css/style.css">

<?php include(dirname(__file__).'/header.php');?>


<div>
    <h2 class="check">お問い合わせ内容確認</h2>
<div class="check_content">
    <ul>
    <li>お名前<a><?php echo $_POST["name"] ?></a><li>
    <li>希望席<a><?php echo $_POST["seat"] ?></a><li>
    <li>メールアドレス<a id="mail"><?php echo $_POST["e-mail"] ?></a><li>
    <li>電話番号<a><?php echo $_POST["tel"] ?></a><li>
    </ul>
</div>
<form class="for_thanks" method="post">
    <input type="hidden" name="name" value="<?=$_POST["name"] ?>">
    <input type="hidden" name="seat" value="<?=$_POST["seat"] ?>">
    <input type="hidden" name="e-mail" value="<?=$_POST["e-mail"] ?>">
    <input type="hidden" name="tel" value="<?=$_POST["tel"] ?>">
    <div class="reserve_bottons">
    <button class="reserve_botton" id="back" type=submit formaction="./index.php#contact" >戻る</button>
    <button class="reserve_botton" id="reserve" type=submit formaction="./thanks.php" >送信</button>
</div>

</form>

</div>
<?php include(dirname(__file__).'/footer.php');?>

