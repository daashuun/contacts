<?php 

require "connection.php";

$sql = "DELETE FROM contacts WHERE id = '{$_GET["contact"]}';";
connection($sql);

?>