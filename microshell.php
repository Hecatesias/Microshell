#!/usr/bin/env php
<?php
// microshell.php for microshell in /home/lagard_v/Projet_MicroShell
// 
// Made by Vanessa LAGARDETTE
// Login   <lagard_v@etna-alternance.net>
// 
// Started on  Fri Nov 22 13:35:06 2013 Vanessa LAGARDETTE
// Last update Sat Nov 23 17:40:02 2013 Vanessa LAGARDETTE
//

require_once('./include/affichage.php');
require_once('./include/commandes.php');
require_once('./include/commandes2.php');
require_once('./include/decoupage.php');

$fd = fopen('php://stdin', "r");
if ($fd !== false)
  {
    aff_prompt();
    while (($line = readline()) !== false)
      {
	$params = decoup_params($line);

	$ptr = 'func_'.$params[0];
	if (function_exists($ptr))
	  {
	    $ptr($params);
	  }
	aff_prompt();
      }
    fclose($fd);
  }
?>