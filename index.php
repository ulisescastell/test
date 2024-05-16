<?php
require_once './database/database.php';

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $data = $row;
}
header('Content-Type: application/json');
echo json_encode($data);

mysqli_free_result($result);
mysqli_close($conn);
?>