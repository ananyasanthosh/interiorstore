<?php include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" style="overflow-y: hidden;">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Designerz Hub</title>
	<link rel="icon" type="image/ico" href="images/favicon.ico">
	<link href="layout/css/bootstrap.css" rel="stylesheet">
<link href="layout/css/style.css" rel="stylesheet">	
<link href="layout/css/animations.css" rel="stylesheet">
<link href="layout/css/custom-animations.css" rel="stylesheet">	
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css">	

<link href="layout/css/css" rel="stylesheet" type="text/css">
<link href="layout/css/css(1)" rel="stylesheet" type="text/css">
	<link href="layout/css/font-awesome.css" rel="stylesheet">
<style type="text/css"></style></head>
<body data-spy="scroll" data-target=".navbar" class="desktop">	
	<!-- PRELOADER -->
	<div id="preloader" style="display: none;">
		<div id="status" style="display: none;">&nbsp;</div>
	</div>

	<!-- HOME -->
	<div id="home">
		<!-- HOME SLIDER -->
		<div class="home-slider main-section gray-bg">
			<div class="text-center">
				<a class="navbar-brand smooth" href="#home">
					<img src="images/projects/logo.png" alt="logo">
				</a>
			</div>
			<div class="caroufred black" style="height: 376px;">
				<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1366px; height: 376px; margin: 0px; overflow: hidden;">
                <ul class="gallery uppercase" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 8196px; height: 385px; max-height: 376px;">
<?php 
$slider=mysqli_query($connection,"select slider_pic_id, slider_pic, slider_pic_title from main_slider")or die ("query 1 incorrect.....");

while(list($slider_pic_id,$slider_pic,$slider_pic_title)=mysqli_fetch_array($slider))
{
echo" <li style='width: 683px;'>
	<img src='images/main_slider/$slider_pic' alt='img'> 
  <div class='home-overlay colored-text text-center' style='top: 295px;'>
		<h4><span>$slider_pic_title</span></h4>
		</div></li> ";
}
?>
           </ul></div>
				<div class="carousel_pagination-outer">
					<div id="caroufred_home_slide_pager" class="carousel_pagination left" style="display: table;">
					<a href="#"><span>1</span></a><a href="#" class="selected"><span>2</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>5</span></a></div>
				</div>
			</div>
		</div>	
		<!-- END OF home slider -->
		<!-- NAVIGATION -->
		<div class="sticky-wrapper"><div id="navigate" class="my-sticky-element col-xs-12 col-sm-12 col-md-12 col-lg-12">		
			<nav class="navbar main-menu gray-bg" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<i class=" icon-angle-down"></i>
					</button>						
				</div>								               
				<div class="navbar-collapse navbar-ex1-collapse uppercase in">
					<ul class="nav navbar-nav text-center">
						<li class="active">	                   			
							<a href="#home" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Home</span>
							</a>
						</li>
						<li class="">
							<a href="#aboutus">
							<i class="fa fa-circle" ></i> 	                   				
								<span>About</span>
							</a>
						</li>
						<li class="">
							<a href="#services" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Services</span>
							</a>
						</li> 							                  			
						<li class="">
							<a href="#projects" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Products</span>
							</a>						
						</li>							
						<li class="">
			<a href="#contact" class="colored-text">
								<i class="icon-circle"></i> 
								<span>Contact</span>
							</a>
						</li>
						
					</ul>
				</div>

			</nav>
			<div class="menu_bottom bot_angle_right" style="border-right-width: 1366px;"></div>
		</div></div> 
		<!-- END OF navigation -->
	</div>
	<!-- END OF home -->		
	<!-- PAGES WRAPPER -->
	<div id="page-wrapper">		
		<!-- ABOUT US -->
		<div id="aboutus" class="main-section not-home">
			<!-- WHY US -->
			<div class="container">				
				<div class="title page-title text-center">
					<h1 class="dark-text">Why Us</h1>
					<span class="underline green"></span>
				</div>					
			</div>
			<div class="container text-center pad-bot about-description">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animated-scale-up custom-animation-scale-up">
					<p>we pride ourselves in surpassing the focus of design by delivering luxurious and innovative homes that directly correlate to our client’s needs.
					</p>
				</div>
			</div>
			<div class="container pad-bot highlighted">	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights animated-slide-left custom-animation-slide-left">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Innovative</span><span>Design</span></h6>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights animated-slide-top custom-animation-slide-top">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Unique</span><span>Style</span></h6>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights  animated-slide-bottom custom-animation-slide-bottom">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Personal</span><span>Attention</span></h6>
				</div>	
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 highlights animated-slide-right custom-animation-slide-right">
					<div class="about-overlay-under text-center">
						<div class="about-overlay-above">
							<i class="icon-ok"></i>
						</div>
					</div>
					<h6><span class="highlights-first">Exceptional</span><span>Service</span></h6>
				</div>					
			</div>
			<!-- TESTIMONIALS -->
			<div class="testimonials">
				<div class="about_bottom bot_angle_left" style="border-right-width: 1366px;"></div>
				<div class="container page-title  pad-bot"> 
					<div class="animated-fade colored-text col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 custom-animation-fade">
						<div class="caroufred-text">
							<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 730px; height: 216px; margin: 0px 0px 18px; overflow: hidden;">
                            <ul class="testimonials" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 5110px; height: 216px;">
								
