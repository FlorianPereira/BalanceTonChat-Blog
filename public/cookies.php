<?php
    session_start();
    setcookie(
        'fullName',
        $_SESSION['fullName'],
        ['expires' => time()+365*24*3600,
        'secure' => true,
        'httponly' => true]
    );
    setcookie(
        'email',
        $_SESSION['email'],
        ['expires' => time()+365*24*3600,
        'secure' => true,
        'httponly' => true]
    );






    /*
    $_SESSION[]=[
        'logged' => $userLogged['logged'],
        'fullName' => $userLogged['fullName'],
        'email' => $userLogged['fullName']
    ];
    */

?>