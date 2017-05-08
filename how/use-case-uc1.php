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
    <link href="../css/custom-styles.css" rel="stylesheet">
        
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

	<!-- start main container -->
	<div class="container white-bg">  
        
        <!-- start of fixed navbar -->
        <div class="container navbar navbar-custom navbar-fixed-top no-gutters">
        	
     		<!-- MyOw logo -->
            <div class="col-lg-12" id="logo">
            	<a href="../index.php"><img src="../images/myow-logo.png"></a>
            </div>
                            
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
                            <li><a href="use-case-actors.php">Use Case Actors</a></li>
                            <li><a href="use-case-diagram.php">Use Case Diagram</a></li>
                            <li><a href="use-case-uc1.php">Use Case UC-1</a></li>
                            <li><a href="use-case-uc2.php">Use Case UC-2</a></li>
                            <li><a href="use-case-uc3.php">Use Case UC-3</a></li>
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
                            <li><a href="../product-design/state-transition-diagram.php">State Transition Diagram</a></li>
                        </ul><!-- end of inner ul -->
                  	</li>
                    <li><a href="../references.php">References</a></li>
                    <li><a href="../appendix.php">Appendix</a></li>
                    
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
            </div>
        </div><!-- end of fixed navbar -->
        
       
        <!-- start main content -->
        <div id="main-content">

        	<!-- start main row 1 -->
            <div class="row">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 align-justify">
                	<h1>Written Use Cases</h1>
                    <div class="col-lg-12">
                    	<h2>UC-1 Diagnose Pet</h2>
                    </div>
                    
                    <div class="col-lg-12">
                    	<strong>Parent</strong>: MyOw Pet Care app
                    </div>
                    
                    <div class="col-lg-12">
                    	<strong>Primary Actors</strong>: Pet Owner
                    </div>
                    
                    <div class="col-lg-12">
                    	<strong>Secondary Actors</strong>: MyOw Server, AI Server, Google Maps API
                    </div>
                    
                    <div class="col-lg-12">
                    	<strong>Brief Description/Goal</strong>: The Pet Owner has a sick pet and wants to determine if medical attention is warranted.
                    </div>
                    
                    <div class="col-lg-12">
                    	<strong>Preconditions</strong>: The Pet Owner must have an account with MyOw.
