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
    <link href="css/custom-styles.css" rel="stylesheet">
        
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
            	<a href="index.php"><img src="images/logo.png"></a>
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
                    <li><a href="index.php">What</a></li>
                    <li class="active"><a href="who.php">Who</a></li>
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
        
        	<!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
            
        	<!-- start main row 1 -->
            <div class="row container">
            	<div class="col-lg-10 col-lg-offsfet-1 col-md-10 col-md-offset-1">
                	<div class="row">
                    	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                        	<img src="images/persona.png" class="img-responsive">
                        </div>
                    </div>
	           </div>
            </div><!-- end main row 1 -->
            
            <!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
                     
            <!-- start main row 2 -->
            <div class="row">
            	<div class="col-lg-12 definition-banner">
                	<div class="row">
                    	<div class="col-lg-8 col-lg-offset-2 align-center" id="persona">
                        	<h1>Background</h1>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-lg-8 col-lg-offset-2 align-justify">
                        	<p><img src="images/kiella1.png" class="img-responsive pull-right" id="kiella-pic-1">Mary O'Donnell is a 41-year-old primary school teacher who lives with her husband David and two children Katie (9) and Felix (5) in Navan, Co. Meath. She has two pets in the house; a 6-month-old Yorkshire Terrier named Kiella, who they got for Felix's 5th birthday. They also have a 2-year-old cat called Molly, who has a bad habit of wandering off for days at a time.</p>
                            
                            <p><img src="images/kiella2.png" class="img-responsive pull-left" id="kiella-pic-2">Mary's husband David works in Drogheda as a solicitor and is usually the first out of the house in the morning and the last back in the evening. Mary leaves for school at 8:15 with the two kids and leaves Kiella outside in the garden. There is a kennel in the garden should it rain, and there is lots of space for him to run around in.</p>
                            
                            <p>It's early March and it has been quite cold recently so Mary is not comfortable leaving Kiella outside. Unfortunately, if he's left unattended in the house he will destroy it while they are away, so she put some extra blankets in his kennel. Mary noticed about a week ago that Kiella has not been eating all of his food, and he looks a little confused and unsteady. She is also worried about Molly as she hasn't been home for over a day and that is a bit too long, even for her. She has started asking neighbours to keep a look out for her.</p>
                        </div>
                    </div>
                </div>
          	</div><!-- end main row 2 -->
            
            <!-- start main row 3 -->
            <div class="row">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 align-justify">
                	<h2>Scenario</h2>
                    <p>Mary and the kids come home from school on Wednesday evening to find Kiella hadn't eaten much of the food she left out for him that day, and he is looking really weak. She uses MyOw to try and find out what might be wrong with him. It look like a lot of his symptoms could be related to Hypoglycemia so she emails their vet to make an appointment to have Kiella seen the next day. The app has suggested rubbing honey in Kiella's gums, it seems like a safe enough approach so she tries it.</p>
                    
                    <p>Sadly there is still no sign of Molly and Katie is very upset that something has happened to her. So Mary goes on MyOw and creates a missing animal advert using Molly's Pet Profile, which is stored on the app, and publishes it to all the media sources available including the paid adverts.</p>
                    
                    <p>A few hours pass by and Mary gets a notification that a cat matching Molly's description has been found 2km away from the house on the road. Mary calls the person who responded and finds out the exact location so she and Katie jump in the car to see if it's her. Unfortunately, when they get there they discover that it is Molly and she has been clipped by a car and is struggling to get up. Mary calls the usual vet but there is no answer, so she goes on MyOw and searches for the nearest vet that could treat Molly. The app connects Mary to a veterinary hospital 15 km away and they agree to see her immediately. The vet says that Molly has broken her hip and will need to be operated on and kept in for a few days. </p>
                    
                    <p>Back home, Mary goes back on MyOw to see what else she can do to help Kiella. The recommended advice is to keep him warm. She arranges for David's mother, Margot, to look after Kiella during the day as she is home and doesn't mind her dogs being in the house. As Margot also has MyOw installed on her phone, Mary opts to share Kiella's Pet Profile with Margot so she can update any of his details if need be.</p>
                    
                    <p>Margot takes Kiella to the vet the next day and the vet is fairly sure that it is in fact Hypoglycemia. He takes some blood and urine samples to be sent off for analysis. Margot updates Kiella's profile to everyone else can see the news. That night when Mary picks up Kiella, Margot informs her of some of the advice that the vet gave and she goes home with Kiella and the kids. At home, she updates Kiella's calendar to set reminders for his medication intake three times a day.</p>
                </div>
            </div><!-- end main row 3 -->
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
                        <li><a href="index.php">What</a></li>
                        <li class="active"><a href="who.php">Who</a></li>
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
                	<a href="http://www.facebook.com" target="new"><img src="images/fb.png" id="fb"></a>
                </div>
                
                <!-- Copyright notice - ->
                <div class="col-lg-3 align-center red-bg">
                	Copyright MyOw <?php echo date("Y");?>
                </div>
                
                <!-- Twitter icon - ->
                <div class="col-lg-2 pull-left align-left white-bg">
                	<a href="http://www.twitter.com" target="new"><img src="images/twitter.png" id="twitter"></a>
                </div>
                -->
            
                <table width="75%" cellspacing="2" cellpadding="2" class="align-table">
                  <tbody>
                    <tr>
                      <th width="10%" scope="col" class="align-right"><a href="http://www.facebook.com" target="new"><img src="images/fb.png" id="fb"></a></th>
                      <th width="80%" scope="col" class="align-center">Copyright MyOw <?php echo date("Y");?></th>
                      <th width="10%" scope="col" class="align-left"><a href="http://www.twitter.com" target="new"><img src="images/twitter.png" id="twitter"></a></th>
                    </tr>
                  </tbody>
                </table>
               
            </div><!-- end copyright and social media -->
        </div><!-- end footer -->
        
    </div><!-- end main container -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/custom-scripts.js"></script>
</body>

</html>
