<!doctype html>
<html>
    <head>
        <title>$Grades Submission System</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>

    <body>
<!-- Grades Submission System login - form 1-->
    <?php if (!(isset($_POST["submit1"])) && !(isset($_POST["submit2"]))) {?>
        <div class="container-fluid">
            <form action='<?php $_SERVER['PHP_SELF'];?>' method="post">
                <h1>Grades Submission System</h1>

                <div class="form-group">
                    <label for="login">LoginId: </label>
                    <input type="text" name="login" class="form-control" autofocus required="required">
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="text" name="password" class="form-control" autofocus required="required">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit1" class="form-control">
                </div>
            </form>
        </div>
    <?php }?>
<!-- Section Information - form 2-->
    <?php if (isset($_POST["submit1"])) {?>
        <div class="container-fluid">
                <form action='<?php $_SERVER['PHP_SELF'];?>' method="post">
                    <h1>Section Information</h1>

                    <div class="form-group">
                        <label for="coursename">Course Name: </label>
                        <input type="text" name="coursename" class="form-control" autofocus required="required" placeholder="cmsc389N">
                    </div>
                    <div class="form-group">
                        <label for="section">Section: </label>
                        <input type="text" name="section" class="form-control" autofocus required="required" placeholder="0101">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit2" class="form-control">
                    </div>
                </form>
        </div>
    <?php }?>
<!-- Grades Submission Form -->
    <?php if (isset($_POST["submit2"])) {?>
        <div class="container-fluid">
                <form action='<?php $_SERVER['PHP_SELF'];?>' method="post">
                    <h1>Grades Submission Form</h1>
                    <h2>Course: , Section: </h2>

                    <div>
                        <table style="width:100%" class="table table-striped">
                            <thead>
                                <th>Name</th>
                            </thead>
                            <tr>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <input type='submit' name = 'submit3' value='Continue'>
                    </div>
                </form>
        </div>
    <?php }?>

    </body>
</html>
