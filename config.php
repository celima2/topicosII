<?php

// Sample file: Never send your credentials to git

// host
$host = 'localhost';

// db
$db_name = 'topicosii';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}
