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
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/custom-styles-wide.css" rel="stylesheet">
        
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
                	<a href="index.php"><img src="images/myow-logo.png" alt="MyOw Logo"></a>
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
                        <li class="active"><a href="index.php">What</a></li>
                        <li><a href="who/persona-scenario.php">Who</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">How<b class="caret"></b></a>
                            <!-- a nested unordered list to create a dropdown menu -->
                            <!-- start of innder ul -->
                            <ul class="dropdown-menu">
                                <li><a href="how/use-case-actors.php">Use Case Actors</a></li>
                                <li><a href="how/use-case-diagram.php">Use Case Diagram</a></li>
                                <li><a href="how/use-case-uc1.php">Use Case UC-1</a></li>
                                <li><a href="how/use-case-uc2.php">Use Case UC-2</a></li>
                                <li><a href="how/use-case-uc3.php">Use Case UC-3</a></li>
                            </ul><!-- end of inner ul -->
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Design<b class="caret"></b></a>
                                <!-- a nested unordered list to create a dropdown menu -->
                                <!-- start of innder ul -->
                                <ul class="dropdown-menu">
                                <li><a href="product-design/structure-map.php">Structure Map</a></li>
                                <li><a href="product-design/wireframes.php">Wireframes</a></li>
                                <li><a href="product-design/task-diagram.php">Task Diagram</a></li>
                                <li><a href="product-design/storyboard.php">Storyboard</a></li>
                                <li><a href="product-design/state-transition-diagram-1.php">State Transition Diagram - Key Function</a></li>
                                <li><a href="product-design/state-transition-diagram-2.php">State Transition Diagram - All Functions</a></li>

                            </ul><!-- end of inner ul -->
                        </li>
                        <li><a href="references.php">References</a></li>
                        <li><a href="appendix/appendix.php">Appendix</a></li>
                        
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
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<img src="images/main-banner.png" class="img-responsive" alt="Owner with pet">
                </div>
            </div><!-- end main row 1 -->
            
            <!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
            
            <!-- start main row 2 -->
            <div class="row">
                <!-- start video placeholder -->
                <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                    <h1 class="no-padding">What is MyOw?</h1>
                    <p>In the MyOw Pet Care App we want the design to provide the user with confidence in the information provided so we are using professional logos which include a medical emblem. We also want to have a low number of screens so that users can quickly and easily access key medical information that may help save their pet’s life. </p>
                </div><!-- end video placeholder -->
                
                <!-- start welcome text -->
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 align-justify">
                	<a href="#"><img src="images/vid-placeholder-big.jpg" class="img-responsive" alt="Video Placeholder"></a>
                </div><!-- end welcome text -->
            </div><!-- end main row 2 -->
            
            <!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
            
        </div><!-- end main content -->
    </div><!-- end main container -->
            
              
            
            
    <!-- start fluid middle container -->        
    <div class="container-fluid definition-banner">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- start definitions banner (db) -->
                            <div class="col-lg-12 container">
                                <!-- start db row 1 -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1>What Defines Our Product</h1>
                                    </div>
                                </div><!-- end db row 1 -->
                                
                                <!-- start db row 2 -->
                                <div class="row">
                                    <!-- start 8-col centered div -->
                                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                        <!-- start new row to contain individual definitions -->
                                        <div class="row align-table">
                                            <!-- start definition 1 -->	
                                            <div class="col-lg-4 col-md-4 col-sm-4 align-center">
                                                <div class="row">
                                                    <img src="images/trusted-information.png" alt="Vet holding Dog">
                                                </div>
                                                
                                                <div class="row">
                                                    <h3>Trusted Information</h3>
                                                </div>
                                            </div><!-- end definition 1 -->
                                            
                                            <!-- start definition 2 -->             
                                            <div class="col-lg-4 col-md-4 col-sm-4 align-center">
                                                <div class="row">
                                                    <img src="images/care-advice.png" alt="Dog at Vet Appointment">
                                                </div>
                                                
                                                <div class="row">
                                                    <h3>Specific Care Advice</h3>
                                                </div>
                                            </div><!-- end definition 2 -->
                                            
                                            <!-- start definition 3 -->           
                                            <div class="col-lg-4 col-md-4 col-sm-4 align-center">
                                                <div class="row">
                                                    <img src="images/integrated-profile.png" alt="A Playful Cat in a Bag">
                                                </div>
                                                
                                                <div class="row">
                                                    <h3>Integrated Profile</h3>
                                                </div>
                                            </div><!-- end definition 3 -->                  
                                        </div><!-- end row containing individual definitions -->
                                    </div><!-- end 8-col dentered div -->    
                                </div><!-- end db row 2 -->                         
                            </div><!-- end definitions banner (db) -->
                    	</div>
                   </div>
               </div>
           </div>
        </div>
    </div><!-- end fluid middle container -->
    
    
    
    
    <!-- start of 2nd main container -->
    <div class="container">
    
        <!-- start main row 4 -->
        <div class="row" id="dca-div">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 align-justify">
                <h2><img src="images/digital-care-assistant.png" class="img-responsive padding-left pull-right" id="dca" alt="A MyOw User With Their Dog">Digital Care Assistant</h2>
                <p>MyOw is an app which acts as a digital care assistant by providing information to maintain the animal's well-being, such as pet profile updates, pet profile sharing, pet specific information integration and pet appointments and reminders. </p>
                <p>The app will also be used to assess the current medical condition of a pet based on information provided by the user. By opening up a dialogue with the user, it diagnoses the current medical condition of the animal. It then provides a two-phase set of solutions to help the animal; firstly suggesting medical treatments that can be administered by the user. If the user feels they need to visit a veterinarian, the app then connects the user with the most appropriate practice to treat the animal. It then sends that vet all relevant data on the animal's medical situation, so he or she has a clear picture of the animal's current condition and its medical history. </p>
                
            </div>
        </div><!-- end main row 4 -->       
    </div><!-- end of 2nd main container -->
    
    
    
    
    

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
                        <li class="active"><a href="index.php">What</a></li>
                        <li><a href="who/persona-scenario.php">Who</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">How<b class="caret"></b></a>
                            <!-- a nested unordered list to create a dropdown menu -->
                            <!-- start of innder ul -->
                            <ul class="dropdown-menu">
                                <li><a href="how/use-case-actors.php">Use Case Actors</a></li>
                                <li><a href="how/use-case-diagram.php">Use Case Diagram</a></li>
                                <li><a href="how/use-case-uc1.php">Use Case UC-1</a></li>
                                <li><a href="how/use-case-uc2.php">Use Case UC-2</a></li>
                                <li><a href="how/use-case-uc3.php">Use Case UC-3</a></li>
                            </ul><!-- end of inner ul -->
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Design<b class="caret"></b></a>
                            <!-- a nested unordered list to create a dropdown menu -->
                            <!-- start of innder ul -->
                            <ul class="dropdown-menu">
                                <li><a href="product-design/structure-map.php">Structure Map</a></li>
                                <li><a href="product-design/wireframes.php">Wireframes</a></li>
                                <li><a href="product-design/task-diagram.php">Task Diagram</a></li>
                                <li><a href="product-design/storyboard.php">Storyboard</a></li>
                                <li><a href="product-design/state-transition-diagram-1.php">State Transition Diagram - Key Function</a></li>
                                <li><a href="product-design/state-transition-diagram-2.php">State Transition Diagram - All Functions</a></li>
                            </ul><!-- end of inner ul -->
                        </li>
                        <li><a href="references.php">References</a></li>
                        <li><a href="appendix/appendix.php">Appendix</a></li>
                        
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
                              <th width="20%" scope="col" class="align-right"><a href="https://www.facebook.com/DigitalCareAssistant/" target="new"><img src="images/fb.png" id="fb"></a></th>
                              <th width="60%" scope="col" class="align-center">Copyright MyOw <?php echo date("Y");?></th>
                              <th width="20%" scope="col" class="align-left"><a href="https://twitter.com/MyOw_DCA" target="new"><img src="images/twitter.png" id="twitter"></a></th>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/home-custom-scripts.js"></script>
</body>

</html>
