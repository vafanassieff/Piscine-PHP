#!/usr/bin/php
<?PHP

while(!feof(STDIN)) 
{
    echo "Entrez un nombre: ";
    $line = fgets(STDIN);
    if($line === FALSE) 
    {
      if(feof(STDIN)) 
      {
        break;
      }
      continue;
    }
    $line = rtrim($line);
    if (is_numeric($line))
    {
        $len = strlen($line);
        $digit= $line[$len - 1];
        if ($digit % 2 == 0)
            echo "Le chiffre $line est Pair\n";
        else
            echo "Le chiffre $line est Impair\n";
    }
    else
        echo "'$line' n'est pas un chiffre\n";

  }
?>