<?PHP

session_start();
if (isset($_GET['submit']))
{
	if ($_GET['submit'] == "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
}
?>

<html><body>
<form action ="index.php" method="get">
	Identifiant: <input type ="text" placeholder="Login" name="login" value="<?PHP echo $_SESSION['login']; ?>"/>
	<br />
	Mot de Passe: <input type ="passwd" placeholder="Password" name="passwd" value="<?PHP echo $_SESSION['passwd']; ?>"/>
	<input type ="submit" name="submit" value="OK">
</form>
</body></html>
