<?php
// commandes3.php for microshell in /home/lagard_v/Projet_MicroShell/include
// 
// Made by Vanessa LAGARDETTE
// Login   <lagard_v@etna-alternance.net>
// 
// Started on  Sat Nov 23 18:07:04 2013 Vanessa LAGARDETTE
// Last update Sat Nov 23 19:38:05 2013 Vanessa LAGARDETTE
//

function func_ls($params)
{
  if (($params[1] = opendir('.')) !== false)
    {
      while (($entry = readdir($params[1])) !== false)
        {
          if ($entry[0] != '.')
            {
              echo "$entry\n";
            }
        }
    }
  closedir($params[1]);
}

?>