<?php
/**
 * Created by PhpStorm.
 * User: SU-CL
 * Date: 7/10/2018
 * Time: 8:49 PM
 */
require("config.php");
if(empty($_SESSION['user']))
{
    header("Location: index.php");
    die("Redirecting to index.php");

}
require('header.php');

?>
    <div class="container" style="min-height: 600px">
        <div class="page-header" style="margin-top: 70px">
            <h1>WELCOME TO DASHBOARD</h1>
        </div>
        <p class="lead">A demo project for Web Engineering Course</p>
    </div>

<?php
require('footer.php');
?>