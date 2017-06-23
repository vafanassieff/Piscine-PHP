<?PHP
function find_login_duplicate($login, $tab)
{
	foreach ($tab as $elem)
	{
		if ($elem['login'] === $login)
			return (TRUE);
	}
	return (FALSE);
}
if ($_POST['submit'] != "OK")
{
	echo "ERROR\n";
	return ;
}

if ($_POST['login'] == "" || $_POST['passwd'] == "")
{
	echo "ERROR\n";
	return ;
}
$user_info['login'] = $_POST['login'];
$user_info['passwd'] = hash('whirlpool', $_POST['passwd']);

$folder = "../private";
$file = "../private/passwd";
if (!file_exists($folder))
	mkdir($folder);
if (file_exists($file))
	$data = file_get_contents($file);
if (find_login_duplicate($user_info['login'], (array)unserialize($data)))
{
	echo "ERROR\n";
	return ;
}
if ($data)
	$data = unserialize($data);
$data[] = $user_info;
$data = serialize($data);
file_put_contents($file, $data);
echo "OK\n";
?>