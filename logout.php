<?php
/**
 * Created by PhpStorm.
 * User: SU-CL
 * Date: 7/10/2018
 * Time: 8:58 PM
 */

require("config.php");
unset($_SESSION['user']);
header("Location: index.php");
die("Redirecting to: index.php");