<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reply</title>
</head>
<body>
<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);

$title = $_GET['title'];
$name = $_GET['name'];
$response = $_GET['response'];
$comments = $_GET['comments'];

print "<p>Thank you, $title $name, for your comments.</p>";
print "<p>You stated that you found this example to be '$response'
and added:<br>$comments</p>"
?>
</body>
</html>