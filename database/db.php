<?php
    session_start();

    $conn = mysqli_connect(
        'localhost',
        //'root',
        'id21041285_taskpage1',
        'Taskpage1.',
        'id21041285_php_mysql_crud_valeria'
    ) or die(mysqli_error($mysqli));
?>