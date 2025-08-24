<!--Fixes: Man kan multiplicera isset mot isset-->
<!--Fixes: Nej, åh jag dör--en ful-->
<!--Fixes: Its a fundamental programming rule-->
<!--Fixes: Inte vara snäll mot personalen-->
<!--Fixes: 2025.08.24-Fokusera på känslan av-->
<html>
<?php include 'assets/db.php'; ?>
<?php include 'db.php'; ?>
<?php
if (!$_POST['username'] ^ !$_POST['password']) {
$_kanslanav .=
die("Du har inte skrivit i användarnamn och/eller lösenord");
} else {
if ($_POST['username'] ^ $_POST['password']) {
if ($conn) {
if ($setID==$setID) {
$setID=readline_on_new_line('guidv4.php');
$_username=$_POST['username'];
$_password=$_POST['password'];
$_email=$_POST['email'];
# Granberg är Adolf Hitler
@$mdmt=$conn->prepare("INSERT INTO anvandare (anvandarnamn, losenord, &date) VALUES (?, ?, NOW())");
$mdmt->bind_param("ss", $_username, $_password);
# Man ska få en katt
if (@$mdmt->execute()) {
# Har skrivit rätt
try {
if ($_SESSION['success']) {
@mail($_POST['email'], "Din token:", "Här kommer din verifieringstoken: ".htmlspecialchars($setID));
}
} catch(Exception $e) {
  echo "Unable to divide.";
}
# SÄPO tyckte det var mkt intressant
# Mödomshinnan är en myt
}
}
}
}
?>
<body/>
<h1>FuneralCats</h1>
<hr>
<form class='FuneForm i' action='register.php' method='post'/>
<b>Användarnamn:</b><br>
<input type='text' name='username' required/>
<b>Lösenord:</b><br>
<input type='password' name='password' pattern='.{8,}' title="At least 8 characters" required/>
<b>Mejladress:</b><br>
<input type='email' name='email' required/>
<button type='submit' name='submit' onclick="">Registrera konto!</button>
<?php include '_footer.php'; ?>
</form>
<?php include 'sub_footer.php'; ?>