<?php 
$result=mysqli_query($connection,"select client_id,client_pic, client_name, client_details from clients")or die ("query 1 incorrect.....");

while(list($client_id,$client_pic,$client_name,$client_details)=mysqli_fetch_array($result))
{
echo"	<li style='width: 730px;'>
		<p class='testimonials-img'>
		<img src='images/customers/$client_pic' alt='' style='width:120px; height:120px'></p>
		<p class='testimonials-quote text-center italic-text'>
		<cite>— $client_name</cite>
		<cite> $client_details</cite>
		</p></li>";
}
?>
        </ul></div>
		<div id="caroufred_testimonials_pager" class="carousel_pagination left" style="display: table;">
<a href="#"><span>1</span></a><a href="#"><span>2</span></a><a href="#" class="selected"><span>3</span></a></div>
						</div>	
					</div>											
				</div>
				<div class="team_top top_angle_left" style="border-left-width: 1366px;"></div>
			</div>	
			<!-- STAFF -->
			<div class="team blue-bg green">
				<div class="container">					
					<div class="title page-title text-center">
						<h1 class="light-text">Our Team</h1>
						<span class="underline white"></span>
					</div>													
				</div>
				<div class="container pad-bot">
					<div class="team-members">
						<div class="col-xs-12 col-sm-4 col-lg-4 smxs-margin animated-slide-left custom-animation-slide-left">
							<div class="block-inner">
								<div class="team-img">
									<img src="images/projects/IMG-20191029-WA0010.jpg" alt="team">
									<div class="overlay-img text-center">
										<div class="contact-icons">
											<div class="contact-icons-inner">											
												<a href="http://www.twitter.com/"><i class="icon-twitter"></i></a>
												<a href="http://www.facebook.com/"><i class="icon-facebook"></i></a>
												<a href="http://www.google.com/"><i class="icon-google-plus"></i></a>											
												<a href="http://www.instagram.com/"><i class="icon-instagram"></i></a>											
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="names text-center">								
								<span class="uppercase name">Project Manager | Interior Designer</span>
								<h5 class="text-center colored-text uppercase"> Ananya S</h5>

							</div>							
						</div>
