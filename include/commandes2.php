<?php
// commandes2.php for microshell in /home/lagard_v/Projet_MicroShell/include
// 
// Made by Vanessa LAGARDETTE
// Login   <lagard_v@etna-alternance.net>
// 
// Started on  Sat Nov 23 17:39:03 2013 Vanessa LAGARDETTE
// Last update Sat Nov 23 17:42:23 2013 Vanessa LAGARDETTE
//

function func_cat($params)
{
  if (!file_exists($params[1]))
    echo "cat.php: $params[1]: No such file or directory\n";
  else if (is_dir($params[1]))
    echo "cat.php: $params[1]: Is a directory\n";
  else if (!is_readable($params[1]))
    echo"cat.php: $params[1]: Permission denied\n";
  else if (!fopen($params[1], "r"))
    echo"cat.php: $params[1]: Cannot open file\n";
  else
    {
      $handle = fopen($params[1], "r");
      echo fread($handle, filesize($params[1]));
      fclose($handle);
    }
}
function func_env($params)
{
  foreach ($_ENV as $key => $value)
    echo $key."=".$value."\n";
}

function func_setenv($params)
{
  if (isset($params[1])&& isset($params[2]))
    $_ENV[$params[1]] = $params[2];
  else
    echo "setenv: Invalid arguments\n";
}

function func_unsetenv($params)
{
  if (isset($params[1]))
    unset($_ENV[$params[1]]);
else
  echo "unsetenv: Invalid arguments";
}

?>