<?php
/**
 * Created by PhpStorm.
 * User: SU-CL
 * Date: 7/10/2018
 * Time: 8:26 PM
 */

    require("config.php");
    if(empty($_SESSION['user']))
    {
        header("Location: index.php");
        die("Redirecting to index.php");
    }
    require ('header.php')
?>

<div class="container">
    <div class="page-header">
        <h1>Sticky footer with fixed navbar</h1>
    </div>
    <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
    <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
</div>

<?php
require ('footer.php')
?>
