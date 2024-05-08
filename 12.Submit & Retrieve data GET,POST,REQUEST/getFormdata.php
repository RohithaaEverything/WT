<html>
<body>
<h1>PHP Submission page</h1>
<?php
$name = $_GET["name"];
$phone = $_GET["phone"];
$email = $_GET["email"];
$address = $_GET["address"];
echo nl2br("Name:$name\nPhone:$phone\nEmail:$email\nAddress:$address");
?>
</body>
</html> 