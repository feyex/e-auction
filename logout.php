<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Untitled Document</title>
</head>

<body>

<?php
//TO DESTROY THE SESSION

//stgat session
session_start();
session_destroy();
header("Location:index.html");
?>
</body>
</html>