<div class="col-xs-12 col-sm-4 col-lg-4 smxs-margin animated-scale-up custom-animation-scale-up">
     <div class="block-inner">
     <div class="team-img">
     <img src="images/projects/IMG_20190823_220524.JPG" alt="team">
     <div class="overlay-img text-center">
     <div class="contact-icons">
     <div class="contact-icons-inner">
                                                <a href="http://www.twitter.com/"><i class="icon-twitter"></i></a>
												<a href="http://www.facebook.com/"><i class="icon-facebook"></i></a>
												<a href="http://www.google.com/"><i class="icon-google-plus"></i></a>																					
												<a href="http://www.instagram.com/"><i class="icon-instagram"></i></a>											
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="names text-center">
								<span class="uppercase name">Interior Designer |CAD Operator</span>
								<h5 class="text-center colored-text uppercase">Deepa Kunder</h5>

							</div>							
						</div>
						<div class="col-xs-12 col-sm-4 col-lg-4 smxs-margin animated-slide-right custom-animation-slide-right">
							<div class="block-inner">
								<div class="team-img">
			<img src="images/projects/IMG-20190920-WA0002.jpg" alt="team">
			<div class="overlay-img text-center">
			<div class="contact-icons">
			<div class="contact-icons-inner">											
<a href="#"><i class="icon-twitter"></i></a>
<a href="#"><i class="icon-facebook"></i></a>											
<a href="#"><i class="icon-google-plus"></i></a>							
<a href="#"><i class="icon-instagram"></i></a>
			</div></div>
			</div></div>
			</div>	
	<div class="names text-center">
	<span class="uppercase name">CAD Operator</span>
<h5 class="text-center colored-text uppercase">Grifith Sheeba </h5>
	<span> </span>
				</div></div>
				</div></div>
                
<div class="team_bottom top_angle_right" style="border-left-width: 1366px;">
</div></div>	
</div>
		<!-- END OF about us -->		
		<!-- SERVICES -->
		<div id="services" class="main-section not-home ">	
		<div class="services gray-light-bg">			
		<div class="container">					
		<div class="title page-title text-center">
		<h1 class="dark-text">Services</h1>
		<span class="underline green"></span>
		</div></div>	
				<!-- SERVICES LIST -->
		<div class="container pad-bot">
		<div class="content green">					
		<div class="service">
							<div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-top custom-animation-slide-top">
								<div class="service-icon colored-background"><i class="icon-pencil"></i></div>								
								<h5 class="uppercase">Concept</h5>
								<p>The interior design concept is the starting point of every interior design project.  It consists of visual presentation of style, color and mood of the prospective space.In a simpler way it is the thread which binds all the beads of design elements ( furniture, color, upholstery and all other materials).<br>
To understand the conceptual way of thinking, which is about ideas and how they are formulated, requires new thinking and willingness to empty the old cupboard of preconceptions and prejudices. The major themes are the seven concepts of planning, circulation, 3D, construction, materials, colour and lighting, which covers the entire spectrum of a designer’s activity. Each of these concepts will ultimately drive the grand concept of the interior.
</p>								
								<div class="service-description"></div>
							</div>	
							<div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-right custom-animation-slide-right">
								<div class="service-icon colored-background"><i class="icon-picture"></i></div>
								<h5 class="uppercase">Design</h5>
								<p>During the design phase we take the requirements and limitations of the initial phases, the program/analysis phase and/or the record drawing phase, and produce a conceptual design. Depending on the options that the client would like to consider, several conceptual designs can be produced.
<br>
After the concept design phase, permit drawings are created. Depending on the clients approach to contractors, construction drawings can be created. To create construction drawings, a finished interior design is required. Basically we can thus divide the design phase into the following categories:
<br>
1.ConceptualDesign<br>
2. Design Development<br>
3. Permit Documents<br>
4. Construction Drawings<br>
5. Interior Design
</p>								
								<div class="service-description"></div>
							</div>														
						</div>									
						<div class="service">
							<div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-left custom-animation-slide-left">
								<div class="service-icon colored-background"><i class="icon-cogs"></i></div>
								<h5 class="uppercase">Construction</h5>
								<p>With our qualified team of architects and our many years of group experience and resources in other professions, we can offer our clients the highest standard of site management to suit their requirements.This phase is about the details and the requirements for construction of the Project. The Construction Documents shall include Drawings and Specifications that establish in detail the quality levels of materials and systems required for the Project.<br>
