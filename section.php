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
        <div class="container-fluid" id="sectionForm">
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

    <!-- Grades Submission Form -->
        <?php
            require("People.php");
            if (isset($_POST["submit2"])) {
                $courseNameValue = trim($_POST["coursename"]);
                $sectionValue = trim($_POST["section"]);
                $filename = $courseNameValue.$sectionValue.".txt";
                if ($courseNameValue === ""||$sectionValue === "" || !file_exists($filename)) {
                    echo "<h3>Invalid course information</h3><br />";
                }else {
                    $fp = fopen($filename, "r") or die("Could not open file");
                    $i = 0;
                    $people = array();
                    while (!feof($fp)) {
                        $line = fgets($fp);
                        $people[$i] = new People($line);
                        $i++;
                    }
                    fclose($fp);?>
                    <style type="text/css">#sectionForm{display:none;}</style>
                    <div class="container-fluid" id="gradeForm">
                        <form action='<?php $_SERVER['PHP_SELF'];?>' method="post">
                            <h1>Grades Submission Form</h1>
                            <h2>Course: <?php echo "$courseNameValue"?>, Section: <?php echo "$sectionValue"?></h2>
                            <div>
                                <table style="width:100%" class="table table-striped">
                                    <thead>
                                        <th>Name</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                    <?php foreach($people as $p){ ?>
                                        <tr>
                                            <td><?php echo $p->getName()?></td>
                                            <td><input type="radio" name="<?php echo $p->getName()?>" value="A"><label for="A"> A</label></td>
                                            <td><input type="radio" name="<?php echo $p->getName()?>" value="B"><label for="B"> B</label></td>
                                            <td><input type="radio" name="<?php echo $p->getName()?>" value="C"><label for="C"> C</label></td>
                                            <td><input type="radio" name="<?php echo $p->getName()?>" value="D"><label for="D"> D</label></td>
                                            <td><input type="radio" name="<?php echo $p->getName()?>" value="F"><label for="F"> F</label></td>
                                            <td style="display: none;"><input checked="checked" type="radio" name="<?php echo $p->getName()?>" value="NG"><label for="NG"> NG</label></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <input type='submit' name = 'submit3' value='Continue'>
                            </div>
                        </form>
                    </div>
            <?php }
            }elseif(isset($_POST["submit3"])){

                session_start();

                $keys = array_keys($_POST);
                foreach ($keys as $key)
                    $_SESSION[$key] = $_POST[$key];
                header('Location: displayGrades.php');
                ?>
                <style type="text/css">#gradeForm{display:none;}</style>

            <?php }?>
    </body>
</html>
