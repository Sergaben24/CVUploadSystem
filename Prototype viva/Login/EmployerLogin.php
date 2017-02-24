<!DOCTYPE html>
<html>
    <head>
        <title>CV website KU</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="Stylesheet"  href="../Cssstyles/Login.css">
        <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class= "container-fluid" id="MainContainerFluid">

            <div class="containerFluid" id="Title">
                <div id="imageContainer">
                    <img src="../images/KingstonLogo.png"  alt="">
                </div>
                <div class="page-header">

                    <h1 class="titleCss">CV Kingston System</h1>
                </div>
            </div>
            <div class="containerFluid" id="ButtonsContainers">
                <div class="container-fluid" id="containerFluid">

                    <h1 class="loginCss">Login as</h1>
                    <a href="StaffLogin.php"><button type="button"  class="btn btn-primary btn-lg" id="staffButton">Talent Staff Login</button></a>
                    <a href="../index.php"><button type="button"  class="btn btn-primary btn-lg" id="studentButton">Student Login</button></a>
                    <button type="button"  class="btn btn-primary btn-lg" id="employerButton">Employer Login</button>
                    <!-- </div> -->
                </div>
            </div>
            <div class="containerFluid" id="loginContainer">
                <h1 id="changeTitle">Employer Login</h1>
                <!--       Kenneth Was Here-->
                <div class="containerFluid" id="loginFormContainer">
                    <div class="form-group" id="loginUsername">
                        <label for="StudentEmail" >Email address:</label> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                    </div>
                    <div class="form-group" id="loginPassword">
                        <label for="exampleInputPassword1">Password:</label> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <form action="../Employer/EmployerCVpage.php">
                        <button type="submit" class="btn btn btn-default" id="buttonCreate"> Log In </button>
                    </form>
                </div>
                <div><h4 id="newUserLink"><a href="../Employer/signUpPageEmployer.php">New Employer?</a></h4></div>
            </div>
        </div>
        <!--<script src="JSscripts/makeChangesInHtmlCode.js"></script>-->
    </body>

    <!--onclick="document.getElementById('changeTitle').innerHTML = 'KU Talent Staff Login Screen'" -->

</html>
