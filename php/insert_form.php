<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $collage = $_POST['collage'];
    $email = $_POST['email'];
    $phone = $_POST ['phone'];
    $class = $_POST['class'];
    $message = $_POST['message'];

    $insertion = mysqli_query($db, "INSERT INTO student SET 
        name = '$name',
        fname = '$fname',
        collage = '$collage',
        email = '$email',
        phone = '$phone',
        class = '$class',
        message = '$message'
    ");

    if ($insertion) {
        header('Location:student_online.php?msg=insertion_Successful');
        exit();
    } else {
        header('Location:student_online.php?msg=insertion_Failed');
        exit();
    }
}
?>


<!-- update from -->


<?php
include('connection.php');

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $collage = $_POST['collage'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $message = $_POST['message'];
    $id = $_POST['id'];

    $updated = mysqli_query($db, "UPDATE student SET 
        name = '$name',
        fname = '$fname',
        collage = '$collage',
        email = '$email',
        phone = '$phone',
        class = '$class',
        message = '$message'
        where id = '$id'
    ");

    if ($updated) {
        header('Location:student_online.php?msg=Updated_Successful');
        exit();
    } else {
        header('Location:student_online.php?msg=updated_Failed');
        exit();
    }
}
?>