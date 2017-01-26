<!DOCTYPE html>
<html>
    <head>
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
         <link type="text/css" rel="stylesheet" href="../CssStyles/Style_For_Staff_Webpage.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <title>Logout Page</title>
    </head>
    <body>
        <!--       Kenneth Was Here-->
        <!--<nav class="navbar navbar-inverse">-->

        <div class="container-fluid" id="containerFluid">
            <!--	<a class="navbar-brand">-->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Logout</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact US</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../navbar/">Contact Us</a></li>
                            <li class="active"><a href="./">About Us<span class="sr-only">(current)</span></a></li>
                            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <!-- <div class ="container-fluid" id="containerFluid" >
<div class="btn-group btn-group-justified" role="group" aria-label="...">
<div class="btn-group" role="group">
<button type="button" class="btn btn btn-success btn-lg" onsubmit="StudentLogin.php">Home</button>
</div>
<div class="btn-group" role="group">
<button type="button" class="btn btn btn-success btn-lg" onsubmit="#">Account Details</button>
</div>
<div class="btn-group" role="group">
<button type="button" class="btn btn btn-success btn-lg" onsubmit="#">Generate Password</button>
</div>
<div class="btn-group" role="group">
<a href="StudentLogin.php" class="aLogout"><button type="button" class="btn btn btn-success btn-lg" onsubmit="#">Logout</button></a>
</div>
<div class="btn-group" role="group">
<a href="StudentLogin.php" class="aLogout"><button type="button" class="btn btn btn-success btn-lg" onsubmit="#">Contact Us</button></a>
</div>
</div>-->
        <div class="container-fluid" id="mainTitle">

            <h1 id="Title">Welcome to KUtalent CV System!</h1>
        </div>
        <div class ="container-fluid" id="containerFluid" >
            <div class = "panel-group">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8" id="categoryColumn">
                        <div class ="container-fluid" id="containerFluid">
                            <h2 id="categoriesTitle"> Categories <button type="button" class="btn btn-default" id="buttonCss">+</button>
                            </h2>

                            <div class = "panel-group">
                                <div class ="panel panel default">
                                    <!--	<th colspan="3">Categories</th>-->

                                    <div id="button">
                                        <button type="button" class="btn btn-default btn-block">Computer Science</button>
                                        <!--<p>Category Name<span class></span>!</p>-->
                                    </div>

                                    <div class="panel-body" >
                                        <div id="button">
                                            <button type="button" class="btn btn-default btn-block">Computer Science(Network Communications)</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div id="button">
                                            <button type="button" class="btn btn-default btn-block">Software Engineering</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div id="button">
                                            <button type="button" class="btn btn-default btn-block">Electrical Engineering</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div id="button">
                                            <button type="button" class="btn btn-default btn-block">Mechanical Engineering</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div id="button">
                                            <button type="button" class="btn btn-default btn-block">Information Systems</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div id="button">
                                            <button type="button" class="btn btn-default btn-block">Computer Science(With Buisness Studies)</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div id="button">
                                            <button type="button" class="btn btn-default btn-block">Computer Science(Games and Development)</button>
                                        </div>
                                    </div>
                                    <div class="panel-body" >
                                        <div id="button">
                                            <button type="button" class="btn btn-default btn-block">Category Name</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-sm-4" style="background-color:lavenderblush;"></div>-->
                    <div class="col-xs-12 col-sm-6 col-md-8" id="viewColumn">
                        <div class ="container-fluid" id="containerFluid">
                            <h2 id="viewTitle"> View CV</h2>
                            <div class = "panel-group">
                                <div class ="panel panel default" id="viewCenterPanel">
                                    <!--	<th colspan="3">View CVs</th>-->
                                    <div class="panel-body" id="viewCV">
                                        <p>Description</p>
                                        <div id="button">
                                            <a href="CVview_Page.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
                                        </div>
                                    </div>
                                    <div class="panel-body" id="viewCV">
                                        <p>Description</p>
                                        <div id="button">
                                            <a href="CVview_Page.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
                                        </div>
                                    </div>
                                    <div class="panel-body" id="viewCV">
                                        <p>Description</p>
                                        <div id="button">
                                            <a href="CVview_Page.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
                                        </div>
                                    </div>
                                    <!--<p>Description</p>
<div id="button">
<a href="CVview_Page.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
</div>
<p>Description</p>
<div id="button">
<a href="CVview_Page.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
</div>
<p>Description</p>
<div id="button">
<a href="CVview_Page.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
</div>
<p>Description</p>
<div id="button">
<a href="CVview_Page.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
</div>
<p>Description</p>
<div id="button">
<a href="CVview_Page.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
</div>
<p>Description</p>
<div id="button">
<a href="CVview_Page.php" class="aViewButtons"><button type="button" class="btn btn-default btn-block">View CV</button></a>
</div>-->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
        <div class ="container-fluid" id="containerFluid">
            <div class="panel-group">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8" id="categoryColumn">
                        <h2 id="PasswordTitle">Generated Password</h2>
                        <div> <?php  include 'passwordMail.php' ?> </div> 
                    </div>
                </div>
            </div>
        </div>
        </div>
    <div class="jumbotron" id="footer">
        <h2 id="FooterTitle">Copyright(c) Group 13</h2>     
    </div>    
    <!--	<div id="footer">
<div id="button">
<a href="UploadCVPage.php"><button type="button" class="btn btn-default btn-block">Upload CV</button></a>
</div>
</div>-->

    </body>
</html>