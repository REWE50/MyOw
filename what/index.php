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
            	<a href="index.php"><img src="../images/logo.png"></a>
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
                    <li class="active"><a href="index.php">What</a></li>
                    <li><a href="../who.php">Who</a></li>
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
        </div><!-- end of fixed navbar -->
        
       
        <!-- start main content -->
        <div id="main-content">
        	<!-- start main row 1 -->
            <div class="row">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   	<img src="../images/pic1.png" class="img-responsive">
	            </div>
            </div><!-- end main row 1 -->
            
            <!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
            
            <!-- start main row 2 -->
            <div class="row">
            	<!-- start video placeholder -->
            	<div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                	<img src="../images/vid-placeholder.png" class="img-responsive">
                </div><!-- end video placeholder -->
                
                <!-- start welcome text -->
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 align-justify">
                	<h1>What is MyOw?</h1>
                    <p>In the MyOw Pet care app we want the design to provide the user with confidence in the information provided so we are using professional logo’s which include a medical emblem. We also want to have a low number of screens so that users can quickly and easily access key medical information that may help save their pet’s life. </p>
                </div><!-- end welcome text -->
            </div><!-- end main row 2 -->
            
             <!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
            
            <!-- start main row 3 -->
            <div class="row">
            	<!-- start definitions banner (db) -->
            	<div class="col-lg-12 definition-banner">
                    <!-- start db row 1 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>What Defines Our Product</h1>
                        </div>
                    </div><!-- end db row 1 -->
                    
                    <!-- start db row 2 -->
                    <div class="row">
                        <!-- start 8-col centered div -->
                        <div class="col-lg-8 col-lg-offset-2">
                            <!-- start new row to contain individual definitions -->
                            <div class="row align-table">
                                <!-- start definition 1 -->	
                                <div class="col-lg-4 align-center">
                                    <div class="row">
                                        <img src="../images/trusted-information.png">
                                    </div>
                                    
                                    <div class="row">
                                        <h3>Trusted Information</h3>
                                    </div>
                                </div><!-- end definition 1 -->
                                
                                <!-- start definition 2 -->             
                                <div class="col-lg-4 align-center">
                                    <div class="row">
                                        <img src="../images/care-advice.png">
                                    </div>
                                    
                                    <div class="row">
                                        <h3>Specific Care Advice</h3>
                                    </div>
                                </div><!-- end definition 2 -->
                                
                                <!-- start definition 3 -->           
                                <div class="col-lg-4 align-center">
                                    <div class="row">
                                        <img src="../images/integrated-profile.png">
                                    </div>
                                    
                                    <div class="row">
                                        <h3>Integrated Profile</h3>
                                    </div>
                                </div><!-- end definition 3 -->                  
                            </div><!-- end row containing individual definitions -->
                        </div><!-- end 8-col dentered div -->    
                    </div><!-- end db row 2 --> 
                </div><!-- end definitions banner (db) -->
          	</div><!-- end main row 3 -->
            
            <!-- start main row 4 -->
            <div class="row">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 align-justify">
                	<h2><img src="../images/pic2.png" class="img-responsive padding-left pull-right" id="dca">Digital Care Assistant</h2>
                    <p>MyOw is an app which acts as a digital care assistant by providing information to maintain the animal's well-being, such as pet profile updates, pet profile sharing, pet specific information integration and pet appointments and reminders. </p>
                    <p>The app will also be used to assess the current medical condition of a pet based on information provided by the user. By opening up a dialogue with the user, it diagnoses the current medical condition of the animal. It then provides a two-phase set of solutions to help the animal; firstly suggesting medical treatments that can be administered by the user. If the user feels they need to visit a veterinarian, the app then connects the user with the most appropriate practice to treat the animal. It then sends that vet all relevant data on the animal's medical situation, so he or she has a clear picture of the animal's current condition and its medical history. </p>
                    
                </div>
            </div><!-- end main row 4 -->
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
                        <li class="active"><a href="../index.php">What</a></li>
                        <li><a href="../who.php">Who</a></li>
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
