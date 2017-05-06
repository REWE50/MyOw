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
        2nd Draft 01/05/17
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
                            <li><a href="written-use-cases.php">Written Use Cases</a></li>
                        </ul><!-- end of inner ul -->
                    </li>
                    <li><a href="#">Product Design</a></li>
                    <li><a href="#">References</a></li>
                    <li><a href="#">Appendix</a></li>
                    
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
                    	<h2>UC-2 Find Vet Practice</h2>
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
                    	<strong>Brief Description/Goal</strong>: The Pet Owner wishes to find the nearest open Vet that can treat their pet. Simply choosing the nearest Vet that is open may not suit, as they may not be able to treat their type of pet. The AI Server reads the pet profile to determine what type of pet the Pet Owner has, and searches the Vets in the vicinity to determine the most appropriate Vet to send the Pet Owner to. </div>
                    
                    <div class="col-lg-12">
                   	  <p><strong>Preconditions</strong>: </p>
                    	<ul>
                    	  <li>The Pet Owner must have an account with MyOw</li>
                    	    <li>The Pet Owner must have a data connection</li>
                    	    <li>The Pet Owner must be logged into their MyOw account</li>
                    	    <li>The Pet Owner must have GPS/Location Services activated on their phone</li>
                  	  </ul>
                  </div>
                    
                    <div class="col-lg-12">
                    	<strong>Success Guarantee</strong>: The Pet Owner receives details of their nearest open Vet that can treat their pet.</div>
                    
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
                              <li>The Pet Owner chooses the Find Vet Practice section of the app</li>
<li>The Pet Owner's mobile device reports the Pet Owner's location to the AI Server</li>
<li>The AI Server accesses the MyOw Server and reads the Pet Profile to determine what kind of pet is to be treated</li>
<li>The AI Server accesses the Google Maps API to see what Vets are in the Pet Owner's area</li>
<li>The AI Server determines which is the most appropriate local Vet that is open, close to the Pet Owner and can treat their pet</li>
<li>The information is returned to the MyOw Server </li>
<li>The MyOw Server displays the information to the Pet Owner</li>
<li>If the Pet Owner clicks on the Vet suggested by the AI Server </li>
                            </ol>
                            
                            <p><strong>Extensions</strong>:</p>
                            
                            <p>8.aThe Pet Owner may contact the Vet by phone                                
                            </p>
                            
                            <p>8.b The Pet Owner may contact the Vet by email 
                                
                            </p>
                            
                            <p>8.c The Pet Owner may ask for direction through the Google Maps API 
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
                	<img src="images/vet-finder-flow.png" class="img-responsive">
            	</div>
            </div>           
            
        </div><!-- end main content -->
        
        
        
        
        <!--
        <div class="row">
        	<div class="jumbotron align-center">
            	<div class="row">
            		What | Who | How | Product Design | Meet The Team | References | Appendix
                </div>
            </div>
        </div>
        --><!-- end row 1 -->
        
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
                        <li class="active"><a href="../who.php">Who</a></li>
                        <li><a href="#">How</a></li>
                        <li><a href="#">Product Design</a></li>
                        <li><a href="#">References</a></li>
                        <li><a href="#">Appendix</a></li>
                        
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
            	
                <!-- 
            	<!-- FB icon - ->
                <div class="col-lg-2 col-lg-offset-3 align-right green-bg">
                	<a href="http://www.facebook.com" target="new"><img src="../images/fb.png" id="fb"></a>
                </div>
                
                <!-- Copyright notice - ->
                <div class="col-lg-3 align-center red-bg">
                	Copyright MyOw <?php echo date("Y");?>
                </div>
                
                <!-- Twitter icon - ->
                <div class="col-lg-2 pull-left align-left white-bg">
                	<a href="http://www.twitter.com" target="new"><img src="../images/twitter.png" id="twitter"></a>
                </div>
                -->
            
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
