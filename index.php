<?php
if (file_exists("config/config.php")) {require_once ("config/config.php");} else { die("Can't read config file");}

if($ENGINE_debug) ini_set('display_errors', 1);
require_once ("styles/".$ENGINE_style."/header.php");
require_once ("styles/".$ENGINE_style."/grid.php");
require_once ("styles/".$ENGINE_style."/footer.php");