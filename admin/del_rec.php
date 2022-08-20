<?php
include 'connect.php';

$sql = "DELETE FROM biodata WHERE id='".$_GET["id"]."'";

$res = $conn->query($sql);
?>
<script>
alert("Delete Successfully");
window.location = "v_details.php";
</script>