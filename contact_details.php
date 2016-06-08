<?php
include_once 'widgets/config.php';

$database = new Config();
$db = $database->getConnection();

include_once 'widgets/data_include.php';
$product = new Person($db);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact_details | Attachment</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sign.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php
    include_once 'header.php';
    ?>
    <div class="container">
        <?php
        if ($_POST) {

            $product->box = $_POST['box'];
            $product->telephone = $_POST['telephone'];

            if ($product->contact_details()) {
                ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong>  <a href="all_display.php">View Data</a>.
                </div>
                <?php
            } else {
                ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <strong>Fail!</strong>
                </div>
                <?php
            }
        }
        ?>
        <div class="row">
            <form method="post" role="form">
                <div class="col-lg-6">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required details on education</strong></div>
                    <div class="form-group">
                        <label for="Inputaddress">Enter Address</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="box"  placeholder="Enter Address" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Inputtelephone">Enter Phone NO</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="telephone" placeholder="Enter telephone number" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-info pull-right">
                </div>
            </form>
            <div class="col-lg-5 col-md-push-1">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <strong><span class="glyphicon glyphicon-ok"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong>
                    </div>
                    <div class="alert alert-success">
                        <strong><span class="glyphicon glyphicon-remove"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut laboit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- attach footer -->
    <footer class="footer">
        <p>&copy; 2016 Attachment stuff, Inclusion media.</p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>


