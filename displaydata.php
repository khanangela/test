<!DOCTYPE html>
<html>
<head>
</head>
<style>

*{
    margin:0; padding:0; box-sizing: border-box; font-family: prompt;}
.main-div{
    width: 100%; height: 100vh; display:flex; flex-direction: column; justify-content: center; align-items: center;}
.center-div{
    width: 90%;
    height: 80vh;
    background: -webkit-linear-gradient(left, #5DADE2, #00c6ff);
    padding: 20px 0 0 0;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius: 5px;
}
h1{
    font-size: 18px;
    color:#000;
    text-align: center;
    margin-top: -20px;
    margin-bottom: 20px;
    font-family: "prompt", sans-serif;
}
table{
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius: 5px;
    margin:auto;
}
th,td{
    border: 1px solid #f2f2f2;
    padding: 8px 30px;
    text-align: center;
    color: grey;
    font-family: "prompt", sans-serif;
}
th{
    text-transform: uppercase;
    font-weight: 500;
}
td{ font-size: 13px;}
    .email-style{
        font-size: 14px;
        color:grey;
        display: inline-block;
        background:#f2f2f2;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        line-height: 30px;
        padding: 0 14px;
    }
.post-class{
    text-transform: uppercase;
}
.fa{
    font-size: 18px;
}
.fa-edit{
    color: #63c76a;

}
.fa-trash{ color: #ff0000;}

a{ text-decoration: none; display:flex; justify-content: center; }


</style>
<body>
   

<div class="main-div">
   <h1>List of Fields</h1>

   <div class="center-div">
      <div class="table-responsive">
       <table>
         <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>email</th>
              <th>designation</th>
              <th>salary</th>
              <th>date</th>
              <th colspan="2">operation</th>

            </tr>
         </thead>
           <tbody>
           <?php 

           include 'connection.php';

            $selectquery = " select * from  test ";

             $query = mysqli_query($con , $selectquery);

            $nums = mysqli_num_rows($query);


            while($res = mysqli_fetch_array($query)){
              ?>
               <tr>
               <td><?php echo $res['id']; ?></td>
               <td><?php echo $res['name']; ?></td>
               <td><?php echo $res['email']; ?></td>
               <td><?php echo $res['designation']; ?></td>
               <td><span class="email-style"><?php echo $res['email']; ?></td>
               <td><?php echo $res['salary']; ?> </span> </td>
               <td><?php echo $res['date']; ?></td>
               <td><a href="updates.php?id=<?php echo $res['id'];  ?>" 
               data-toggle="tooltip" data-placement="bottom" title="UPDATE" style="color: green;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
               <td><a href="delete.php?id=<?php echo $res['id'];  ?>" 
               data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

             </tr>
            <?php
               }
              ?>
    
           </tbody>
       </table>

     </div>


   </div>

</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>