<!doctype html>
<html lang="en" class="h-100"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>CodeingClub</title>

    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->


    <!-- Favicons -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<meta name="theme-color" content="#7952b3">


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
      a{
          text-decoration:none;
          color:white;
      }
      a:hover{
          color:white;
      }
      #do{
        animation-name:line;
        transition: all .2s;

      }
      #do:hover{
        margin-top:2px;
        border-bottom:2px solid rgb(0, 238, 255);
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
      
    </style>

    
    <!-- Custom styles for this template -->
    
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
      <div class="container">
    <div>
      <h3 class="float-md-start mb-0">CodeingClub</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
      <button type="button" class="btn btn-outline-info  " id="n-1" onclick="HomePage()"> Home</button>
     
      <button type="button" class="btn btn-outline-info " id="n-3" onclick="SignupPage()">Sign Up</button>
      <button type="button" class="btn btn-outline-info " id="n-3" onclick="contactPage()">Contact Us</button>
      </nav>
    </div>
    </div>
  </header>

  <main class="px-3">
    <h1>Participation</h1>
    <div class="container mt-5">
    <form>
      <div class="form-floating">
        <input type="text" class="Name"  placeholder="Name" style="color:gray;">
      
      </div><br>
      
      <div class="form-floating ">
        <input type="text"  class="Name" placeholder="Course and branch" style="color:gray;">
      </div><br>
      <div class="form-floating ">
        <input type="text"  class="Name" placeholder="Semester" style="color:gray;">
        
      </div><br>
      <div class="form-floating ">
        <input type="number" class="Name"  placeholder="Phone Number" style="color:gray;">
       
      </div><br>
      <div class="form-floating ">
        <input type="email" class="Name"  id="floatingInput" placeholder="name@example.com" style="color:gray;">
        
      </div><br>
    <div>
    <p class="lead" >If you do not login yet? Please login for participation</p>
  
  <br>
  <button align="left" type="button" class="btn btn-outline-info btn-lg " style="margin-bottom:20px;" onclick="SubPage()">Paricipate</button>

    </div>
      
    </form>
  </div>
    </div>
  
   
   
  </main>

 
</div>

<script>
    function HomePage(){
    window.location="index.php";
  }
  function SubPage(){
   alert("Thanks for participation.We will contact you as soon as possible.");
  }
  function LoginPage(){
    window.location="login2.php";
  } function SignupPage(){
    window.location="signup.php";
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  

</body></html>