<?PHP
function ft_is_sort($tab)
{
    $tmp = $tab;
    sort($tmp);
    if ($tmp == $tab)
        return TRUE;
    return FALSE;
}
?>