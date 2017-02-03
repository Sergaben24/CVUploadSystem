<!DOCTYPE html>
<html style="position: relative; min-height: 100%;">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../JSscripts/bootstrap-filestyle.min.js"> </script>
        <link type="text/css" rel="stylesheet" href="../CssStyles/optimisedMainPage.css"/>
        <title>Logout Page</title>
    </head>
    <body style="margin: 0 0 120px;">

        <!--	<a class="navbar-brand">-->
        <nav class="navbar navbar-default" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                        <!--<span class="sr-only">Toggle navigation</span>-->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="containerImg"><a class="navbar-brand" href="#"><img id="logoImage" src="../CssStyles/images/KingstonLogo.png" ></a></div>
                </div>
                <div id="myNavbar" class="collapse navbar-collapse ">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.php">Logout</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact US</a></li>
                    </ul>
                </div><!--/.nav-collapse -->

            </div>

        </nav>
        <div class="container-fluid">
        <div class="container-fluid" id="mainTitle">
            <h1 id="Title">Your CV Space</h1>
            <h3 class="SubTitle">Welcome {Student Name,kNumber}</h3>
        </div>
        <div class ="container-fluid" id="containerFluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div id="CVfeedback" style="height:100%;width:100%">
                            <h2 class="SubTitle">CV Feedback</h2>
                            <div class="table-responsive table-hover">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Staff's Name</th>
                                            <th>Feedback's date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Content goes here</td>
                                            <td><a href="studentDisplayCVFeedback.php">Content goes here</a></td>
                                        <tr>
                                        <tr>
                                            <td>Content goes here</td>
                                            <td>Content goes here</td>
                                        <tr>
                                        <tr>
                                            <td>Content goes here</td>
                                            <td>Content goes here</td>
                                        <tr>
                                        <tr>
                                            <td>Content goes here</td>
                                            <td>Content goes here</td>
                                        <tr>
                                        <tr>
                                            <td>Content goes here</td>
                                            <td>Content goes here</td>
                                        <tr>
                                        <tr>
                                            <td>Content goes here</td>
                                            <td>Content goes here</td>
                                        <tr>
                                        <tr>
                                            <td>Content goes here</td>
                                            <td>Content goes here</td>
                                        <tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-8">
                        <h2 class="SubTitle">CV Summary</h2>
                        <div id="fileUpload field" style="height:50%;width:100%">
                            <form role="form">
                                <div class="form-group">
                                    <label >Choose the CV that you want to upload</label>
                                    <input type="file" class="filestyle" data-buttonname="btn-primary" id="filestyle-3" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">
                                </div>
                            </form>
                        </div>

                        <div id="Summary" style="height:50%;width:100%">

                            <div class="container-fluid">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia reiciendis alias expedita illo corporis, animi possimus, libero nihil nesciunt doloremque quasi nemo culpa, deserunt temporibus mollitia unde molestias commodi distinctio Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam ipsum quod quasi fugit, tempore, dolor quam libero quae fuga vitae officia placeat hic. Aut eum eaque obcaecati ratione, voluptates tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim distinctio inventore minima, nam cumque ipsum sunt qui perspiciatis voluptate consectetur, numquam fugiat aperiam velit culpa ipsa dolorem sit sequi! Earum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam doloremque atque dolor quam ea quibusdam, non quis neque quos voluptates in quas sapiente! Ex perferendis rem quasi optio ipsa accusamus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore soluta accusamus quaerat veritatis facere nostrum aperiam reiciendis distinctio molestias repellendus odio cum ducimus nemo libero minus eos, nulla voluptas, ipsum.</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="SubTitle">CVs Uploaded</h2>
                        <div class="table-responsive table-hover">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>CV</th>
                                        <th>Date</th>
                                        <th>Completed</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="studentDisplayCVFeedback.php"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia reiciendis alias expedita illo corporis, animi possimus, libero nihil nesciunt doloremque quasi nemo culpa, deserunt temporibus mollitia unde molestias commodi distinctio Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam ipsum quod quasi fugit, tempore, dolor quam libero quae fuga vitae officia placeat hic. Aut eum eaque obcaecati ratione, voluptates tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim distinctio inventore minima, nam cumque ipsum sunt qui perspiciatis voluptate consectetur, numquam fugiat aperiam velit culpa ipsa dolorem sit sequi! Earum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam doloremque atque dolor quam ea quibusdam, non quis neque quos voluptates in quas sapiente! Ex perferendis rem quasi optio ipsa accusamus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore soluta accusamus quaerat veritatis facere nostrum aperiam reiciendis distinctio molestias repellendus odio cum ducimus nemo libero minus eos, nulla voluptas, ipsum.</p></a></td>
                                        <td>Content goes here</td>
                                        <td>
                                            <form action="." method="post">
                                                <label><input name="mycheckbox" type="checkbox" value="1" /></label>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>Content goes here</td>
                                        <td>Content goes here</td>
                                        <td>
                                            <form action="." method="post">
                                                <label><input name="mycheckbox" type="checkbox" value="1" /></label>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Content goes here</td>
                                        <td>Content goes here</td>
                                        <td>
                                            <form action="." method="post">
                                                <label><input name="mycheckbox" type="checkbox" value="1" /></label>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Content goes here</td>
                                        <td>Content goes here</td>
                                        <td>
                                            <form action="." method="post">
                                                <label><input name="mycheckbox" type="checkbox" value="1" /></label>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        </div>     
        <footer class="footer">
            <h2 id="FooterTitle">Copyright(c) Group 4</h2>     
        </footer> 

    </body>
</html>