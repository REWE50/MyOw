<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyOw Pet Care App</title>
    
     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/custom-styles-wide.css" rel="stylesheet">
        
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    <!--
    	Team 23 Digital Direct
        UXCD Assessment 3
        Bootstrap Website
    -->    
    
</head>

<body>

	<!-- start fluid container containing logo top fixed navbar -->
    <div class="container-fluid navbar navbar-custom navbar-fixed-top no-gutters">
        <!-- start row containing logo -->
        <div class="row white-bg no-gutters">
            <div class="container white-bg red-bg">
                <!-- MyOw logo -->
                <div class="col-lg-12" id="logo">
                	<a href="../index.php"><img src="../images/myow-logo.png" alt="MyOw Logo"></a>
                </div>
            </div>    
        </div><!-- end row containing logo -->
    
        <!-- start div containing navbar -->
        <div class="col-lg-12 col-md-12 col-sm-12 no-gutters">      
            <!-- start of top fixed navbar -->
            <div class="col-lg-12 col-md-12 col-sm-12 container no-gutters">
                <!-- creating a button that will display when the navbar collapses for mobile viewing using data-attributes -->
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <a href="#" class="btn btn-default btn-sm">
                        <!-- scalable glyphicon used to display "hamburger" icon to denote dropdown-menu navbar -->
                        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                    </a>
                </button>
                
                <div class="collapse navbar-collapse navHeaderCollapse" id="my-nav">
                    <!-- start of outer ul -->
                    <ul class="nav navbar-nav">
                        <!-- active class attached to "current" list item to show what page we are currently on -->
                        <li><a href="../index.php">What</a></li>
                        <li><a href="../who/persona-scenario.php">Who</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">How<b class="caret"></b></a>
                            <!-- a nested unordered list to create a dropdown menu -->
                            <!-- start of innder ul -->
                            <ul class="dropdown-menu">
                                <li><a href="../how/use-case-actors.php">Use Case Actors</a></li>
                                <li><a href="../how/use-case-diagram.php">Use Case Diagram</a></li>
                                <li><a href="../how/use-case-uc1.php">Use Case UC-1</a></li>
                                <li><a href="../how/use-case-uc2.php">Use Case UC-2</a></li>
                                <li><a href="../how/use-case-uc3.php">Use Case UC-3</a></li>
                            </ul><!-- end of inner ul -->
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Design<b class="caret"></b></a>
                                <!-- a nested unordered list to create a dropdown menu -->
                                <!-- start of innder ul -->
                                <ul class="dropdown-menu">
                                <li><a href="structure-map.php">Structure Map</a></li>
                                <li><a href="wireframes.php">Wireframes</a></li>
                                <li><a href="task-diagram.php">Task Diagram</a></li>
                                <li><a href="storyboard.php">Storyboard</a></li>
                                <li><a href="state-transition-diagram-1.php">State Transition Diagram - Key Function</a></li>
                                <li><a href="state-transition-diagram-2.php">State Transition Diagram - All Functions</a></li>

                            </ul><!-- end of inner ul -->
                        </li>
                        <li><a href="../references.php">References</a></li>
                        <li><a href="../appendix/appendix.php">Appendix</a></li>
                        
                        <!--
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Section<b class="caret"></b></a>
                            <!-- a nested unordered list to create a dropdown menu - ->
                            <!-- start of innder ul - ->
                            <ul class="dropdown-menu">
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                        	</ul><!-- end of inner ul - ->
                        </li>
                        -->    
                    </ul><!-- end of outer ul -->
                </div><!-- end of list items -->                
            </div><!-- end top fixed navbar --> 
        </div><!-- end div containing navbar -->
    </div><!-- end fluid container containing logo top fixed navbar -->



	<!-- start main container -->
    <div class="container white-bg">


		<!-- start main content -->
        <div id="main-content">
        
        <!-- start main row 1 -->
            <div class="row container">
            	<div class="col-lg-12">
                	<h1>Storyboard</h1>
	           </div>
            </div><!-- end main row 1 -->
        
          	<!-- start main row 1 -->
            <div class="row container">
            	<div class="col-lg-12">
                	<div class="row">
                    	<br>
                   		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="sb1">
                    		<img src="images/storyboard-1.png" class="img-responsive" alt="Storyboard 1">
                      	</div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="sb2">
                    		<img src="images/storyboard-2.png" class="img-responsive" alt="Storyboard 2">
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="sb3">
                   			<img src="images/storyboard-3.png" class="img-responsive" alt="Storyboard 3">
                        </div>
                    
                   		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="sb4">
                    		<img src="images/storyboard-4.png" class="img-responsive" alt="Storyboard 4">
                      	</div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="sb5">
                    		<img src="images/storyboard-5.png" class="img-responsive" alt="Storyboard 5">
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="sb6">
                   			<img src="images/storyboard-6.png" class="img-responsive" alt="Storyboard 6">
                        </div>
                    </div>
                   
                    
	           </div>
            </div><!-- end main row 1 -->         
        </div><!-- end main content -->
    </div><!-- end main container -->
    
    
    
    
    <!-- start fluid container containing bottom navbar and social media/copyright -->
    <div class="container-fluid nav-bg no-gutters" id="bottom-nav-container">
        <!-- start div containing navbar AND copyright/social media -->
        <div class="col-lg-12 no-gutters">      
            <!-- start of bottom navbar -->
            <div class="container-fluid navbar navbar-custom-bottom no-gutters no-bottom-margin" id="bottom-nav">
                                        
                <!-- creating a button that will display when the navbar collapses for mobile viewing using data-attributes -->
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapseBottom">
                    <a href="#" class="btn btn-default btn-sm">
                        <!-- scalable glyphicon used to display "hamburger" icon to denote dropdown-menu navbar -->
                        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                    </a>
                </button>
                
                <div class="collapse navbar-collapse navHeaderCollapseBottom dropup" id="my-bottom-nav">
                    <!-- start of outer ul -->
                    <ul class="nav navbar-nav">
                    
                        <!-- active class attached to "current" list item to show what page we are currently on -->
                        <li><a href="../index.php">What</a></li>
                        <li><a href="../who/persona-scenario.php">Who</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">How<b class="caret"></b></a>
                            <!-- a nested unordered list to create a dropdown menu -->
                            <!-- start of innder ul -->
                            <ul class="dropdown-menu">
                                <li><a href="../how/use-case-actors.php">Use Case Actors</a></li>
                                <li><a href="../how/use-case-diagram.php">Use Case Diagram</a></li>
                                <li><a href="../how/use-case-uc1.php">Use Case UC-1</a></li>
                                <li><a href="../how/use-case-uc2.php">Use Case UC-2</a></li>
                                <li><a href="../how/use-case-uc3.php">Use Case UC-3</a></li>
                            </ul><!-- end of inner ul -->
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Design<b class="caret"></b></a>
                            <!-- a nested unordered list to create a dropdown menu -->
                            <!-- start of innder ul -->
                            <ul class="dropdown-menu">
                                <li><a href="structure-map.php">Structure Map</a></li>
                                <li><a href="wireframes.php">Wireframes</a></li>
                                <li><a href="task-diagram.php">Task Diagram</a></li>
                                <li><a href="storyboard.php">Storyboard</a></li>
                                <li><a href="state-transition-diagram-1.php">State Transition Diagram - Key Function</a></li>
                                <li><a href="state-transition-diagram-2.php">State Transition Diagram - All Functions</a></li>
                            </ul><!-- end of inner ul -->
                        </li>
                        <li><a href="../references.php">References</a></li>
                        <li><a href="../appendix/appendix.php">Appendix</a></li>
                        
                        <!--
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Section<b class="caret"></b></a>
                            <!-- a nested unordered list to create a dropdown menu - ->
                            <!-- start of innder ul - ->
                            <ul class="dropdown-menu">
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Link</a></li>
                            </ul><!-- end of inner ul - ->
                        </li>
                        -->
                    </ul><!-- end of outer ul -->
                </div><!-- end of list items -->                
              </div><!-- end bottom nav --> 
        
        
            <!-- start row containing copyright and social media div -->
            <div class="row no-gutters" id="social-media">
                <!-- start copyright and social media -->
                  <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 container">
                        <div class="row">
                            <div class="col-lg-1 col-lg-offset-3 col-md-1 col-md-offset-3 col-sm-1 col-sm-offset-3 col-xs-2 align-center">
                                <a href="https://www.facebook.com/DigitalCareAssistant/" target="new"><img src="../images/fb.png" id="fb"></a>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 align-center" id="copyright">
                                <strong><?php include'../classes/Copyright.class.php'; $c1 = new Copyright(); $c1->insertCopyright(); ?></strong>
                            </div>
                            
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 align-center">
                                <a href="https://twitter.com/MyOw_DCA" target="new"><img src="../images/twitter.png" id="twitter"></a>
                            </div>
                        </div>          
                 </div><!-- end copyright and social media -->
            </div><!-- end row containing copyright and social media div -->
            
        </div><!-- end div containing navbar AND copyright/social media -->
    </div><!-- end fluid container containing bottom navbar and social media/copyright -->
    
    
    
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/custom-scripts.js"></script>
</body>

</html>
