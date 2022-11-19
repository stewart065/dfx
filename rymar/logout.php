<?php
        session_start();
        unset($username['uname']);
        session_destroy();

        header ('location: login.php');