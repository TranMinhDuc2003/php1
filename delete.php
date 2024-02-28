<?php
include "pdo.php";
?>
<?php
$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM toyproduct WHERE productId=  $id";
$result = $conn->query($sql);
?>