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
                        <li class="dropdown active">
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
            </div><!-- end top fixed navbar --> 
        </div><!-- end div containing navbar -->
    </div><!-- end fluid container containing logo top fixed navbar -->






	<!-- start main container -->
	<div class="container white-bg">       
       
        <!-- start main content -->
        <div id="main-content">
                    
        	<!-- start main row 1 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h1>Use Case Actors</h1>
                	<!-- start table of use cases actors and goals -->
                    <table cellpadding="10" cellspacing="10" class="dark-grey-bg padding-five">
                      <tr>
                        
                        <td width="40%" class="cell-top-left"><p><strong>ID</strong>: A-1<br>
                          <strong>Primary Actor</strong>: Pet Owner</p><p>A Pet Owner is a living person who has established an account on MyOw. They may be the actual pet's owner, or other care giver. Other care givers may include friends, relations or professionals who regularly take care of the pet. </p>
                          <p><strong>Goals</strong>: </p>
                          <ul>
                            <li>Diagnose Sick Pet (UC-1)</li>
                            <li>Find nearest relevant Vet (UC-2)</li>
                            <li>Maintain General Pet-Health (UC-3)</li>
                            <li>Report Lost / Found Pet (UC-4)</li>
                            <li>Interact with Vets on Vorum (UC-6)</li>                           
                            <li>Receive Appointment / Medication Reminders (UC-5)</li>
                            <li>Share Current Pet Profile with Vet (UC-5.3)</li>
                          </ul></td>
                      </tr>
                      <tr>
                        <td class="light-grey-bg">&nbsp;</td>
                      </tr>
                      <tr>
                        
                        <td class="cell-top-left"><p><strong>ID</strong>: A-2<br>
                          <strong>Secondary Actor</strong>: Vet</p><p>A Vet is a living person who represents a Veterinary Practice on MyOw. They may be an actual Vet who may give medical advice, or other member of staff who may organise appointments. </p>
                          <p><strong>Goals</strong>: </p>
                          <ul>
                            <li>Communicate With Pet Owners via Vorum (UC-8)</li>
                            <li>Receive Pet Profile Information (UC-7)</li> 
                          </ul></td>
                      </tr>
                      <tr>
                        <td class="light-grey-bg">&nbsp;</td>
                      </tr>
                      <tr>
                        
                        <td class="cell-top-left"><p><strong>ID</strong>: A-3<br>
                          <strong>Secondary Actor</strong>: AI Server</p><p>The AI Server is Google's TensorFlow open-source Artificial Intelligence Engine. </p>
                          <p><strong>Goals</strong>: </p>
                          <ul>
                            <li>Diagnose Written or Spoken Pet Symptoms from Pet Owner (UC-9)</li>
                            <li>Find Pet Owner's Relevant Local Vet (UC-10)</li>
                            <li>Find Pet Owner's Lost / Found Pets (UC-11)</li>
                            <li>Provide Pet Specific Health Information to Pet Owner (UC-14)</li>
                          </ul></td>
                      </tr>
                      <tr>
                        <td class="light-grey-bg">&nbsp;</td>
                      </tr>
                      <tr>
                       
                        <td class="cell-top-left"><p><strong>ID</strong>: A-5<br>
                          <strong>Secondary Actor</strong>: MyOw Server</p><p>The MyOw Server is a backend computer server that hosts the MyOw app. </p>
                          <p><strong>Goals</strong>: </p>
                          <ul>
                            <li>To Communicate With Pet Owner (UC-15)</li>
                            <li>To Communicate With AI Server (UC-16)</li>
                            <li>To Store Information For Pet Owner (UC-17)</li>
                          </ul></td>
                      </tr>
                      <tr>
                        <td class="light-grey-bg">&nbsp;</td>
                      </tr>
                      <tr>
                        
                        <td class="cell-top-left"><p><strong>ID</strong>: A-6<br>
                          <strong>Secondary Actor</strong>: Google Maps API</p><p>Google Maps API is an interface to allow the app display interactive maps to the Pet Owner. </p>
                          <p><strong>Goals</strong>: </p>
                          <p>Display Vet Location Details (UC-18)</p></td>
                      </tr>
                    </table><!-- end table of use cases actors and goals -->

	           </div>
            </div><!-- end main row 1 -->
            
            <!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
                                 
            <!-- start main row 3 -->
            <div class="row">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 align-justify">
                	<h2>Use Case Actors Context Diagram</h2>
                    <img src="images/use-case-actors.png" alt="Use Case Actor Context Diagram" class="img-responsive">
                </div>
            </div><!-- end main row 3 -->
            
            <!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
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
                        <li class="dropdown active">
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
    <script src="../js/custom-scripts.js"></script>
</body>

</html>
