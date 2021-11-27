<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation using PHP</title>
    
      
</head>
<style>
body{
background:-webkit-linear-gradient(left, #5DADE2, #2980b9);
}
h1 {
    text-align: center;
    font-family: "prompt", sans-serif;
    color:#2980b9;
    text-transform:uppercase;

}
.wrapper{
    width: 800px;
    padding: 40px;
    background: #fff;
    margin: 0 auto;
    border-radius: 2px;
    box-shadow: 0 10px 10px #2980b9 ;
    height: 68vh;
}
.wrapper h2{
    text-align: center;
    font-family: "Mulish", sans-serif;
    color:rgba(30, 55, 153,1.0);
    text-transform: uppercase;

}
.wrapper input[type=text],
.wrapper input[type=email]{
    height: 40px;
    padding: 5px 35px;
    margin: 5px;
    outline:none;
    border: transparent;
    border-bottom: 1px solid #2980b9;
}
input[type=submit] {
  background-color:#0984e3;
  border: none;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 3px;
}
/* .wrapper a{
    text-decoration: none;
    padding: 10px 15px;
    display:block;
    background:rgba(30, 55, 153,1.0) ;
    margin: 30px 0 0 0;
    text-align: center;
    font-size:15px;
    color:#fff;
} */
.label{
    font-family: "prompt", sans-serif;
    text-transform: capitalize;
    color: rgba(30, 55, 153,1.0);
    font-weight: bold;
    padding-left:0px;
}

</style>
<body>
    
   <h1>Form</h1>
    <div class="wrapper">

     <form method="POST">

     <?php include 'connection.php';

     $ids = $_GET['id'];

     $showquery = "select * from test where id = {$ids}";

     $showdata = mysqli_query($con , $showquery);

     $arrdata = mysqli_fetch_array($showdata);

       if(isset($_POST['submit'])){

          $idupdate = $_GET['id'];

           $name = $_POST['name'];
           $degree = $_POST['email'];
           $mobile = $_POST['designation'];
           $email = $_POST['salary'];
           $refer = $_POST['date'];
         


         $insertquery = " insert into test(name,email,designation,salary,date) 
          values('$name','$email', '$designation', ' $salary', '$date') ";