<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP with HTML Example</title>
</head>
<body>
<?php
$heading = "Welcome to My Website";
$boldText = "This text is bold.";
$italicText = "This text is italic.";
?>
<h1><?php echo $heading; ?></h1>
<p><strong><?php echo $boldText; ?></strong></p>
<p><em><?php echo $italicText; ?></em></p>
</body>
</html>