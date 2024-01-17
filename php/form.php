 

<html>

<head>

<title>Registation From</title>

</head>

<body>
    
<form align="center" style="background-color: green" action="insert_form.php" method="post">
<fieldset>
  
            <legend >Student Regisrtation Form</legend>
            <label >Student Name</label>
            <input type="text" name="name" size=" 50px" autofocus=" true" placeholder="type your name" required="true">
            <br></br>
            <label >Father Name</label>
            <input type="text" name="fname" size="50px" autofocus="true" placeholder="your fname">
            <br></br>
            <b>Collage Name</b>
            <input type="text" name="collage" size="50px">
            <br></br>
            <b>Email</b>
            <input type="text" name="email" size="50px">
            <br></br>
            <strong>Phone</strong>
            <input type="text" name="phone" size="50px">
            <br></br>

            <strong>Select Class</strong>
            <input type="text" list="list1" name="class">
            <datalist id="list1">
                <option value="1st" label="1st Class"></option>
                <option value="2st" label="2nd Class"></option>
                <option value="3st" label="3rd Class"></option>

            </datalist>
            <br></br>
            <b>Message</b>
            <textarea name="message" id="" cols="50" rows="6"></textarea>
            <br></br>
            <input type="submit" name="submit">
            <ul>
                <li><a href="student_online.php" padding: 10px 30px >Back</a></li>
            </ul>
            
        </fieldset>



</form>
</body>
</html>