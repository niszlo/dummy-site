<?php
/*
Index file
*/
if(isset($_GET['l']) && $_GET['l'] == 'en') {
	$lang = 'en';
} else {
	$lang = 'fr';
}
include_once("db/connect.php");
include_once("inc/header.php");
?>
<title><?php echo $title; ?></title>
</head>
<body>
<div id="menu">
	<a href="index.php"><img src="images/fr.png" <?php if($lang=='fr') echo 'style="border: 1px solid white"';?>/></a>
	<a href="index.php?l=en"><img src="images/en.png" <?php if($lang=='en') echo 'style="border: 1px solid white"';?>/></a>
</div>
<center>
	<br/><br/>
	<h1><?php echo $h1; ?></h1>
	<p><?php echo $p1; ?></p>
	<br/><br/>
	<h1><?php echo $h2; ?></h1>
	<p><?php echo $p2; ?></p>
	<br/><br/>
	<h1><?php echo $h3; ?></h1>
	<p><?php echo $p3; ?></p>
	<br/><br/>
</center>
<?php
include_once("inc/footer.php");
?>
</body>
</html>