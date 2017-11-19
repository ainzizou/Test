<?php
require_once('includes/connect.php');
include('header.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List of Members</title>
<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<?php

$result = pg_query($DB_con, "SELECT * from peserta order by id asc");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}



while ($row = pg_fetch_row($result)) {
  echo "No: $row[0]  Name: $row[1]  Addr: $row[2] <br>";
  
}

?>
<body>
</body>
</html>