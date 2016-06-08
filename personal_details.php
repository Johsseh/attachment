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
    <title>personal_details | Attachment</title>
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

            $product->name = $_POST['name'];
            $product->dob = $_POST['dob'];
            $product->sex = $_POST['sex'];

            if ($product->personal_details()) {

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
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required personnal details</strong></div>
                    <div class="form-group">
                        <label for="InputName">Enter Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name"  placeholder="Enter Real name" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Inputdob">Enter Date of birth</label>
                        <div class="input-group">
                            <input type="date" class="form-control" name="dob" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Inputsex">Sex</label>
                        <div class="input-group">
                            <select class="form-control" name="sex" required>
                                <option value="">Select Sex:</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>

                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-info pull-right">
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


