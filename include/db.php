<?php

$link = mysqli_connect('localhost','root','','users_data_base');
if(mysqli_connect_errno())
    {
    echo 'Error in connection with data base('.mysqli_connect_errno().' ): '. mysqli_connect_error();
    exit();
    }
?>