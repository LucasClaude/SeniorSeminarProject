<?php
session_start();
require"db_connect.php";
$sql = "SELECT forum_id, forum_name FROM forum_tbl";
if($query = $db-> prepare($sql)){
	$query->bind_result($f_id, $f_name);
	$query->execute();

}else{

	echo $db->error;
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>