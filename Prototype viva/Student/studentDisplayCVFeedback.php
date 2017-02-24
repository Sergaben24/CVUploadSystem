<!DOCTYPE html>
<html style="position: relative; min-height: 100%;">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../Jsscripts/bootstrap-filestyle.min.js"> </script>
        <link type="text/css" rel="stylesheet" href="../Cssstyles/optimisedMainPage.css"/>
        <script>
            var $head = $("#ifuckingframe").contents().find("head");
            $head.append($("<link>",{rel:"stylesheet",href:"../CssStyles/optimisedMainPage.css", type:"text/css"}));
            //console.log("fuck you, whoever you are");
            //console.log($head);
            //document.getElementById('ifuckingframe').contents().find('').
            
        </script>
        
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
                    <div class="containerImg"><a class="navbar-brand" href="#"><img id="logoImage" src="../images/KingstonLogo.png" ></a></div>
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

        <div class="container-fluid" id="mainTitle">
            <h1 id="Title">Your CV Space</h1>
            <h3 class="SubTitle">{Student Name, kNumber}</h3>
        </div>
        <div class ="container-fluid" id="containerFluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="CVdisplay" style="height:100%;width:100%">
                            <h2 class="SubTitle">Your CV</h2>
                            <div class="displayCv">
                                <!--<iframe src='https://view.officeapps.live.com/op/embed.aspx?src=http://kunet.kingston.ac.uk/~k1516561/CVfiles/SergioCV.docx' width='100%' height='623px' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>-->
                                <!--<iframe class="word" src="http://docs.google.com/gview?url=http://kunet.kingston.ac.uk/~k1516561/CVfiles/SergioCV.docx" width='100%' height='623px' frameborder='0'>open a word document in fancybox</iframe>-->
                                <iframe id="ifuckingframe"src="https://view.officeapps.live.com/op/embed.aspx?src=http://kunet.kingston.ac.uk/~k1516561/CVfiles/SergioCV.docx&embedded=true" width="100%" height="1000px"><link type="text/css" rel="stylesheet" href="../CssStyles/optimisedMainPage.css"/></iframe>
                                <div id="hideDownload" style="margin-bottom=-50px;"></div>
                                <!--<iframe src="//kunet.kingston.ac.uk/~k1516561/CVfiles/SergioCV.docx" width="100%" height="1000px"></iframe>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="SubTitle">Your Feedback</h2>
                        <div id="feedbackDisplay" style="height:100%;width:100%">
                            <p style="text-align:justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus non ipsam accusamus earum suscipit illum veniam est ex impedit architecto. Dolor qui aliquid unde voluptatem natus, dolore, omnis quae ullam.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus, fugit dolores. Ea nesciunt sed tempora possimus vitae aperiam, eaque quo numquam saepe dolores expedita, velit quas laboriosam, excepturi odit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, laboriosam eos neque fuga dolorum eum velit ab, nam necessitatibus nisi asperiores eius, illum iste. Ex incidunt dolorem inventore reiciendis pariatur.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis aliquam, accusamus minus, rerum necessitatibus magnam, dolor sit dolorem corrupti accusantium ullam aspernatur veniam. Possimus eum, adipisci ab odio, voluptate ipsum!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi rerum nihil tempora fugiat doloremque molestias laborum. Distinctio, voluptatum, ea. Impedit consequuntur, a, delectus ex illum at adipisci odit possimus unde.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus reiciendis molestias veniam aperiam nulla similique nisi unde, iste ut animi voluptates inventore architecto qui ducimus sit alias eum labore culpa.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex sequi itaque doloremque omnis, eligendi obcaecati eos praesentium repellendus facere, placeat laudantium officia quis quae eveniet officiis earum, maiores aliquam dolorem.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam asperiores soluta, officiis, ratione beatae dicta laborum nemo sint mollitia nulla doloremque, rerum consequatur quaerat cupiditate libero sunt, sequi iure.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, quibusdam non magnam atque modi facilis minima, asperiores unde, qui cum vel illum eveniet quasi rerum aliquid minus aliquam perferendis labore.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus non ipsam accusamus earum suscipit illum veniam est ex impedit architecto. Dolor qui aliquid unde voluptatem natus, dolore, omnis quae ullam.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus, fugit dolores. Ea nesciunt sed tempora possimus vitae aperiam, eaque quo numquam saepe dolores expedita, velit quas laboriosam, excepturi odit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, laboriosam eos neque fuga dolorum eum velit ab, nam necessitatibus nisi asperiores eius, illum iste. Ex incidunt dolorem inventore reiciendis pariatur.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis aliquam, accusamus minus, rerum necessitatibus magnam, dolor sit dolorem corrupti accusantium ullam aspernatur veniam. Possimus eum, adipisci ab odio, voluptate ipsum!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi rerum nihil tempora fugiat doloremque molestias laborum. Distinctio, voluptatum, ea. Impedit consequuntur, a, delectus ex illum at adipisci odit possimus unde.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus reiciendis molestias veniam aperiam nulla similique nisi unde, iste ut animi voluptates inventore architecto qui ducimus sit alias eum labore culpa.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex sequi itaque doloremque omnis, eligendi obcaecati eos praesentium repellendus facere, placeat laudantium officia quis quae eveniet officiis earum, maiores aliquam dolorem.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam asperiores soluta, officiis, ratione beatae dicta laborum nemo sint mollitia nulla doloremque, rerum consequatur quaerat cupiditate libero sunt, sequi iure.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, quibusdam non magnam atque modi facilis minima, asperiores unde, qui cum vel illum eveniet quasi rerum aliquid minus aliquam perferendis labore.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus non ipsam accusamus earum suscipit illum veniam est ex impedit architecto. Dolor qui aliquid unde voluptatem natus, dolore, omnis quae ullam.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus, fugit dolores. Ea nesciunt sed tempora possimus vitae aperiam, eaque quo numquam saepe dolores expedita, velit quas laboriosam, excepturi odit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, laboriosam eos neque fuga dolorum eum velit ab, nam necessitatibus nisi asperiores eius, illum iste. Ex incidunt dolorem inventore reiciendis pariatur.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis aliquam, accusamus minus, rerum necessitatibus magnam, dolor sit dolorem corrupti accusantium ullam aspernatur veniam. Possimus eum, adipisci ab odio, voluptate ipsum!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi rerum nihil tempora fugiat doloremque molestias laborum. Distinctio, voluptatum, ea. Impedit consequuntur, a, delectus ex illum at adipisci odit possimus unde.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus reiciendis molestias veniam aperiam nulla similique nisi unde, iste ut animi voluptates inventore architecto qui ducimus sit alias eum labore culpa.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex sequi itaque doloremque omnis, eligendi obcaecati eos praesentium repellendus facere, placeat laudantium officia quis quae eveniet officiis earum, maiores aliquam dolorem.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam asperiores soluta, officiis, ratione beatae dicta laborum nemo sint mollitia nulla doloremque, rerum consequatur quaerat cupiditate libero sunt, sequi iure.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, quibusdam non magnam atque modi facilis minima, asperiores unde, qui cum vel illum eveniet quasi rerum aliquid minus aliquam perferendis labore.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus non ipsam accusamus earum suscipit illum veniam est ex impedit architecto. Dolor qui aliquid unde voluptatem natus, dolore, omnis quae ullam.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus, fugit dolores. Ea nesciunt sed tempora possimus vitae aperiam, eaque quo numquam saepe dolores expedita, velit quas laboriosam, excepturi odit.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, laboriosam eos neque fuga dolorum eum velit ab, nam necessitatibus nisi asperiores eius, illum iste. Ex incidunt dolorem inventore reiciendis pariatur.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis aliquam, accusamus minus, rerum necessitatibus magnam, dolor sit dolorem corrupti accusantium ullam aspernatur veniam. Possimus eum, adipisci ab odio, voluptate ipsum!
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi rerum nihil tempora fugiat doloremque molestias laborum. Distinctio, voluptatum, ea. Impedit consequuntur, a, delectus ex illum at adipisci odit possimus unde.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus reiciendis molestias veniam aperiam nulla similique nisi unde, iste ut animi voluptates inventore architecto qui ducimus sit alias eum labore culpa.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex sequi itaque doloremque omnis, eligendi obcaecati eos praesentium repellendus facere, placeat laudantium officia quis quae eveniet officiis earum, maiores aliquam dolorem.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam asperiores soluta, officiis, ratione beatae dicta laborum nemo sint mollitia nulla doloremque, rerum consequatur quaerat cupiditate libero sunt, sequi iure.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, quibusdam non magnam atque modi facilis minima, asperiores unde, qui cum vel illum eveniet quasi rerum aliquid minus aliquam perferendis labore.
                            </p>
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