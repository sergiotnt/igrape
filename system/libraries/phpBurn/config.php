<?php
/**
 * This file has been designed to auto-config all your
 * path variables like path, url and others automaticaly
 * for this it have to stay the same folder as your index.php
 * 
 * If you want to put it in another place you should to config manualy
 * or modify our auto-generate code.
 * 
 * @author Kléderson Bueno <klederson@klederson.com>
 * @version 1.0
 */
/**
 * iGrape Framework
 *
 * @category	iGrape
 * @author		iGrape Dev Team
 * @copyright	Copyright (c) 2007-2010 iGrape Framework. (http://www.igrape.org)
 * @license		LICENSE New BSD License
 * @version		0.2.2
 *
 */
@ob_start();
@session_start();

################################
# System Settings
################################
require_once('sysConfig.php');


################################
# Error and Message System
################################
error_reporting(E_ALL & ~E_NOTICE);

//Turn the Messages and Logs and Erros ON
//PhpBURN_Message::setMode(PhpBURN_Message::FIREBUG); //You can Choose FIREPHP, BROWSER OR FILE for now than more can came latter


################################
# Internacionalization Settings
################################
setlocale(LC_ALL, 'en_US');
date_default_timezone_set('America/Sao_Paulo');


################################
# Modules
################################
# To load the module just remove the # comment from the line

# Views
//PhpBURN::loadModule('View');

# Controller
//PhpBURN::loadModule('Controller');

# To load the module just remove the # comment from the line
PhpBURN::loadModule('Model');
?>
