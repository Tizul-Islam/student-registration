



<?php

if(!isset($_SESSION['ad_id'])){

header('location:login.php?msg=sorry Access Without login');

exit();
}


?>