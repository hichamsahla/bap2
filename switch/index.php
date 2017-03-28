<?php
$fruit = isset($_POST['fruit']) ? $_POST['fruit'] : null;
switch ($fruit) {

	case 'apple':
		echo "fruit is apple <img src='images/appel.jpg' alt='fruit'>";
		break;

	case 'pear':
		echo "fruit is pear <img src='images/peer.jpg' alt='fruit'>";
		break;

	case 'orange':
		echo "fruit is orange <img src='images/sinaas.jpg' alt='fruit'>";
		break;

	default:
		echo "I don't know what fruit this is.";
		break;
}
?>
<style>
body {
	background-color: darkred;
	text-align: center ;
	font-size: 25px;
    padding: 100;
}
</style>
<div id="box">
<form action="" method="post">
<input type="text" name="fruit" style="height:25px;padding:5px;">
<input type="submit" value="Zoek fruit" style="height:25px;padding:5px;">
</form>
</div>