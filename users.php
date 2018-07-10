<?php
/**
 * Created by PhpStorm.
 * User: SU-CL
 * Date: 7/10/2018
 * Time: 8:26 PM
 */

require("config.php");
if (empty($_SESSION['user'])) {
    header("Location: index.php");
    die("Redirecting to index.php");
}
$query = " SELECT username, email FROM users";
try {
    $results = $db->query('SELECT * FROM users')->fetchAll();
} catch (PDOException $ex) {
    die("Failed to run query: " . $ex->getMessage());
}

require('header.php')
?>

<div class="container" style="min-height: 600px">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive table-bordered" style="margin-top: 70px">
                <table class="table table-striped studentTable">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th class="text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    foreach ($results as $user){
                    ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $user['username']?></td>
                        <td><?php echo $user['email']?></td>


                        <td class="action text-right">
                            <button  class="btn btn-default color-red deleteButton"
                                    onclick="javascript:return confirm('Are you sure you want to delete this user?');">
                                <i class="fa fa-trash-o" data-toggle="tooltip"
                                   data-placement="top" title="Delete"></i>
                            </button>
                            <a href=""
                               class="btn btn-default">
                                <i class="fa fa-pencil" data-toggle="tooltip"
                                   data-placement="top" title="Edit"></i>
                            </a>&nbsp;
                        </td>

                    </tr>
                    <?php
                    }
                    ?>

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

<?php
require('footer.php')
?>
