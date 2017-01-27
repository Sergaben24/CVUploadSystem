<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="../CssStyles/Style_For_Employer_Webpage.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <title>Logout Page</title>
    </head>
    <body>
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
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../index.php">Logout</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact US</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <div class="container-fluid" id="containerFluid">
            <div class="container-fluid" id="mainTitle">
                <h1 id="Title">Welcome to KUtalent CV System!</h1>
            </div>
            <div class ="container-fluid" id="containerFluid" >
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" ></div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3" id="categoryColumn">
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
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="viewColumn">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" ></div>
                </div>
            </div> 

        </div>
        <div class="jumbotron" id="footer">
            <h2 id="FooterTitle">Copyright(c) Group 13</h2>     
        </div>    

    </body>
</html>