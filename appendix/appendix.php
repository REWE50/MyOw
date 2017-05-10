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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Design<b class="caret"></b></a>
                                <!-- a nested unordered list to create a dropdown menu -->
                                <!-- start of innder ul -->
                                <ul class="dropdown-menu">
                                <li><a href="../product-design/structure-map.php">Structure Map</a></li>
                                <li><a href="../product-design/wireframes.php">Wireframes</a></li>
                                <li><a href="../product-design/task-diagram.php">Task Diagram</a></li>
                                <li><a href="../product-design/storyboard.php">Storyboard</a></li>
                                <li><a href="../product-design/state-transition-diagram-1.php">State Transition Diagram - Key Function</a></li>
                                <li><a href="../product-design/state-transition-diagram-2.php">State Transition Diagram - All Functions</a></li>

                            </ul><!-- end of inner ul -->
                        </li>
                        <li><a href="../references.php">References</a></li>
                        <li class="active"><a href="../appendix/appendix.php">Appendix</a></li>
                        
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
            
            <!-- start main row 2 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>Design Process</h2>
                    <p>We firstly looked at the branding of the MyOw brand, via logos, fonts and colours.</p>
                </div>
            </div><!-- end main row 2 -->
            
            <!-- start main row 3 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h2>Initial Sketches</h2>
                    <div class="row">
                    	<div class="col-lg-4">
                        	<img src="" class="img-responsive">
                        </div>
                        
                        <div class="col-lg-4">
                        	<img src="" class="img-responsive">
                        </div>
                        
                        <div class="col-lg-4">
                        	<img src="" class="img-responsive">
                        </div>
                    </div>
	           </div>
            </div><!-- end main row 3 -->
            
            
            <!-- start main row 4 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>Mindmap</h2>
                    <img src="" class="img-responsive">
                    <p>We began the process by highlighting the 5 key areas that the app focuses on. In order of importance according to our user research they are, AI Symptom checker, Pet profile, Ai lost & found Checker, pet health guidance and an Emergency Vet finder. From there we tried to extract all the core feeling and actions that comes to mind when thinking about MyOw.</p>
                    <p>To view a live more extended version of the mind map please click on the link provided, MyOw Mind Map</p>
                </div>
            </div><!-- end main row 4 -->
            
            
            <!-- start main row 5 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>The Design Process</h2>
                    <h3>The Logo</h3>
                    <p>As can be seen from  the three pages of sketches, there was a good deal of thought put into the MyOw logo. From the work done on the Mood Board, Mind Map and discussions we had over several meetings we knew what we wanted to tell the viewer. Below are a several examples of earlier revisions of the logo.</p>
                    <img src="" class="img-responsive">
                </div>
            </div><!-- end main row 5 -->
            
            
            <!-- start main row 6 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h1>Colour</h1> 
                    <p>The colour palette was based on the colours of a Peacocks. This is naturally formed in nature and so a more organic palette.  To veer away from the palit being all strong colours, pale shades were chosen. </p>
                    <img src="" class="img-responsive">
                    <img src="" class="img-responsive">
                    
                    <table width="100%" border="1" cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td width="16%">Colour:</td>
                            <td width="16%">Light Blue</td>
                            <td width="16%">Mid Blue</td>
                            <td width="16%">Purple</td>
                            <td width="16%">Pale Yellow</td>
                            <td width="16%">Green</td>
                        </tr>
                        <tr>
                        	<td>Hex:</td>
                            <td>#E7F3F9</td>
                            <td>#118ECE</td>
                            <td>#A695C7</td>
                            <td>#FBFAEB</td>
                            <td>#66cc33</td>
                        </tr>       
                    </table>
                </div>
            </div><!-- end main row 6 -->
            
            
            <!-- start main row 7 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>Typography</h2>
                    <p>We initially looked at a very thick font, based on Walibi Bold but then outlined and edited to suit the exact style we were going for. This style was eventually dropped after a meeting in which the group were unable to all agree on a final logo Design.</p>

					<p>The final logo design uses the free font Odin Rounded Regular which was created by Frank Hemmekam, it’s clean and linear look invokes a sense of trust that is needed for a medical application. The secondary Sans-serif fonts were chosen to compliment each other and for their ease of readability, as the app advises its users on what might be a life or death situation. A key factor was to clearly make out every letter on the page. Oswald Regular was chosen for the Secondary Font to be used in headings and Work-Sans Regular for the Sans-serif font which will be used for the majority of the body text. The Tertiary font Quicksand Book was chosen to directly complement the logo font it has a similar look and feel and will predominantly be used for personal headings and messages throughout the app and other forms of media.</p>
                    
                    <table width="100%" border="2" cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td width="25%" id="logo-font">Logo Font</td>
                            <td width="25%" id="secondary-font">Secondary Font</td>
                            <td width="25%" id="sans-serif-font">Sans-Serif Font</td>
                            <td width="25%" id="tertiary-font">Tertiary Font</td>
                        </tr>
                        <tr>
                        	<td>Odin Rounded Regular</td>
                            <td>Oswald Regular</td>
                            <td>Work Sans Regular</td>
                            <td>Quicksand Book</td>
                        </tr>
                    </table>
                </div>
            </div><!-- end main row 7 -->
            
            
            <!-- start main row 8 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>App Research</h2>
                    <p>In consideration for designing the phone app I had noticed a recent trend from bottom navigation on phone apps.</p>
                    <img src="" class="img-responsive">
                    <img src="" class="img-responsive">
                    <img src="" class="img-responsive">
                    <p>There has been a shift towards this bottom navigation. Facebook are currently trialing bottom navigation - (<a href="http://www.androidpolice.com/2017/02/11/facebook-testing-bottom-navigation-bar-app/" target="_blank">http://www.androidpolice.com/2017/02/11/facebook-testing-bottom-navigation-bar-app/</a>).</p>
                    <p>In Steven Hoober research (<a href="http://www.uxmatters.com/mt/archives/2013/02/how-do-users-really-hold-mobile-devices.php" target="_blank">http://www.uxmatters.com/mt/archives/2013/02/how-do-users-really-hold-mobile-devices.php</a>) he found that 49% of people use their thumbs to navigate their phones. A top navigation bar is not within this reach, hence the move. Tha navigation should be top level get to areas and should contain no more than five icons (<a href="http://babich.biz/perfect-bottom-navigation-for-mobile-app/" target="_blank">http://babich.biz/perfect-bottom-navigation-for-mobile-app/</a>)</p>
                    <p>These all helped within the design process. </p>
                </div>
            </div><!-- end main row 8 -->
            
            
            <!-- start main row 9 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>App Sketches</h2>
                    <p>We firstly looked at the branding of the MyOw brand, via logos, fonts and colours.</p>
                    <img src="" class="img-responsive">
                    <img src="" class="img-responsive">
                    <img src="" class="img-responsive">
                </div>
            </div><!-- end main row 9 -->
            
            
            <!-- start main row 10 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>App Development</h2>
                    
                    <img src="" class="img-responsive">
                    <img src="" class="img-responsive">
                    <img src="" class="img-responsive">
                    <img src="" class="img-responsive">
                </div>
            </div><!-- end main row 10 -->
            
            
            <!-- start main row 11 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>Website Development</h2>
                    <p>From our initial prototype, our original Bootstrap website went through a number of iterations.</p>
                    <p>It primarily stuck to the original design, but we trialled a fixed bottom navigation bar, but decided against it as it took up too much space from the site's content.</p>
                    <img src="site-1.png" class="img-responsive">
                    <br>
                    <img src="site-2.png" class="img-responsive">
                    <br>
                    <img src="site-3.png" class="img-responsive">
                    <br>
                    <img src="site-4.png" class="img-responsive">
                    <br>
                    <img src="site-6.png" class="img-responsive">
                </div>
            </div><!-- end main row 11 -->
            
            
            
            
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
                        <li class="active"><a href="../index.php">What</a></li>
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Design<b class="caret"></b></a>
                            <!-- a nested unordered list to create a dropdown menu -->
                            <!-- start of innder ul -->
                            <ul class="dropdown-menu">
                                <li><a href="../product-design/structure-map.php">Structure Map</a></li>
                                <li><a href="../product-design/wireframes.php">Wireframes</a></li>
                                <li><a href="../product-design/task-diagram.php">Task Diagram</a></li>
                                <li><a href="../product-design/storyboard.php">Storyboard</a></li>
                                <li><a href="../product-design/state-transition-diagram-1.php">State Transition Diagram - Key Function</a></li>
                                <li><a href="../product-design/state-transition-diagram-2.php">State Transition Diagram - All Functions</a></li>
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
            <div class="row no-gutters" id="copyright">
                <!-- start copyright and social media -->
                  <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 container">
                        <table width="75%" cellspacing="2" cellpadding="2" class="align-table">
                          <tbody>
                            <tr>
                              <th width="20%" scope="col" class="align-right"><a href="https://www.facebook.com/DigitalCareAssistant/" target="new"><img src="../images/fb.png" id="fb"></a></th>
                              <th width="60%" scope="col" class="align-center">Copyright MyOw <?php echo date("Y");?></th>
                              <th width="20%" scope="col" class="align-left"><a href="https://twitter.com/MyOw_DCA" target="new"><img src="../images/twitter.png" id="twitter"></a></th>
                            </tr>
                          </tbody>
                        </table>
                 </div><!-- end copyright and social media -->
            </div><!-- row containing copyright and social media div -->
        </div><!-- end div containing navbar AND copyright/social media -->
    </div><!-- end fluid container containing bottom navbar and social media/copyright -->
 
 
 
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/home-custom-scripts.js"></script>
</body>

</html>
