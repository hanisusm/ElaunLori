<?php

include("config.php");
$Bil = $_GET['Bil'];

$result = mysqli_query($mysqli, "DELETE FROM barangmainan WHERE Bil=$Bil");
echo "<script>alert('Hapus maklumat berjaya');"
    . "window.location='index.php'</script>";

?>
