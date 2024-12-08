<?php

session_start();
session_unset();
session_destroy();
// echo "Now, you are log out";

header("location: /getroombookings");
exit;