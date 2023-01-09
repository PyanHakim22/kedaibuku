<?php include "autch.php"; ?>
<?php
include "conn.php";
//echo"delete";
if(isset($_GET['delete']))
{
    $id=$_GET['delete'];

    $query = "DELETE FROM buku WHERE id = {$id}";
    $delete_query= mysqli_query($dbb,$query);
    header("Location: table.php");
}
?>