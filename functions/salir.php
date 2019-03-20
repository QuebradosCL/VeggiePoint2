<?php

session_start();

session_destroy();

header('location: ../Setup/config.Logger.php');

?>