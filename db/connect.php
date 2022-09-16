<?php
/*
Mysql(i) connect & init
*/
$srv = 'localhost';
$usr = 'root';
$pas = '';
$mysqli = @mysqli_connect($srv, $usr, $pas);
if (mysqli_connect_errno()) {
  echo "Failed to connect to DB: " . mysqli_connect_error();
  exit();
}

$dbr = $mysqli->query("SHOW DATABASES");
$dbc = false;
while ($row = $dbr->fetch_assoc()) {
    if($row['Database'] == 'dummy') {
		$dbc = true;
	}
}
$dbr->close();
if(!$dbc) {
	$cdd = $mysqli->query("CREATE DATABASE dummy");
}
$sdd = $mysqli->select_db("dummy");
$tbq = "SELECT `id` FROM `multilang` WHERE `element` = 'foot'";
$tbr = $mysqli->query($tbq, MYSQLI_ASSOC);
if($tbr) $tbr->fetch_object();
if (!isset($tbv->id) || $tbv->id != 9) {
	$mysqli->query("CREATE TABLE IF NOT EXISTS `multilang` (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `element` VARCHAR(255), `fr` VARCHAR(255), `en` VARCHAR(255))");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'description', 'Ceci est mon site dummy de test', 'This is my dummy test website')");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'keywords', 'site, dummy, test', 'webiste, dummy, test')");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'title', 'Mon site dummy de test', 'My test dummy website')");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'h1', 'Pr&eacute;sentation', 'Introduction')");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'p1', 'Cette page est un simple &eacute;l&eacute;ment de test en deux langues pour les divers besoins d\'exercises.', 'This page is a simple test element in two languages for various exercising needs.')");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'h2', 'Explication', 'Explanation')");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'p2', 'Le contenu que vous trouverez ici n\'est donc pas r&eacute;el, il ne sert que pour tester des affichages.', 'The content you find here is therefore not real, its only use is for display testings.')");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'h3', 'Conclusion', 'Conclusion')");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'p3', 'Nous esp&eacute;rons vous revoir bient&ocirc;t sur ce site, en vous souhaitant une excellente journ&eacute;e.', 'We hope to see you again on our website, wishing you the best possible day.')");
	$mysqli->query("INSERT INTO `multilang` (`id`, `element`, `fr`, `en`) VALUES ('', 'foot', 'Contactez-nous', 'Contact us')");
}
if($tbr) $tbr->close();

$els = array('description', 'keywords', 'title', 'h1', 'p1', 'h2', 'p2', 'h3', 'p3', 'foot');
foreach($els as $ele) {
	$elq = "SELECT `".$lang."` FROM `multilang` WHERE `element` = '".$ele."'";
	$elr = $mysqli->query($elq, MYSQLI_ASSOC);
	if($elr) $elv = $elr->fetch_object();
	if($elv) $$ele = $elv->$lang;
	if($elr) $elr->close();
}

?>