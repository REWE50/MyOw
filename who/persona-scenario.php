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
                        <li class="active"><a href="persona-scenario.php">Who</a></li>
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
            </div><!-- end top fixed navbar --> 
        </div><!-- end div containing navbar -->
    </div><!-- end fluid container containing logo top fixed navbar -->
    
    
    
       
        
    <!-- start main container -->
    <div class="container white-bg">  
        <!-- start main content -->
        <div id="main-content">
            <!--spacer -->
            <div class="spacer-row">
            </div><!-- end spacer row -->
            
            
            
            
            
        	<!-- start main row 1 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2">
            	
                
                
                
                <!-- start div containing persona details -->
	<div class="col-lg-12" id="persona details">
    	<!-- start top row -->
        <div class="row persona-colors">
        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
            	<h2 class="white-text">Mary O'Donnell</h2>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
            	<h2 class="blue-text">Primary Persona</h2>
            </div>
        </div><!-- end top row -->
        
        <div class="row">
        	<div class="col-lg-12">
            	<div class="spacer-row">
                </div>
            </div>
        </div>
        
        
        <!-- start main row 2 -->
        <div class="row">
        	<!-- start persona pic -->
        	<div class="col-lg-4 col-md-3 col-sm-4">
            	<div class="row">
            		<img src="images/mary-pic.png" class="img-responsive" alt="Mary and her Dog Kiella">
                </div>
                
                <!--
                <div class="row persona-colors" id="persona-caption">
                	<p>"I think my dog is doing pretty well. I wonder what else I can do for him..."</p>
                </div>    -->
            </div><!-- end persona pic -->
            
            <!-- start persona personal details -->
            <div class="col-lg-8 col-md-9 col-sm-8">
            	<!-- start row 1 -->
                <div class="row persona-details">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>PROFILE</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	Pet Profile
                    </div>
                </div><!-- end row 1 -->
                
                <!-- start row 2 -->
                <div class="row persona-details">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>AGE</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	41
                    </div>
                </div><!-- end row 2 -->   
                
                <!-- start row 3 -->
                <div class="row persona-details">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>OCCUPATION</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	Primary School Teacher
                    </div>
                </div><!-- end row 3 -->   
                
                <!-- start row 4 -->
                <div class="row persona-details">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>STATUS</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	Married with 2 kids
                    </div>
                </div><!-- end row 4 -->   
                
                <!-- start row 5 -->
                <div class="row persona-details">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>LOCATION</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	Navan, Co. Meath
                    </div>
                </div><!-- end row 5 -->   
                
                <!-- start row 6 -->
                <div class="row persona-details">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>TYPE OF DEVICE</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	Android
                    </div>
                </div><!-- end row 6 -->   
                
                <!-- start row 7 -->
                <div class="row persona-details">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>EDUCATION</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	Masters Degree
                    </div>
                </div><!-- end row 7 -->   
                
                <!-- start row 8 -->
                <div class="row persona-details">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>TECHNICAL PROFICIENCY</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	Internet, Apps, Forums
                    </div>
                </div><!-- end row 8 --> 
                
                <!-- start row 9 -->
                <div class="row">
                	<div class="col-lg-12 col-md-12 col-sm-12">
                    	<img src="images/buttons.png" class="img-responsive">
                      
                        <!--<div class="row">
                		<div class="col-lg-12 col-md-10 col-sm-8 green-bg">
                            <div class="col-lg-3 col-lg-offset-1 col-md-3 col-sm-3 align-center persona-buttons">
                                <h4>Caring</h4>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 align-center persona-buttons">
                                <h4>Thoughtful</h4>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3 align-center persona-buttons">
                                <h4>Informed</h4>
                            </div>
                    	</div>
                    </div> -->
                    </div>
                </div><!-- end row 9 -->          	
            </div><!-- end persona personal details -->
        </div><!-- end main row 2 -->
        
        <!-- start main row 3 -->
        <div class="row">
        	<!-- start pet info -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            	<!-- start header -->
            	<div class="col-lg-12">
                	<div class="row">
                		<h4>PETS</h4>
                    </div>
                </div><!-- end header -->
                
            	<!-- start row 1 -->
                <div class="row">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>ANIMAL TYPE</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	Dog
                    </div>
                </div><!-- end row 1 -->
                
                <!-- start row 2 -->
                <div class="row">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>NAME</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	Kiella
                    </div>
                </div><!-- end row 2 -->   
                
                <!-- start row 3 -->
                <div class="row">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>BREED</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left smaller-text">
                    	Yorkshire Terrier
                    </div>
                </div><!-- end row 3 -->   
                
                <!-- start row 4 -->
                <div class="row">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-right">
                    	<h5>AGE</h5>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 align-left">
                    	6 Months
                    </div>
                </div><!-- end row 4 -->
            </div><!-- end pet info -->
            
            <!-- start motivations -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            	<!-- start header -->
            	<div class="col-lg-12">
                	<div class="row">
                		<h4>MOTIVATIONS</h4>
                    </div>
                    
                    <div class="row">
                    	<p>Kiella is the newest addition to the family and was bought for her son Felix's 5th birthday. Felix and the rest of the family all love little Kiella and were terrified when they found him having a seizure in the kitchen. Mary wants to make sure that neither of the children ever have to witness Kiella having another seizure as it was very traumatic.</p>
                    </div>
                </div><!-- end header -->
            </div><!-- end motivations -->
        </div><!-- end main row 3 -->
        
        
        <!-- start main row 4 -->
        <div class="row">
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            	<!-- start header -->
            	<div class="col-lg-12">
                	<div class="row">
                		<h4>PERSONALITY</h4>
                    </div>
                    <div class="row no-gutters">
                    	<img src="images/personality-matrix.png" class="img-responsive" alt="A table detailing Mary's personality">
                    </div>
                </div><!-- end header -->
            </div>
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            	<!-- start header -->
            	<div class="col-lg-12">
                	<div class="row">
                		<h4>GOALS</h4>
                    </div>
                    
                    <div class="row">
                    	<!-- start unordered list of goals -->
                        <ul>
                            <li>Keep track of Kiella's medicinal intake</li>
                            <li>Keep track of Kiella's eating habits</li>
                            <li>Remember to attend appointments with the vet</li>
                            <li>Keep a record of Kiella's medical history</li>
                            <li>Keep other family members informed of Kiella's status</li>
                        </ul><!-- end unordered list of goals -->
                    </div>
                </div><!-- end header -->
            </div>
        </div><!-- end main row 4 -->
        
        <!-- start main row 5 -->
        <div class="row">
        	<div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4 col-xs-12">
            	<!-- start header -->
            	<div class="col-lg-12">
                	<div class="row">
                		<h4>FRUSTRATIONS</h4>
                    </div>
                    
                    <div class="row">
                        <!-- start unordered list of frustrations -->
                        <ul>
                            <li>Not being able to keep an eye on Kiella during the day</li>
                            <li>Not knowing if anyone else has treated Kiella that day</li>
                            <li>Not knowing when Kiella might suffer another episode</li>
                        </ul><!-- end unordered list of frustrations -->
                    </div>
                </div><!-- end header -->
            </div>
        </div><!-- end main row 5 -->
        
        
    </div><!-- end div containing persona details -->
    
    
    
    
                
                
                
                
                
                
                
                
            	</div>    
            </div><!-- end main row 1 -->
            
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
                                
                                
                                <div class="row">
                    	<div class="col-lg-8 col-lg-offset-2 align-center" id="persona">
                        	<h1>Background</h1>
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-lg-8 col-lg-offset-2 align-justify" id="kiella-story">
                        	<p><img src="../images/kiella1.png" class="img-responsive pull-right" id="kiella-pic-1" alt="A picture of Kiella">Mary O’Donnell is a 41 year old primary school teacher who lives with her husband David and two children Katie (9) and Felix (5) in Navan, Co Meath. She has one pet in the house, a 6-month-old Yorkshire Terrier named Kiella, who they got for Felix’s 5th birthday. </p>
                            
                            <p><!--<img src="../images/kiella2.png" class="img-responsive pull-left" id="kiella-pic-2">-->Mary’s husband David works in Drogheda as a solicitor and is usually the first out of the house in the morning and the last back in the evening. Mary leaves for school at 8:15 with the two kids and leaves Kiella outside in the garden. There is a kennel in the garden should it rain, and there is lots of space for him to run around in. </p>
                            
                            <p>It’s early March and it’s been quiet cold recently, so Mary is not comfortable leaving Kiella outside. Unfortunately if he’s left unattended in the house he will destroy it while they are away, so she put some extra blankets in his kennel. Mary noticed about a week ago that he has not been eating all of his food and looked a little confused and unsteady. </p>
                        </div>
                    </div>
                                
                                
                                
                                
                                
                                
                                
                                                        
                            </div><!-- end definitions banner (db) -->
                    	</div>
                   </div>
               </div>
           </div>
        </div>
    </div><!-- end fluid middle container -->
    
    
    
    
    <!-- start of 2nd main container -->
    <div class="container">  
        <!-- start main row 3 -->
            <div class="row">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 align-justify" id="kiella-bg-div">
                	<h2>Scenario</h2>
                    <p>Mary and the kids come home school on Wednesday evening to find Kiella hadn’t eaten much of the food she left out for him that day and he is looking really weak. She uses MyOw’s Symptoms Checker function to try and find out what might be wrong with him. It looks like a lot of his symptoms could be related to Hypoglycemia, so she emails their vet to make an appointment to have Kiella seen the next day. The app has suggested rubbing honey in Kiella’s gums, it seems like a safe enough approach so she tries it. </p>     
                    
                    <p>A few hours later, Kiella is looking a little better and Mary goes back on MyOw to see what else she can do to help. Under General Health Tips regarding Hypoglycemia, it is recommended to keep the dog warm. So she arranges for David’s mother, Margot, to look after Kiella during the day and to take him to the vets appointment. As Margot also has MyOw installed on her phone, Mary opts to share Kiella’s Pet Profile with Margot so she can update his details if need be, and view when and where the appointment will be.</p>
                    
                    <p>Margot takes Kiella to the vet the next day and the vet is fairly sure that it is in fact Hypoglycemia. He takes some blood and urine samples to be sent off for analysis. Margot updates Kiella’s Pet Profile so everyone else can see the news. That night when Mary picks up Kiella, Margot informs her of some of the advice that the vet gave and she goes home with Kiella and the kids. At home, Mary updates Kiella’s calendar to set reminders for his medicinal intake three times a day. </p>
                    
                </div>
            </div><!-- end main row 3 -->      
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
                        <li><a href="../index.php">What</a></li>
                        <li class="active"><a href="persona-scenario.php">Who</a></li>
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
    <script src="../js/custom-scripts.js"></script>
</body>

</html>
