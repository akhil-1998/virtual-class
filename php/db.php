<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:vclassserver.database.windows.net,1433; Database = vclassdb", "akhilmanil", "akhil@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "akhilmanil", "pwd" => "akhil@123", "Database" => "vclassdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:vclassserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>