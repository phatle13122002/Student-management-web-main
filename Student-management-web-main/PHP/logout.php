<?php
session_start();
require('data.php');
mysqli_close($conn);
if(session_destroy())
{
    header('location:index.php');
}
else{
    echo "Không thể hủy session.";
}


?>