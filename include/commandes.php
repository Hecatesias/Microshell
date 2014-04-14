<?php
// commandes.php for microshell in /home/lagard_v/Projet_MicroShell/include
// 
// Made by Vanessa LAGARDETTE
// Login   <lagard_v@etna-alternance.net>
// 
// Started on  Fri Nov 22 13:46:01 2013 Vanessa LAGARDETTE
// Last update Sat Nov 23 19:49:06 2013 Vanessa LAGARDETTE
//

function func_exit($params)
{
  exit;
}

function func_echo($params)
{
  $j = 1;
  while ($params[$j])
    {
      $j++;
    }
  for ($i = 1; isset($params[$i]); $i++)
    {
      aff_terminal($params[$i]);
      if ($i < ($j - 1))
	echo " ";
    }
  echo "\n";
}

function func_pwd($params)
{
  aff_terminal(getcwd()."\n");
}

function func_cd($params)
{
  chdir($params[1]);
}

?>