<!DOCTYPE html>
<html lang="en-GB">

<head>
	<title> Redirection soon!</title>
	<meta http-equiv="refresh" content="5; URL=https://TEST.system-user.repl.co/ResearchResources.php">
</head>

<body>
	Your IP Address is: <?php if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    echo $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    echo $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    echo $ip = $_SERVER['REMOTE_ADDR'];
}
?> 
	Current date and time is <? echo date("l jS \of F Y h:i:s A");?>.</p>
	<p>If you are not redirected in five seconds, <a href="https://TEST.system-user.repl.co/ResearchResources.php">Click here!!</a>.</p>
</body>
</html>
