<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>

.header{

background-color:rgb(185, 173, 179);
padding: 20px;
text-align: center;


    

}

 ul {

background-color: white;
list-style: none;
margin: 6;
padding: 8;
overflow: hidden;
}

li {

float: left;
border: 2px solid;

}

li a {

color: red;
padding: 15px 15px;
text-decoration: none;
display: block;


}

li a:hover:not(.active) {
background-color: black;
}

.active {
background-color: black;
}
legend{

padding: 5px;

}



</style>


<body>
    <div class="header">
    <h1>Student Regestration System</h1>
    </div>
    
<ul>
    <li><a href="#" class="active">Home</a></li>
    <li><a href="form.php">Apply</a></li>
    <li><a href="#">View</a></li>
    <li><a href="logout.php" class="active">logout </a></li>
</ul>

</body>
</html>

<?php
include('connection.php');
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $delete = "delete from student where id='$id'";
    $run = $db->query($delete);
}
$select = "select * from student";
$run = $db->query($select);

?>



<table border="4px" width="100%">
    <caption>
        <h1>Student Record</h1>
    </caption>
    <tr bgcolor="red">

        <th>ID</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Collage</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Class</th>
        <th>Message</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>


    <?php
    while ($record = mysqli_fetch_array($run)) {
    ?>

        <tr>
            <td><?php echo $record['id']; ?></td>
            <td><?php echo $record['name']; ?></td>
            <td><?php echo $record['fname']; ?></td>
            <td><?php echo $record['collage']; ?></td>
            <td><?php echo $record['email']; ?></td>
            <td><?php echo $record['phone']; ?></td>
            <td><?php echo $record['class']; ?></td>
            <td><?php echo $record['message']; ?></td>

            <td><a onclick="return confirm('Are you sure want to delete Me')" 
            href="student_online.php? id=<?php echo $record['id']; ?>" button>Delete</button></a></td>

            <td><a href="update_form.php?id=<?php echo $record['id'];?>"><button>Update</button></a></td>
        </tr>

    <?php } ?>
</table>