
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "code_user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
//HERE
if(isset($_POST["submit"])){

  $Username=$_POST['username'];
  $Email =$_POST['email'];
  $Password=$_POST['password'];
  $Cpassword=$_POST['cpassword'];
 // $date = current_timestamp();
  if($Password==$Cpassword){
  

//

$sql = "INSERT INTO st_user VALUES ('$Username', '$Email', '$Password',current_timestamp())";



 if ($conn->query($sql) === TRUE) {
   echo '<script>alert("You Have Successfully Registered.You May Log In"); </script>';
}
  
}
else {
  echo '<script>alert("Registration Unsuccessfull"); </script>';

$conn->close();
}

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
 

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
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

    * {
      margin: 0;
      padding: 0;
    }


    #n-1 {
      border: none;
      margin-right: 2px;
    }

    #n-2 {
      border: none;
      margin-right: 2px;
    }

    #n-3 {
      border: none;
      margin-right: 2px;
    }

    a {
      text-decoration: none;
      color: white;
    }

    a:hover {
      color: white;
    }

    .Name {
      border: none;
      border-bottom: 5px solid rgb(0, 238, 255);
      background-color: black;
      color: rgb(0, 238, 255);
      padding-top: 10px;
      padding-bottom: 10px;
      padding-right: 10px;
      padding-left: 10px;
      border-radius: 10px;


    }

    .f-white {
      color: white;
    }
  </style>


  <!-- Custom styles for this template -->

</head>

<body class="d-flex h-100 text-center text-white bg-dark">



  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column sticky-top">
    <header class="mb-auto">

      <div class="container  ">
        <div class="sticky-top">
          <h3 class="float-md-start mb-0">CodeingClub</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <button type="button" class="btn btn-outline-info  " id="n-1" onclick="HomePage()">
              Home</button>


            <button type="button" class="btn btn-outline-info " id="n-3">Contact Us</button>
          </nav>


        </div>

      </div>



    </header>
    

    <h1>Sign Up</h1><br>
    <div class="container">
      <form  action="login2.php" method="POST">
        <div class="form-floating">
          <input type="text" class="Name" placeholder="Name" id="username" name="username" style="color:gray;">

        </div><br>
        <div class="form-floating">

          <input type="email" class="Name" placeholder="name@example.com" id="email" name="email" style="color:gray;">
        </div><br>
        <div class="form-floating">
          <input type="password" class="Name" placeholder="Password" id="password" name="password" style="color:gray">

        </div><br>
        <div class="form-floating">
          <input type="password" class="Name" placeholder="Confirme Password" id="cpassword" name="cpassword" style="color:gray;">

        </div><br>


        <br>
        <button type="submit" id="submit" name="submit" class=" btn btn-lg btn-outline-info" >Signup</button>
        <p class="mt-5 mb-3 text-muted">Already Have An Account? <a href="login2.php">Log In</a></p>

      </form>
    </div>

  </div>

  <script type="text/javascript">
    function HomePage() {
      window.location = "index.php";
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>


</body>

</html>