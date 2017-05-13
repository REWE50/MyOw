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
            
            
            <!-- 
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>Design Process</h2>
                    <p>We firstly looked at the branding of the MyOw brand, via logos, fonts and colours.</p>
                </div>
            </div> -->
            
            <!-- start main row 3 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h2>Initial Sketches</h2>
                    <div class="row">
                    	<div class="col-lg-12">
                        	<img src="images/appendix-1.png" class="img-responsive">
                        </div>
                        
                        <div class="col-lg-12">
                        	<img src="images/appendix-2.png" class="img-responsive">
                        </div>
                        
                        <div class="col-lg-12">
                        	<img src="images/appendix-3.png" class="img-responsive">
                        </div>
                    </div>
	           </div>
            </div><!-- end main row 3 -->
            
            
            <!-- start main row 4 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>Mindmap</h2>
                    <img src="images/appendix-4.png" class="img-responsive">
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
                    <img src="images/appendix-5.png" class="img-responsive">
                </div>
            </div><!-- end main row 5 -->
            
            
            <!-- start main row 6 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h1>Colour</h1> 
                    <p>The colour palette was based on the colours of a Peacocks. This is naturally formed in nature and so a more organic palette.  To veer away from the palit being all strong colours, pale shades were chosen. </p>
                    <img src="images/appendix-6.png" class="img-responsive"><br>
                    <img src="images/appendix-7.png" class="img-responsive"><br>
                    
                    <table width="100%" border="1" cellpadding="0" cellspacing="0" id="colors-table">
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
            
            <!-- start main row 11 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>Website Development</h2>
                    <p>From our initial prototype, our original Bootstrap website went through a number of iterations, but stuck pimarily to the original design.</p>
                    <h3>Prototype</h3>
                    <img src="images/site-1.png" class="img-responsive">
                    <br>
                    <h3>1st Draft</h3>
                    <img src="images/site-2.png" class="img-responsive">
                    <br>
                    <h3>2nd Draft</h3>
                    <img src="images/site-3.png" class="img-responsive">
                    <br>
                    <h3>3rd Draft</h3>
                    <img src="images/site-4.png" class="img-responsive">
                    <br>
                    <h3>Final Draft</h3>
                    <img src="images/site-6.png" class="img-responsive">
                </div>
            </div><!-- end main row 11 -->
            
            <!-- start main row 9 -->
            <div class="row container">
           	  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               	<h2>Evidence of Teamwork</h2>
                    
                  <img src="images/teamwork-diagram.png" class="img-responsive">
                  <img src="images/teamwork-table.png" class="img-responsive">
                  
                <h2>Working Document</h2>
                <p>We maintained a shared Working Document on Google Docs throughout the project to keep one another aware of our progress. We also used this to share feedback and suggestions outside of our weekly scheduled Hangout. </p>
                <p>This Working Document can be downloaded <a href="Team23WorkingDoc.pdf" target="_blank">here</a>.</p>
                  
              </div>
            </div><!-- end main row 9 -->
            
            
            <!-- start main row 8 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h1>Assignment 4</h1>
                    <h2>App Research</h2>
                    <p>In consideration for designing the phone app I had noticed a recent trend from bottom navigation on phone apps.</p>
                    <div class="row">
                    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        	<img src="images/appendix-8.png" class="img-responsive">
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        	<img src="images/appendix-9.png" class="img-responsive">
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        	<img src="images/appendix-10.png" class="img-responsive"><br>
                        </div>
                    </div>
                    <p>There has been a shift towards this bottom navigation. Facebook are currently trialing bottom navigation - (Oakley, P. (2017). <em>Facebook testing a bottom navigation bar in its app</em>. [online] Android Police. Available at:<a href="http://www.androidpolice.com/2017/02/11/facebook-testing-bottom-navigation-bar-app/" target="_blank" class="smaller-text"> http://www.androidpolice.com/2017/02/11/facebook-testing-bottom-navigation-bar-app/ [Accessed 18 Apr. 2017].</a>).</p>
                    <p>In Steven Hoober research (Hoober, S. (2017). <em>How Do Users Really Hold Mobile Devices? :: UXmatters</em>. [online] Uxmatters.com. Available at:<a href="http://www.uxmatters.com/mt/archives/2013/02/how-do-users-really-hold-mobile-devices.php" target="_blank" class="smaller-text"> http://www.uxmatters.com/mt/archives/2013/02/how-do-users-really-hold-mobile-devices.php [Accessed 22 April 2017].</a>) he found that 49% of people use their thumbs to navigate their phones. A top navigation bar is not within this reach, hence the move. Tha navigation should be top level get to areas and should contain no more than five icons (Babich, N. (2017). <em>UX Design for Mobile: Bottom Navigation</em>. [online] Nick Babich. Available at: <a href="http://babich.biz/perfect-bottom-navigation-for-mobile-app/" target="_blank" class="smaller-text">http://babich.biz/perfect-bottom-navigation-for-mobile-app/</a> [Accessed 18 Apr. 2017].)</p>
                    <p>These all helped within the design process. </p>
                </div>
            </div><!-- end main row 8 -->
            
            
            <!-- start main row 9 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>App Sketches</h2>
                    <p>We firstly looked at the branding of the MyOw brand, via logos, fonts and colours.</p>
                    <img src="images/appendix-11.png" class="img-responsive">
                    <img src="images/appendix-12.png" class="img-responsive">
                    <img src="images/appendix-13.png" class="img-responsive">
                </div>
            </div><!-- end main row 9 -->
            
            
            <!-- start main row 10 -->
            <div class="row container">
            	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2>App Development</h2>
                    
                    <div class="row">
                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        	<img src="images/appendix-14.jpg" class="img-responsive">
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        	<img src="images/appendix-15.png" class="img-responsive">
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        	<br><img src="images/appendix-16.png" class="img-responsive">
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        	<br><img src="images/appendix-17.png" class="img-responsive">
                        </div>
                    </div>
                    
                    <br><img src="images/appendix-18.png" class="img-responsive">
                </div>
            </div><!-- end main row 10 -->
            
                    
            
            <!-- start main row 12 -->
            <div class="row container">
           	  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h2> Feedback</h2>
                    <p>Once the Main pages of the prototype home page were styled and designed, they were sent out to the team for feedback and to check all elements were present.</p> 
                <h3>Vorum</h3>
                    
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <th width="40%" scope="col">Feedback</th>
      <th width="40%" scope="col">Designer Notes</th>
      <th width="20%" scope="col">Resolution</th>
    </tr>
    <tr>
      <td>Why is there a different edit icon used here? Should we not simplify it and do something like Google?</td>
      <td>There is no edit function on this page, there is a create new post.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>Date font is a bit small.</td>
      <td>This can be increased.</td>
      <td>Font size increased.</td>
    </tr>
    <tr>
      <td>The background needs to be a different colour to each of the topics. Use block of colour rather than lines separating each section.</td>
      <td>This is a design element. I will think on it.</td>
      <td>Every second box was changed colour but the outside shading is kept.</td>
    </tr>
    <tr>
      <td>We need more ways to navigate the Vorum. Sort by date, animal, general classification.</td>
      <td>None of this has been discussed before now. You can search via the search bar.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>It should be broken up into various sections, dogs, cats.</td>
      <td>None of this has been discussed before now. It might be too much for the small retail of an app and more appropriate for Desktop.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>Showing the user how many posts in each topic would be useful to the user.</td>
      <td>None of this has been discussed before now. It might be too much for the small retail of an app and more appropriate for Desktop. ></td>
      <td>No action.</td>
    </tr>
  </tbody>
</table>

                  <br><img src="images/appendix-19.png" class="img-responsive"><br>
                  
                  <h3>Calendar</h3>
                  
                  <table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <th width="40%" scope="col">Feedback</th>
      <th width="40%" scope="col">Designer Notes</th>
      <th width="20%" scope="col">Resolution</th>
    </tr>
    <tr>
      <td>The date is difficult to read.</td>
      <td>This can be increased.</td>
      <td>Font size increased.</td>
    </tr>
    <tr>
      <td>What does the check mark do? If it’s showing that the appointment has been kept or that food has been given then we need an item that is not complete to show the difference. </td>
      <td>We need something to show you can check it off so I can have an X for those not complete yet?</td>
      <td>Check mark removed.</td>
    </tr>
    <tr>
      <td>Can the icons on either side of the notification text be moved out slightly as there looks like there is room.</td>
      <td>They are hitting the edge of the bootstrap for phones that are edged it would distort so that the edge.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>The text for the notification looks too close to the time and date.</td>
      <td>I'll move it out.</td>
      <td>Moved.</td>
    </tr>
    <tr>
      <td>When on the calendar page should\could the nav icon change colour\size so the user knows that they are on that page.</td>
      <td>Yes I was thinking the same i'll organise that.</td>
      <td>Action taken to fix this on all pages that lead off navigation bar.</td>
    </tr>
    <tr>
      <td>There is no way to navigate between months.</td>
      <td>Google don’t have a visible sign to navigate between months you swipe.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>We have five dates on the calendar and only three items to view, all three items have the same date.</td>
      <td>If you see the date on the 22 is a full circle they are the ones showing to corresponded with the date selected.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>Notification icons need to have the option to edit or delete the item not just tick ok.</td>
      <td>The Google calendar is like this also you click the notification to go into it, there is no need for have an edit button.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>The edit calendar icon seems a little big and sticks out on it own.</td>
      <td>Cool, yeah definitely I can decrease it, I'll note that.</td>
      <td>Button decreases in size.</td>
    </tr>
  </tbody>
</table>

					<br><img src="images/appendix-20.png" class="img-responsive"><br>
                  
                <h3>Health Tips</h3>
                  
                  <table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <th width="40%" scope="col">Feedback</th>
      <th width="40%" scope="col">Designer Notes</th>
      <th width="20%" scope="col">Resolution</th>
    </tr>
    <tr>
      <td>What does the check mark do?</td>
      <td>I can delete it.</td>
      <td>Removed the Tick.</td>
    </tr>
    <tr>
      <td>There is a blue line about the navy bar at the top, is that by design? I think it may be on all of them.</td>
      <td>There is a blue line under MyOw symptoms, its there by design.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>How does the user search for info on a different animal?</td>
      <td>Via the search bar. There are too many types of animals to have a button for each.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>It would be useful if we could see what had been searched, what symptoms had veen entered. Much like pintrest it shows the user all the items they have searched making up their filter.</td>
      <td>When you search the words are in the search bar and related topics would appear underneath would be my understanding but as a landing screen you have the A-Z.</td>
      <td>No action.</td>
    </tr>
  </tbody>
</table>
			
            <br><img src="images/appendix-21.png" class="img-responsive"><br>
                  
                <h3>Lost & Found</h3>
                
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <th width="40%" scope="col">Feedback</th>
      <th width="40%" scope="col">Designer notes</th>
      <th width="20%" scope="col">Resolution</th>
    </tr>
    <tr>
      <td>It’s not clear why there are two icons with the up arrow, I’m guessing that they are to upload information but why are there two?</td>
      <td>Upload profile and upload photo.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>How does the user save the information on the lost pet?</td>
      <td>We have not discussed this, why would they need to save it? </td>
      <td>Save button added.</td>
    </tr>
    <tr>
      <td>How does the user fill out the form with their own pet’s details? </td>
      <td>They don’t, they upload their pet profile information.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>Why is there an additional search button on the bottom, why are we not using the search bar that we discussed last week would remain and be used across the pages that needed it?</td>
      <td>This is a search for the information they just filled in. if I put a boundary box around it to include the button search that will make it more clear.</td>
      <td>The search was put into a boundary box with the form to link them together.</td>
    </tr>
    <tr>
      <td>Where can the user toggle between lost and found animals?</td>
      <td>Wasn’t sure we had agreed on this for app page, it might be a bit busy.</td>
      <td>A toggle section added.</td>
    </tr>
    <tr>
      <td>What media does the lost or found advert push the advert to, where is the option for paid adverts?</td>
      <td>This is new to me, paid adverts? From whom?</td>
      <td>A direct search function added to browse missing animals. </td>
    </tr>
    <tr>
      <td>How does the user describe where the animal was last seen, when it was last seen? There should a map function here.</td>
      <td>We have not discussed this.</td>
      <td>More details added to form for this option.</td>
    </tr>
    <tr>
      <td>What sex is the animal? </td>
      <td>Yep good idea I can add this in.</td>
      <td>Added to form.</td>
    </tr>
    <tr>
      <td>What are the contact details for the animal owner? What is the preferred method of contact? </td>
      <td>This has not been talked about before now. This is a search function, I would imagine that would be included in a screen when you find the pet.</td>
      <td>No action.</td>
    </tr>
  </tbody>
</table>
			<br><img src="images/appendix-22.png" class="img-responsive"><br>
                  
                <h3>Notifications</h3>
                
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <th width="40%" scope="col">Feedback</th>
      <th width="40%" scope="col">Designer Notes</th>
      <th width="20%" scope="col">Resolution</th>
    </tr>
    <tr>
      <td>As there are 6 notifications should we not have the number 6 (superscript) beside the notification icon? </td>
      <td>The 6 would be too small, but I have an icon with a small circle to represent there are notifications there.</td>
      <td>A dot has been added to the notification bell.</td>
    </tr>
    <tr>
      <td>The user needs to be able to delete or edit these notifications.</td>
      <td>Like with Google you click the notification and go to it and from there you can edit/delete.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>Should we allow the use to be able to create a new notification from this page?</td>
      <td>Great thought, I was of the same thinking but if we had one it would bring you back to the calendar page hence why I steered off.</td>
      <td>No action.</td>
    </tr>
  </tbody>
</table>

				<br><img src="images/appendix-23.png" class="img-responsive"><br>
                  
                <h3>Pet Profile</h3>
                
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <th width="40%" scope="col">Feedback</th>
      <th width="40%" scope="col">Designer Notes</th>
      <th width="20%" scope="col">Resolution</th>
    </tr>
    <tr>
      <td>There are different labels here to the Lost and Found for example “animal” as opposed to “Animal Type”</td>
      <td>I'll change that to animal type.</td>
      <td>Changed.</td>
    </tr>
    <tr>
      <td>Where’s the share pet profile button? </td>
      <td>I can add it, but I do have it in the menu.</td>
      <td>Added to pet profile and removed from menu.</td>
    </tr>
    <tr>
      <td>Where is the add a new pet profile button?</td>
      <td>I can add one.</td>
      <td>New profile button added.</td>
    </tr>
    <tr>
      <td>Should we focus on showing all the functionality of the pet profile page rather than showing the notifications again?</td>
      <td>This has been discussed that it was wanted on this page, what other functionality can you imagine being here?</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>Does the pet profile image need to be so big? </td>
      <td>yes/no</td>
      <td>No action.</td>
    </tr>
  </tbody>
</table>
	
    		<br><img src="images/appendix-24.png" class="img-responsive"><br>
                  
                <h3>Menu</h3>
                
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <th width="40%" scope="col">Feedback</th>
      <th width="40%" scope="col">Designer Notes </th>
      <th width="20%" scope="col">Resolution</th>
    </tr>
    <tr>
      <td>Is “Share Pet Profile” not a sub-action of the “Pet Profile” item, so should it not just be accessible from the pet profile page?</td>
      <td>I don't have it on pet profile page at present. </td>
      <td>Button removed.</td>
    </tr>
  </tbody>
</table>

			<br><img src="images/appendix-25.png" class="img-responsive"><br>
                  
                <h3>Vet Finder</h3>
                
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <th width="40%" scope="col">Feedback</th>
      <th width="40%" scope="col">Designer Notes</th>
      <th width="20%" scope="col">Resolution</th>
    </tr>
    <tr>
      <td>Icon to show vet on map should map icon used in app, I think. </td>
      <td>I can add one no problem, I was thinking about it.</td>
      <td>Icon added.</td>
    </tr>
    <tr>
      <td>The open closed text should be different, for example, open could have a green background and closed could have a red background.</td>
      <td>That would add different colours outside the remit but I can change it to the blue/purple.</td>
      <td>The colours were changed within the remit of colours being used.</td>
    </tr>
    <tr>
      <td>Does the location icon have to be that big? </td>
      <td>It can be reduced.</td>
      <td>Icon reduced.</td>
    </tr>
    <tr>
      <td>Did we not say that we wanted the distance from information to be displayed in the list of available vets? </td>
      <td>I don’t recall this, but I can add, I could put it under the open or closed.</td>
      <td>Distance added.</td>
    </tr>
    <tr>
      <td>Do we need to show the user what vets are closed, this is redundent info. </td>
      <td>It is for times of emergency.</td>
      <td>No action taken.</td>
    </tr>
    <tr>
      <td>How does the user search for a vet for a different animal? How does the user change the profile to search for an appropriate vet?</td>
      <td>It is presuming it is searching for a vet in relationship to your pet profile, we did talk about this before.</td>
      <td>No action.</td>
    </tr>
    <tr>
      <td>Should we tell the user more about each vet, How many km away are they, what is their rating?</td>
      <td>I'm adding km in, to find out more about the vet you would click in like with the notifications.</td>
      <td>Kilometer information added.</td>
    </tr>
  </tbody>
</table>

			<br><img src="images/appendix-26.png" class="img-responsive"><br>
                  
              </div>
            </div><!-- end main row 12 -->      
             
            
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
