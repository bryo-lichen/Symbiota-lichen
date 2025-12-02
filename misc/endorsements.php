<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/endorsements.' . $LANG_TAG . '.php'))
include_once($SERVER_ROOT . '/content/lang/templates/endorsements.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/endorsements.' . $LANG_TAG . '.php');
?>
<!DOCTYPE html>
<html lang="<?= $LANG_TAG ?>">
	<head>
		<title><?= $LANG['ENDORSEMENTS'] ?></title>
		<?php

		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php"><?= $LANG['HOME']; ?></a> &gt;&gt;
			<b><?= $LANG['ENDORSEMENTS']; ?></b>
		</div>
		<!-- This is inner text! -->
		<div role="main" id="innertext" style="margin-bottom:3rem">
			<h1 class="page-heading"><?= $LANG['ENDORSEMENTS']; ?></h1>

			<p></p>

			<p><?= $LANG['ENDORSING_ORGS']; ?></p>

		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>