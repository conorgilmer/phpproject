<?php

/*
 * This constant is declared in index.php
* It prevents this file being called directly
*/
defined('MY_APP') or die('Restricted access');

/*
 * Declare a number of constants that you can change depending on your application
 */
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","dsa");

/*
 * Declare a number of constants that you can change depending on your application
*/

define("VERSION_NUMBER","1.0");

define("COMPANY_NAME","Digital Hub");

define("APPLICATION_NAME","WebElevate Cinema");

define("UPLOAD_PATH",  realpath(dirname(__FILE__)) . "\\..\\uploads\\");