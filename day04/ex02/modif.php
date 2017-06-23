<?php
    function check_new_mdp($login, $passwd, $newwp, $data, $file)
	{
		$i = 0;
        foreach ($data as &$account)
		{
            if ($account["login"] === $login && $account["passwd"] === $passwd)
			{
                $account["passwd"] = $newwp;
                $data = serialize($data);
                file_put_contents($file, $data);
                echo "OK\n";
                return (TRUE);
            }
        }
        return (FALSE);
    }
    if ($_POST["login"] != "" && $_POST["oldpw"] != "" && $_POST["newpw"] != "")
	{
		if ($_POST["submit"] != "OK")
		{
			echo "ERROR\n";
			return (FALSE);
		}
		$login = $_POST["login"];
		$oldpw = hash("whirlpool", $_POST["oldpw"]);
        $newpw = hash("whirlpool", $_POST["newpw"]);
        $file = '../private/passwd';
		$data = file_get_contents($file);
        if (!check_new_mdp($login, $oldpw, $newpw, (array)unserialize($data), $file)) {
			echo "ERROR\n";
			return (FALSE);
		}
	}
	else
		echo "ERROR\n";
?>