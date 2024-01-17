<?php
include('connection.php');

if (isset($_POST['login'])) {
    $username = ($_POST['username']);
    $password = ($_POST['password']);

    $select = mysqli_query($db, "SELECT * FROM admin where 
    ad_username ='$username' AND ad_password = '$password'");
    $num = mysqli_num_rows($select);

    if ($num == 1) {

        $users = mysqli_fetch_array($select);
        $_SESSION['admin_id'] = $users['ad_id'];
        $_SESSION['admin_name'] = $users['ad_name'];
        header('location:student_online.php?welcome');

        exit();
    } else {
        header('location:login.php?error username and password');
        exit();
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
</head>

<body bgcolor="#ffcc33"><br /> <br />
    <table border="3" bgcolor=" #ffff99" align="center">
        <caption>
            <h1>Admin</h1>
            <h2 style="text-align: center;" color="#f00;">Enter your password and name</h2>
        </caption>




        <form action="" method="post">

        
            <tr>
                <td>Username:</td>

                <td><Input type="text" name="username" size="50"></td>
            </tr>

            <tr>

                <td>Password:</td>

                <td><input type="password" name="password" size="50"></td>

            </tr>

            <tr>

                <td>Login:</td>

                <td><input type="submit" name="login" value="login" align="middle" /></td>

            </tr>










        </form>

    </table>

</body>

</html>