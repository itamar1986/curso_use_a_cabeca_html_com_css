<?php
if ($_POST) {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
?>

<!DOCTYPE html>
<html> 
<head> 
<meta name="robots" content="noindex,  nofollow">
<meta charset="utf-8">
<title>Head First HTML e CSS Capítulo 14 contest</title> 
<style type="text/css">
img {
	float: left;
	margin-right: 20px;
}
div {
	padding-top: 40px;
}
</style>
</head>
<body>

<p>
<img src="http://headfirstlabs.com/Images/hfguy.jpg" alt="Head First Guy">
</p>

<div>
<p>
Obrigado, <strong><?php print($firstname); print(" "); print($lastname); ?></strong>,
para entrar no Head First HTML e CSS Capítulo 14 contest.
</p>
<p>
Se você ganhar alguma coisa, será o primeiro a saber.
</p>
</div>


</body> 
</html>


<?php

}

?>