The scope of work which includes, but is not limited to preparing working drawings and specifications in compliance with universal accessibility guidelines and all applicable codes for:<br>
•	non-load bearing interior construction<br>
•	space planning<br>
•	reflected ceiling plans<br>
•	lighting<br>
•	interior detailing<br>
•	materials and finishes<br>
•	furnishings, fixtures and equipment
<br>Since public health, safety and welfare (HSW) are our first priorities, the Designer may collaborate with other licensed practitioners in the technical areas of mechanical, electrical, and load-bearing design as required for regulatory approval.
</p>								
								<div class="service-description"></div>
							</div>		
							<div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 smxs-margin animated-slide-bottom custom-animation-slide-bottom">
								<div class="service-icon colored-background"><i class="icon-building"></i></div>
								<h5 class="uppercase">Installation</h5>
								<p>This is our final step, and certainly the most exciting! While you were waiting for the big day, we were planning, ordering and confirming, measuring, sewing, building, and finishing the various pieces designed just for you. We conclude our projects with a "white glove" installation of all furnishings, dressing each room, ensuring a seamless handover to our clients.<br><br>
Everything you are expecting, will be delivered and setup on the same day, after the completion of any preliminary site work – maybe new flooring, fresh paint, new window treatment, etc.<br>
 The designer will arrive with our delivery crew to lay the rugs, place the furniture, hang the artwork, style the bookcases, set up the lamps – even to screwing in the light bulbs – and attend to all the finishing touches.<br>
With your Final Presentation in hand you will be equipped to verify that every item delivered is exactly as ordered – no surprises!
We have witnessed many faces gradually change from a somewhat anxious concern, to a smile, to a big grin. As your room comes together, you'll see that our diligence up until this step has really paid off – your room looks and feels even better than you had imagined.
</p>								
								<div class="service-description"></div>
							</div>													
						</div>																		
					</div>
				</div>						
				<!-- PROJECT LIST -->
				<div class="project-list">
					<div class="project_top bot_angle_right" style="border-right-width: 1366px;"></div>	
					<div class="white">					
						<div class="title page-title text-center colored-text">
							<h1 class="light-text">Project List</h1>
							<span class="underline white"></span>
						</div>									
					</div>
					<div class="caroufred green pad-bot animated-fade custom-animation-fade">
						<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1365px; height: 147px; margin: 0px 0px 18px; overflow: hidden;">
                        <ul class="project-list-gallery" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 6825px; height: 154px; max-height: 147px;">               					
							
<?php 
$project=mysqli_query($connection,"select project_id, project_name, project_pic, project_details from projects")or die ("query 1 incorrect.....");

