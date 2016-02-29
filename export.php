<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "registered members-export.xls"
header("Content-Disposition: attachment; filename=registered members-export.xls");
 
// Add data table
include 'regmembers.php';
?>

