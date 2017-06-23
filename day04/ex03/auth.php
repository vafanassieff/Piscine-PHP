<?php

function auth($login, $passwd)
{
	$file = '../private/passwd';
	$data = file_get_contents($file);
	$array = (array)unserialize($data);
	$hash = hash("whirlpool", $passwd);
	if ($array != NULL)
	{
		foreach ($array as $account)
		{
        	if ($account["login"] === $login && $account["passwd"] === $hash)
			{
            	 return (TRUE);
        	}
    	}
	}
	return (FALSE);
}
?>