while(list($project_id,$project_name,$project_pic,$project_details)=mysqli_fetch_array($project))
{
echo"<li class='project-list-item' style='width: 273px;'>
	<a href='#' class='project-popover' data-content='$project_details' data-original-title='$project_name'><img src='images/projects/$project_pic' alt='img' style='width:100%;'></a>
	</li>";
}
?></ul></div>
						<div id="caroufred_project_list_gallery" class="carousel_pagination left" style="display: table;"><a href="#" class="selected"><span>1</span></a><a href="#"><span>2</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>5</span></a><a href="#"><span>6</span></a><a href="#"><span>7</span></a><a href="#"><span>8</span></a><a href="#"><span>9</span></a><a href="#"><span>10</span></a></div>		
					</div>
					<div class="project_bottom top_angle_right" style="border-left-width: 1366px;"></div>
				</div>	
				<!-- PROCESS -->
				<div class="process gray-light-bg pad-bot">					
					<div class="title page-title text-center">
						<h1 class="dark-text">Process</h1>
						<span class="underline green"></span>
					</div>				
					<div class="container green process-description">
						<ul class="nav-tabs col-lg-5 col-md-6 col-sm-5 col-xs-12 uppercase animated-scale-up custom-animation-scale-up" id="process-tabs">
							<li class="active"><i class="icon-circle"></i> <a href="#management">Project Management</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#plan">Interior Design Property Plan</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#materials">Materials Presentation</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#ffespecifications">Furniture and Equipment Specifications</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#purchasing">Purchasing</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#installation">Installation</a> <i class="icon-circle"></i></li>
							<li><i class="icon-circle"></i> <a href="#documents">Construction Drawings and Documents</a> <i class="icon-circle"></i></li>
						</ul>
						<div class="tab-content col-lg-7 col-md-6 col-sm-7 col-xs-12 animated-scale-up custom-animation-scale-up">
							<div class="tab-pane active" id="management">
								<p>Interior designers who work as project managers seem to get the “short end of the stick".Duties and responsibilities are plentiful within a commercial building type for an interior design project manager</p>
								<ul>
									<li><i class="icon-magic"></i>Workflow, Strategic plan, Schedule, Budget </li>
									<li><i class="icon-paper-clip"></i> Schematic services</li>
									<li><i class="icon-legal"></i> Design development </li>
									<li><i class="icon-pencil"></i>Construction administration </li>
								</ul>
							</div>
							<div class="tab-pane" id="plan">
								<p>  Airy, spacious and versatile, open-plan living is a popular design choice for the modern home, but a successful scheme requires careful planning. We've rounded up the best-kept design secrets to help you transform a large empty room into a warm and welcoming sociable hub for the whole family. <span class="colored-text"></span> <span class="colored-text"></span></p><p>To give a large room instant shape and structure, use freestanding furniture to differentiate the various areas. An architect will have more ideas about possible layouts, so get expert advice before you start.  </p>
							</div>
							<div class="tab-pane" id="materials"><p>A design schematic is not the same thing as a mood board. A mood board is an arrangement of images, materials, textures, fonts, and colors that evokes the style of a project or concept. </p>
								<ul>
									<li><i class=" icon-magic"></i> Getting Started</li>
									<li><i class="icon-paper-clip"></i> Lay Out Your Room</li>
									<li><i class="icon-legal"></i> Highlight Fabrics, Colors, and Materials</li>
									<li><i class="icon-pencil"></i>   Add Product!</li>
								</ul>
							</div>						
							<div class="tab-pane" id="ffespecifications">
								<p> Selecting appropriate materials and finishes for a project requires considering more than aesthetics. Specifications should be durable, functional, and meet the sustainability, budgetary and life safety needs of the project</p><p> <span class="colored-text"></span> The designer should consider whether an item conforms to industry standards, and whether requirments are mandatory or optional, depending on the location of the project.  <span class="colored-text"></span> </p>
							</div>
							<div class="tab-pane" id="purchasing">
								<p> Interior designers make money by marking up the price of furniture when they sell it to you. Typically furniture companies offer professional interior designers a trade discount. </p>
								<ul>
									<li><i class=" icon-magic"></i>Freight, Delivery & Installation</li>
									<li><i class="icon-paper-clip"></i> Comparative Pricing</li>
									<li><i class="icon-legal"></i> Custom Products</li>
									<li><i class="icon-pencil"></i> Lead Times,Buy It Yourself</li>
								</ul>
							</div>
							<div class="tab-pane" id="installation">
								<p>Our project managers oversee installation on site using our experienced handling and installation crews.<span class="colored-text"></span>  <span class="colored-text"></span></p><p>When installing fine art or feature pieces, we use experienced technicians who understand the job. </p>
							</div>
							<div class="tab-pane" id="documents">
								<p>Construction documents are created from initial sketches and details provided by architects and home builders.Construction Documents serve two purposes: to apply for (and receive) a building permit from the city or other local authority and to construct the building.</p>
								<ul>
									<li><i class=" icon-magic"></i>Site Plan  </li>
									<li><i class="icon-paper-clip"></i> Life Safety Plan</li>
									<li><i class="icon-legal"></i> Floor Plan </li>
									<li><i class="icon-pencil"></i>Reflected Ceiling Plan, Finish Plans </li>
								</ul>
							</div>
						</div>
					</div>
				</div>							
			</div>
		</div>
		<!-- END OF services -->		
		<div class="project_top bot_angle_right" style="border-right-width: 1366px;"></div>		
    <!--project-->
        <div id="projects" class="main-section not-home">
            <div class="pad-bot">
                <div class="container">
                    <div class="title page-title text-center">
                        <h1 class="dark-text">Products</h1>
                        <span class="underline green"></span>
                    </div>
                </div>
                <div class="green animated-fade custom-animation-fade">
                    <div class="portfolioFilter text-center uppercase">
                        <span>Filter:</span>
                        <a href="#" data-filter="*" class="current">All</a>
                        <a href="#" data-filter=".kitchen">Kitchen &amp; Bath</a>
                        <a href="#" data-filter=".livingrooms">Living Rooms</a>
                        <a href="#" data-filter=".beedrooms">Bedrooms</a>
                        <a href="#" data-filter=".offices">Offices</a>
                        <a href="#" data-filter=".outdoors">Outdoors</a>
                    </div>

                    <div id="container" class="portfolioContainer text-center isotope" style="position: relative; overflow: hidden; height: 662px;">

                        <div class="offices isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(341px, 0px, 0px);">
                            <div class="isotope-img" style="max-height: 187px;">
                                <img src="images/projects/offices1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/projects/shopping_pic/offices1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
                            </div>
                            <div class="isotope-description">
                                <p class="product-type uppercase">Offices</p>
                                <h6 class="tile-bg-title colored-text">"Angelo"</h6>
                                <h5>
                                    <span class="price">Rs167000</span>
                                </h5>
                             <a href="web_admin/add_cart.php"> <button type="submit" class="btn btn-warning my-3" name="id">Add to cart <i class="fas fa-shopping-basket"></i></button>
                             </a>

                            </div>
                        </div>
                        <div class="kitchen isotope-item" style="position : absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">

                            <div class="isotope-img" style="max-height: 187px;">

                                <img src="images/projects/kitchen_bath1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/projects/kitchen_bath1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
                            </div>
                            <div class="isotope-description">
                                <p class="product-type uppercase">Hall</p>
                                <h6 class="tile-bg-title colored-text">"Dolphin"</h6>
                                <h5>
                                    <span class="price">Rs75000</span>
                                </h5>
                                <a href="web_admin/add_cart.php"> <button type="submit" class="btn btn-warning my-3" name="id">Add to cart <i class="fas fa-shopping-basket"></i></button>
                                </a>


                            </div>
                        </div>
                        <div class="livingrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(682px, 0px, 0px);">
                            <div class="isotope-img" style="max-height: 187px;">
                                <img src="images/projects/livingroom2.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/projects/shopping_pic/livingroom2.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
                            </div>
                            <div class="isotope-description">
                                <p class="product-type uppercase">Living Rooms</p>
                                <h6 class="tile-bg-title colored-text">"Marina"</h6>
                                <h5>
                                    <span class="price">Rs90000</span>
                                </h5>
                                <a href="web_admin/add_cart.php"> <button type="submit" class="btn btn-warning my-3" name="id">Add to cart <i class="fas fa-shopping-basket"></i></button>
                                </a>


                            </div>
                        </div>
                        <div class="kitchen isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(1023px, 0px, 0px);">
                            <div class="isotope-img" style="max-height: 187px;">
                                <img src="images/projects/kitchen_bath2.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/projects/shopping_pic/kitchen_bath2.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
                            </div>
                            <div class="isotope-description">
                                <p class="product-type uppercase">Kitchen &amp; Bath</p>
                                <h6 class="tile-bg-title colored-text">"Shark"</h6>
                                <h5>
                                    <span class="price">Rs95000</span>
                                </h5>
                                <a href="web_admin/add_cart.php"> <button type="submit" class="btn btn-warning my-3" name="id">Add to cart <i class="fas fa-shopping-basket"></i></button>
                                </a>


                            </div>
                        </div>
                        <div class="beedrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 331px, 0px);">
                            <div class="isotope-img" style="max-height: 187px;">
                                <img src="images/projects/bedroom1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/projects/shopping_pic/bedroom1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
                            </div>
                            <div class="isotope-description">
                                <p class="product-type uppercase">Bedrooms</p>
                                <h6 class="tile-bg-title colored-text">"Moon"</h6>
                                <h5>
                                    <span class="price">Rs45700</span>
                                </h5>
                                <a href="web_admin/add_cart.php"> <button type="submit" class="btn btn-warning my-3" name="id">Add to cart <i class="fas fa-shopping-basket"></i></button>
                                </a>


                            </div>
                        </div>
                        <div class="outdoors isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(341px, 331px, 0px);">
                            <div class="isotope-img" style="max-height: 187px;">
                                <img src="images/projects/outdoors1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/projects/shopping_pic/outdoors1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
                            </div>
                            <div class="isotope-description">
                                <p class="product-type uppercase">Outdoors</p>
                                <h6 class="tile-bg-title colored-text">"Forest"</h6>
                                <h5>
                                    <span class="price">Rs48000</span>
                                </h5>
                                <a href="web_admin/add_cart.php"> <button type="submit" class="btn btn-warning my-3" name="id">Add to cart <i class="fas fa-shopping-basket"></i></button>
                                </a>


                            </div>
                        </div>
                        <div class="livingrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(682px, 331px, 0px);">
                            <div class="isotope-img" style="max-height: 187px;">
                                <img src="images/projects/livingroom1.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/projects/shopping_pic/livingroom1.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
                            </div>
                            <div class="isotope-description">
                                <p class="product-type uppercase">Living Rooms</p>
                                <h6 class="tile-bg-title colored-text">"Jenny"</h6>
                                <h5>
                                    <span class="price">Rs99000</span>
                                </h5>
                                <a href="web_admin/add_cart.php"> <button type="submit" class="btn btn-warning my-3" name="id">Add to cart <i class="fas fa-shopping-basket"></i></button>
                                </a>


                            </div>
                        </div>
                        <div class="beedrooms isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(1023px, 331px, 0px);">
                            <div class="isotope-img" style="max-height: 187px;">
                                <img src="images/projects/bedroom2.jpg" alt="image" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="isotope-overlay"><a class="image-link" href="images/projects/shopping_pic/bedroom2.jpg"><i class="icon-eye-open tips" data-placement="top" data-toggle="tooltip" title="" data-original-title="Click to Zoom"></i></a></div>
                            </div>
                            <div class="isotope-description">
                                <p class="product-type uppercase">Bedrooms</p>
                                <h6 class="tile-bg-title colored-text">"Dreamy"</h6>
                                <h5>
                                    <span class="price">Rs87000</span>
                                </h5>
                                <a href="web_admin/add_cart.php"> <button type="submit" class="btn btn-warning my-3" name="id">Add to cart <i class="fas fa-shopping-basket"></i></button>
                                </a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio_bottom bot_angle_left blue-bg" style="border-right-width: 1366px;"></div>
        </div>
        <!-- END OF projects -->
        <!-- CONTACT -->                        <!-- CONTACT -->

                <!-- END OF projects -->
		<!-- CONTACT -->
		<div id="contact" class="main-section not-home green">	
			<div class="contact pad-bot blue-bg">
				<div class="container">
					<div class="title page-title text-center">
						<h1 class="light-text">Contact</h1>
						<span class="underline white"></span>
					</div>	
				</div>																
				<div class="container">
					<!-- ADDRESSES AND SOCIALS -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 smxs-margin animated-slide-top custom-animation-slide-top">																				
						<h6 class="uppercase colored-text">Address</h6>
						<p class="address">
						    Banglore
							<br>
                            JP Nagar

							<br>
							<abbr title="Phone">Call:</abbr>
							<span>7204832506</span>
							<br>
							<abbr title="Watsapp">Watsapp:</abbr>
							<span>8971906817</span>
							<br>

						</p>
						<h6 class="uppercase colored-text">Socials</h6>
						<div class="footer-icons">							
							<a href="http://www.twitter.com/"><i class="icon-twitter"></i></a>
							<a href="http://www.facebook.com/"><i class="icon-facebook"></i></a>
							<a href="http://www.linkedin.com/"><i class="icon-linkedin"></i></a>
							<a href="http://www.google.com/"><i class="icon-google-plus"></i></a>																							
						</div>
					</div>
					<!-- CONTACT FORM -->
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 animated-fade custom-animation-fade">
						<form method="post" class="contact-form">
							<fieldset>
								<input type="text" name="name" placeholder="Name" class="col-xs-12 col-sm-12 col-lg-12 input-text" id="namecon">
								<input type="text" name="email" placeholder="E-mail" class="col-xs-12 col-sm-12 col-lg-12 input-text" id="emailcon">
								<textarea rows="6" name="comments" placeholder="Message" class="col-xs-12 col-sm-12 col-lg-12 input-text" id="commentcon"></textarea>
								<div class="btn-wrapper"><input type="button" value="Submit" onclick="ajax.send()" class="uppercase btn btn-primary btn-large btn-input" id="sendcon"></div>
							</fieldset>	
						</form>		
					</div>
				</div>																																					
			</div>
		</div>
		<!-- END OF contact -->		
		<div class="copyright green-bg">
			<div class="contact_bottom bot_angle_right" style="border-right-width: 1366px;"></div>
			<div class="container blue">				
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 bottom-logo">
					<a class="navbar-brand smooth" href="#home">
						<img src="images/projects/logo.png" alt="logo">
					</a>
				</div>						

			</div>
		</div>

	</div>

	<script src="layout/js/jquery-1.10.2.min.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
	<script src="layout/js/modernizr.custom.43083.js"></script>
	<!--enable responsive features in IE8-->
	<!--[if IE 8]>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="layout/js/custom.js"></script>
	<script src="layout/js/retina.js"></script>
	<script src="layout/js/jquery.nicescroll.min.js"></script>
	<script src="layout/js/jquery.easing.1.3.js"></script>	
	<script src="layout/js/waypoints.min.js"></script>
	<script src="layout/js/waypoints-sticky.js"></script>	
	<script type="text/javascript" src="layout/js/jquery.carouFredSel-6.2.1.js"></script>		
	<script src="layout/js/jquery.isotope.min.js"></script>		
	<script src="layout/js/jquery.magnific-popup.min.js"></script>
	<!-- Preloader -->
	<script type="text/javascript">
		//<![CDATA[
			$(window).load(function() { // makes sure the whole site is loaded
				$("#status").fadeOut(); // will first fade out the loading animation
				$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
			})
		//]]>
	</script> 	
	<!-- Contact Form -->
   	<script>   
	   	var ajax = {
		   	send: function() {
				var userName = $("input[id=namecon]").val();
				var userEmail = $("input[id=emailcon]").val();
				var userComments = $("textarea[id=commentcon]").val();

				if(userName == "" || userEmail == "" || userComments == "")
					alert("Form not complete");
				else {
					ajax.SetText("Sending...");
					$.post("sendmail.php", {
						name: userName, email: userEmail, comments: userComments
					}, function(data) {
						if(data == "true") {
							ajax.SetText("Sent!");
						} else {
							ajax.SetText("Submit");
							alert(data);
						}


					});
				}

		   	},
		   	   	SetText: function(text) {
			   	   	$("input[id=sendcon]").val(text);
		   	   	}
	   	   }


    </script>

<div id="ascrail2000" class="nicescroll-rails" style="width: 7px; z-index: auto; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 78px; border: 1px solid rgb(255, 255, 255); border-radius: 5px; background-color: rgb(0, 0, 0); background-clip: padding-box;"></div></div>
</body></html>