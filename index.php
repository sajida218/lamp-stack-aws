<!DOCTYPE html>
<html>
<head>
    <title>LAMP Stack on AWS</title>
</head>
<body>

<h1>LAMP Stack Installed Successfully!</h1>

<p>Apache is running.</p>
<p>MySQL is installed.</p>
<p>PHP is working.</p>

<h2>Server Information</h2>

<ul>
    <li>Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>PHP Version: <?php echo phpversion(); ?></li>
    <li>Date: <?php echo date("d-m-Y H:i:s"); ?></li>
</ul>

</body>
</html>