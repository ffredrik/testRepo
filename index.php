<?php
require_once('functions.php');
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<h1>Git rocks!</h1>
<?php
hello();
echo phpinfo();
?>
	<form>
		<label for="name">Name</label>
		<input type="text" name="name" value="Your name here" />
	</form>
</body>
</html>
