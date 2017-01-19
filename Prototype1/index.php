<!DOCTYPE html>
<html>
<head>
  <title>CV website KU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="Stylesheet"  href="Style_For_CV_Website.css">
  <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="JSscripts/makeChangesInHtmlCode.js"></script>
</head>
<body>
  <div class= "container-fluid" id="MainContainerFluid">
    <!--<nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" >CV Trial website</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="Your_profile.html">Your profile</a></li>
          <li><a href="CV_Uploader.php">CV uploader</a></li>
          <li><a href="#">CV feedback</a></li>
        </ul>
      </div>
    </nav>-->
    <div class="containerFluid" id="Title">
      <div class="page-header">

          <h1>CV Kingston System</h1>
      </div>
    </div>
    <div class="containerFluid" id="ButtonsContainers">
        <div class="container-fluid" id="containerFluid">
            <!--<div class="btn-group" role="group" aria-label="Basic example">-->
              <button type="button"  class="btn btn-primary btn-lg" id="staffButton">KU Talent Staff Login</button>
              <button type="button"  class="btn btn-primary btn-lg" id="studentButton">KU Student Login</button>
              <button type="button"  class="btn btn-primary btn-lg" id="employerButton">KU Employer Login</button>
          <!-- </div> -->
        </div>
    </div>
    <div class="containerFluid" id="loginContainer">
       <h1 id="changeTitle">KU Student Login Screen</h1>
       <div class="containerFluid" id="loginFormContainer">
         <div class="form-group" id="loginUsername">
            <label for="StudentEmail" >Email address:</label> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
         </div>
         <div class="form-group" id="loginPassword">
           <label for="exampleInputPassword1">Password:</label> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </div>
         <form action="passwordMail.php">
             <button type="submit" class="btn btn btn-default" id="buttonCreate"> Log In </button>
        </form>
      </div>
      <div><h4 id="newUserLink"><a href="#">New Student ?</a></h4></div>
    </div>
  </div>
  
</body>

<!--onclick="document.getElementById('changeTitle').innerHTML = 'KU Talent Staff Login Screen'" -->

</html>
