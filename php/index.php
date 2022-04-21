<!DOCTYPE html>
<html lang="en-GB">

<head>
	<title> Redirection soon!</title>
	<meta http-equiv="refresh" content="10; URL=https://TEST.system-user.repl.co/ResearchResources.php">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
	<div id="runningTime"></div>
	<script>
		$(document).ready(function() {
 		setInterval(runningTime, 1000);
		});
		function runningTime() {
  	$.ajax({
    url: 'time.php',
    success: function(data) {
       $('#runningTime').html(data);
     },
  });
}
</script>	
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

	<p>If you are not redirected in five seconds, <a href="https://TEST.system-user.repl.co/ResearchResources.php">Click here!!</a>.</p>
</body>
</html>
