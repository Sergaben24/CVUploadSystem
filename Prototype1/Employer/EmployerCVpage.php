<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="../CssStyles/Style_For_Employer_Webpage.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <title>Logout Page</title>
    </head>
    <body>
        <!--<nav class="navbar navbar-inverse">-->
        <div class="container-fluid" id="containerFluid">

            <!--	<a class="navbar-brand">-->
            <div class ="container-fluid" id="containerFluid" >
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn btn-success btn-lg" onsubmit="StudentLogin.php">Home</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn btn-success btn-lg" onsubmit="#">Account Details</button>
                    </div>
                    <div class="btn-group" role="group">
                        <a href="StudentLogin.php" class="aLogout"><button type="button" class="btn btn btn-success btn-lg" onsubmit="#">Logout</button></a>
                    </div>
                    <div class="btn-group" role="group">
                        <a href="StudentLogin.php" class="aLogout"><button type="button" class="btn btn btn-success btn-lg" onsubmit="#">Contact Us</button></a>
                    </div>
                </div>
                <!--       Kenneth Was Here-->
                <!-- <form action="StudentLogin.php">
<button type="submit" class="btn btn btn-success btn-lg" id="buttonCreate"> Home </button>
</form>
<form action="StudentLogin.php">
<button type="submit" class="btn btn btn-success btn-lg" id="buttonCreate"> Account Details </button>
</form>
<form action="StudentLogin.php">
<button type="submit" class="btn btn btn-success btn-lg" id="buttonCreate"> Generate Password </button>
</form>

<!--<li type="button" class="btn btn-success btn-lg">Logout</li>

<form action="StudentLogin.php">
<button type="submit" class="btn btn btn-success btn-lg" id="buttonCreate"> Logout </button>
</form> -->
                <h1 id="Title">Welcome to KUtalent CV System!</h1>
            </div>
            <div class ="container-fluid" id="containerFluid" >
                <div class = "panel-group">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-8" id="categoryColumn">
                            <div class ="container-fluid" id="containerFluid">
                                <h2 id="categoriesTitle"> Categories</h2>
                                <div class = "panel-group">
                                    <div class ="panel panel default">
                                        <!--	<th colspan="3">Categories</th>-->
                                        <div class="panel-body">
                                            <div id="button">
                                                <button type="button" class="btn btn-default btn-block">Computer Science</button>
                                                <!--<p>Category Name<span class></span>!</p>-->
                                            </div>
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
                            <div class ="container-fluid" id="containerFluidView">
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