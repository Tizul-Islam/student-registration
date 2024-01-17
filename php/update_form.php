<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing data based on the student ID
    $select = mysqli_query($db, "SELECT * FROM student WHERE id ='$id'");
    $data = mysqli_fetch_array($select);


    if (!$data) {
        // Handle the case where the student ID is not valid
        header('location:student_online.php?msg=Student%20not%20found');
        exit();
    }
} 

?>


<head>

    <title>Registation From</title>

</head>

<body>

    <form align="center" style="background-color:#F00" action="insert_form.php" method="post">
        <fieldset>

            <legend>Update Regisrtation Form</legend>
            <label>Student Name</label>


            <input type="text" name="id" size=" 50px" autofocus=" true" value="<?php echo $data['id']; ?>" style="display:none">



            <input type="text" name="name" size=" 50px" autofocus=" true" value="<?php echo $data['name']; ?>">
            <br></br>
            <label>Father Name</label>
            <input type="text" name="fname" size="50px" autofocus="true" value="<?php echo $data['fname']; ?>">
            <br></br>
            <b>Collage Name</b>
            <input type="text" name="collage" size="50px" value="<?php echo $data['collage']; ?>">
            <br></br>
            <b>Email</b>
            <input type="text" name="email" size="50px" value="<?php echo $data['email']; ?>">
            <br></br>
            <strong>Phone</strong>
            <input type="text" name="phone" size="50px" value="<?php echo $data['phone']; ?>">
            <br></br>



            <strong>Select Class</strong>
            <input type="text" list="list1" name="class" value="<?php echo $data['class']; ?>">
            <datalist id="list1">
                <option value="1st" label="1st Class"></option>
                <option value="2st" label="2nd Class"></option>
                <option value="3st" label="3rd Class"></option>

            </datalist>
            <br></br>
            <b>Message</b>
            <textarea name="message" id="" cols="50" rows="6"><?php echo $data['message']; ?></textarea>
            <br></br>
            <input type="Submit" name="update">
        </fieldset>



    </form>
</body>