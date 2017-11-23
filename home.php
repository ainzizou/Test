<?php
include("home_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RDS Login : Wavelet GST Generator</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
     <div class="form-container">
        <form method="post" action="connect.php" >
            <h2 align="center"><img src="images/gst.png" width="176" height="58" /></h2><hr />
            <?php
            if(isset($error))
            {
              echo "danger";
            }
            ?>              
           
            <div class="form-group">
             <input type="text" class="form-control" name="link" placeholder="psql --host=localhost --port=5432 --username=test1 --dbname=test2" required />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" name="btn-login" class="btn btn-block btn-danger">
                 <i class="glyphicon glyphicon-log-in"></i>&nbsp;CONNECT
                </button>
            </div>
            <br />
        </form>
       </div>
    </div>


</body>
</html>