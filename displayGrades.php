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

        <?php
        session_start();
        ?>
        <div class="container-fluid">
            <h1>Grades to Submit</h1>
            <form action="submitted.php" method="post">
                <table style="width:100%" class="table table-striped">
                    <thead>
                    <th>Name</th>
                    <th>Grade</th>
                    </thead>
                    <tbody>
                    <?php foreach($_SESSION as $key => $value){ if (($key != 'submit3') && (($key != 'ctr'))){?>
                        <tr>
                            <td><?php echo $key ?></td>
                            <td><?php echo $value ?></td>
                        </tr>
                    <?php  unset($_SESSION[$key]);}}?>
                    </tbody>
                </table>
                <div class="form-group">
                    <input type='submit' name = 'submit4' value='Submit Grades' class='form-control'>
                </div>
            </form>
            <div class="form-group">
                <button class="form-control" onclick="history.back(-1);">Back</button>
            </div>
        </div>
    </body>
</html>