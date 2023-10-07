<?php
include_once("include/conn.php");
if (isset($_GET["id"])) {
    include_once("include/log.php");
    $id =$_GET["id"];
}
try{
    $sql = "DELETE FROM `cars list` WHERE id =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    echo "Deleted Successfully";

}catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
}
?>