<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
?>
خوش آمدی <?php echo $_SESSION["name"]; ?>
<br>
برای خارج شدن اینجا  <a href="logout.php" tite="Logout">کلیک کن
<?php
}else echo "<h1>ابتدا وارد شوید</h1>";
?>
</body>
</html>