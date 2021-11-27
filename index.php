//Q1: CRUD OPERATION USING PHP,MYSQL. JQuery//

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation using PHP</title>
</head>


<body>
    
    <h1>Contact Form</h1><br><br>
    <div class="wrapper">
       <h2>Job Portal</h2>
       <br>
     <form method="POST">
       <label for="first Name" class="label">Name</label>
       <input type="text" placeholder="enter your Name" name= 'user'>

       <label for="email" class="label">Email</label>
       <input type="text" placeholder="enter your email" name ='email' required><br><br>

       <label for="designation" class="label" >Designation</label>
       <input type="text" placeholder="enter your designation" name='designation'>

       <label for="salary" class="label" >Salary</label>
       <input type="text" placeholder="enter your salary" name ='salary'><br><br>

       <label for="date" class="label">Date</label>
       <input type="text"  name ='date'>

        <br><br>
       <input type="submit" value="Register" name="submit">
       <a href="display.php"><input type="reset" value="Reset"></a>

  </form>
</body>
</html>



<?php include 'connection.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];
    $date = $_POST['date'];
   


    $insertquery = " insert into test(name,email,designation,salary,date) 
    values('$name', '$email', ' $designation', '$salary', '$date') ";

    $res = mysqli_query($con, $insertquery);

    if($res){
        ?>
        <script>
        alert("data inserted properly");
        </script>

        <?php
    }else{
        ?>
        <script>
        alert("data not inserted ");
        </script>

        <?php
    }
}



?>

