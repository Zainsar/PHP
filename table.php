<?php
include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid" style="margin-top: 2px;">
    <form action="table.php" method="post" class="form-group">
        <label for="FirstName">FirstName</label>
        <input type="text" name="FirstName" class="form-control" placeholder="First-Name">
        <br>
        <label for="LastName">LastName</label>
        <input type="text" name="LastName" class="form-control" placeholder="Last-Name">
        <br>
        <label for="Email">Email</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="Email" class="form-control" name="Email" placeholder="Email">
      </div>
    <br>
        <!-- <label for="Email">Email</label>
        <input type="Email" name="Email" class="form-control" placeholder="name@example.com">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        <br> -->
        <label for="Password">Password</label>
        <input type="Password" name="Password" class="form-control" placeholder="********">
        <br>
        <label for="Age">Age</label>
        <input type="number" name="Age" class="form-control" placeholder="18 Above">
        <br>
        <label for="Gender">Gender</label>
        <input type="text" name="Gender" class="form-control" placeholder="Male/Female">
        <br>
        <input type="Submit" value="Submit" name="Submit" class="btn btn-primary">
    </form>
    <?php
    if(isset($_POST['Submit'])){
    
        $FirstName=$_POST['FirstName'];
        $LastName=$_POST['LastName'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Age=$_POST['Age'];
        $Gender=$_POST['Gender'];
        
        
        $query ="INSERT INTO `new` (`FirstName`, `LastName`, `Email`, `Password`, `Age`, `Gender`) VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Age', '$Gender')" ;
        $ $result = mysqli_query($conn,$query);
        if(!$result){
            die("Query Faild");
        };

        header('location:http://localhost:82/classwork22/table2.php');
    }

    
    
    ?>
</body>
</html>