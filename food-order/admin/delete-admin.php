<?php

include('../config/constants.php');

    echo $id=$_GET['id'];

    $sql= "DELETE FROM tbl_admin WHERE id=$id";

    $res= mysqli_query($conn,$sql);    

    if($res==TRUE)
    {
        $_SESSION['delete']="<div class='success'>Admin Deleted Succesfully</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['delete']="<div class='error'>Failed to Delete Admin</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }


?>