The Pet Owner must have a data connection.
The Pet Owner must be logged into their MyOw account. 
                    </div>
                    
                    <div class="col-lg-12">
                    	<strong>Success Guarantee</strong>: The Pet Owner knows whether their pet must be brought to a Vet or not.
                    </div>
                    
                    <div class="col-lg-12">
                      <table>
                        <tr>
                          <td>
                            <b>Flow of Events</b>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p><strong>Main Success Scenario</strong>:</p>
                            <ol>
                              <li>The Pet Owner chooses the Symptoms Checker function of the app</li>
                              <li>The MyOw Server asks the user to enter its pet's symptoms</li>
                              <li>The Pet Owner enters the pet's symptoms orally</li>
                              <li>The AI Server converts the user's speech to text</li>
                              <li>The AI Server is passed the Pet Profile by the MyOw Server</li>
                              <li>The AI Server diagnoses the pet</li>
                              <li>The AI Server returns the diagnosis to the MyOw Server</li>
                              <li>The MyOw Server displays the diagnosis to the Pet Owner</li>
                            </ol>
                            
                            <p><strong>Extensions</strong>:</p>
                            
                            <p>8.a If the pet requires immediate medical attention,
                                <ol>
                                    <li>The AI Server follows Use Case 'Find Vet Practice' (<a href="written-use-case-2.php">UC-2</a>)</li>
                                    <li>The Pet Owner's mobile device reports the Pet Owner's location to the AI Server</li>
                                    <li>The AI Server accesses the MyOw Server and reads the Pet Profile to determine what kind of pet is to be treated</li>
                                    <li>The AI Server accesses the Google Maps API to see what Vets are in the Pet Owner's area</li>
                                    <li>The AI Server determines which is the most appropriate local Vet that is open, close to the Pet Owner and can treat their pet</li>
                                    <li>The information is returned to the MyOw Server</li>
                                    <li>The MyOw Server displays the information to the Pet Owner</li>
                                    <li>If the Pet Owner clicks on the Vet suggested by the AI Server</li>
                                    <li>The AI Server determines the most relevant open local Vet</li>
                                    <li>The AI Server returns this data to the MyOw Server</li>
                                    <li>The MyOw Server displays this data to the Pet Owner</li>
                                    <ol>
                                        <li>If the Pet Owner chooses a Vet to attend, </li>
                                            <ol>
                                                <li>The AI Server sends the Pet Profile to the chosen Vet</li>
                                                <li>The AI Server makes an appointment with the Vet for the Pet Owner</li>
                                            </ol>
                                    </ol>
                                </ol>
                            </p>
                            
                            <p>8.b If the pet does not require immediate medical attention, the AI Server invites the Pet Owner to view the Pet-Health Tips section on the MyOw Server
                                <ol>
                                    <li>The Pet Owner may view the topics recommended by the AI Server</li>
                                    <li>The Pet Owner may search for other topics of their own choosing</li>
                                </ol>
                            </p>
                            
                            <p>8.c If the pet does not require immediate medical attention, the AI Server may also invite the Pet Owner to view the Vorum on the MyOw Server
                                <ol>
                                    <li>The Pet Owner may reply to an existing thread</li>
                                    <li>The Pet Owner may start a new thread asking a Vet for advice</li>
                                </ol>
                            </p>
                          </td>
                        </tr>
                      </table>
					</div>
            	</div>
            </div><!-- end main row 1 -->
            
            <!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
            
            <!-- start main row 2 -->
            <div class="row">
            	<div class="col-lg-8 col-lg-offset-2">
                	<img src="images/diagnose-pet-flow.png" class="img-responsive">
            	</div>
            </div>           
            
        </div><!-- end main content -->
          
       	<!-- start footer -->
   	   	<div class="row" id="footer">
        	<!-- start of bottom navbar -->
            <div class="container navbar navbar-custom-bottom no-gutters no-bottom-margin">
        	                            
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
                            <li><a href="use-case-actors.php">Use Case Actors</a></li>
                            <li><a href="use-case-diagram.php">Use Case Diagram</a></li>
                            <li><a href="use-case-uc1.php">Use Case UC-1</a></li>
                            <li><a href="use-case-uc2.php">Use Case UC-2</a></li>
                            <li><a href="use-case-uc3.php">Use Case UC-3</a></li>
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
                            <li><a href="../product-design/state-transition-diagram.php">State Transition Diagram</a></li>
                        </ul><!-- end of inner ul -->
                  	</li>
                    <li><a href="../references.php">References</a></li>
                    <li><a href="../appendix.php">Appendix</a></li>
                        
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
                </div>
            
        	</div><!-- end of bottom navbar -->
            	                
            <!-- start copyright and social media -->
            <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 container" id="copyright">
          
                <table width="75%" cellspacing="2" cellpadding="2" class="align-table">
                  <tbody>
                    <tr>
                      <th width="10%" scope="col" class="align-right"><a href="http://www.facebook.com" target="new"><img src="../images/fb.png" id="fb"></a></th>
                      <th width="80%" scope="col" class="align-center">Copyright MyOw <?php echo date("Y");?></th>
                      <th width="10%" scope="col" class="align-left"><a href="http://www.twitter.com" target="new"><img src="../images/twitter.png" id="twitter"></a></th>
                    </tr>
                  </tbody>
                </table>
               
            </div><!-- end copyright and social media -->
        </div><!-- end footer -->
        
    </div><!-- end main container -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/custom-scripts.js"></script>
</body>

</html>
