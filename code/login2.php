<?php


//HERE
if(isset($_POST["submit"])){
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "code_user";
  
  // Create connection
  $conn =new  mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
  $Username=$_POST['username'];
  
  $Password=$_POST['password'];

  $sql="SELECT * FROM st_user WHERE name='$Username' AND password='$Password'";
  echo $sql;
  // $result =mysqli_query($conn,$sql);
  // $num=mysqli_num_rows($result);
  // if($num==1){
    echo "<script>window.location='welcome.php';</script>";
  // }
  // $date = current_timestamp();
 //   if($Password==$Cpassword){
// //
// $sql = "INSERT INTO st_user VALUES ('$Username', '$Email', '$Password',current_timestamp())";
$conn->close();
}
}



?>

<!Doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="theme-color" content="#7952b3">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      
      #n-1{
          border:none;
          margin-right:2px;
      }
      #n-2{
          border:none;
          margin-right:2px;
      }
      #n-3{
          border:none;
          margin-right:2px;
      }
      .Name{
        border:none;
        border-bottom:5px solid rgb(0, 238, 255);
        background-color:black;
        color:rgb(0, 238, 255);
        padding-top:10px;
        padding-bottom:10px;
        padding-right:10px;
        padding-left:10px;
        border-radius:10px;
        
        
    }
    #border{
     
      
     
      border:2px solid white;
    }
    a{
      text-decoration:none;
      color:white;

    }
    a:hover{
      text-decoration:none;
      color:white;
      padding-bottom:10px;
      
    }
     
    </style>

    
    <!-- Custom styles for this template -->
   
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark" >
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
      <div class="container">
    <div>
      <h3 class="float-md-start mb-0">CodeingClub</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
      <button type="button" class="btn btn-outline-info  " id="n-1" onclick="HomePage()">Home</button>
      
     
      <button type="button" class="btn btn-outline-info " id="n-3">Contact Us</button>
      </nav>
    </div>
    </div>
  </header>

  <div class="container mt-5" >


  
    

  <form  method="POST">
      
    <div ><h1><strong>Log In</strong></h1><br>

    <div >
    
      <input type="text" class="Name" id="username" name="username" placeholder="Username">
     
    </div><br>
    <div class="form-floating">
      <input type="password" class="Name" id="password" name="password" placeholder="Password" style="color:gray;">
      
    </div>

    <br>
    <button class=" btn btn-lg btn-outline-info" type="submit">Log In</button>
    <p class="mt-5 mb-3 text-muted">Dont Have An Account? </p><a href="signup.php" >Sign Up</a>
    </div>
  </form>
</div>

    </div>

    <script>
      function HomePage(){
    window.location="index.php";
  }
    </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>