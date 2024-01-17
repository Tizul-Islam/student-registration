<?php

unset($_SESSION['admin_id']);
unset($_SESSION['admin_name']);
header('location:login.php?msg=logout Successfully');



?>