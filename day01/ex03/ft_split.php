<?PHP
function ft_split($str)
{
    $ret = explode(" ", $str);
    $ret = array_diff($ret, array(''));
    asort($ret);
    return $ret;
}
?>