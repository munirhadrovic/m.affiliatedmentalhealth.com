<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
        <link rel="stylesheet" href="css/themes/nenad1.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />

		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
            $(function(){
                $('#menu4').slicknav({
                    prependTo:'#navigation-menu4'
                });
            });
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		}); 
			// 	}
			// });
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logoo1.gif" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Mobile Site<a href="http://marketrivals.com" rel="external">  Clasic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slide1.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slide2.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slide3.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0)
									{
									  
									     console.log("Blakberu je prosao ");
									   <!--k,cvj bsdj kb vjklbvj,.x-->
									}
								
									// if (ua.indexOf("BlackBerry") >= 0) {

									// console.log("Blakberu je prosao ")
									// var prostordugme=document.getElementById('findUS');
									// var dugme= document.createElement('a');
									// dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									// dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									// dugme.innerHTML="Find US";
									// prostordugme.appendChild(dugme);
									// }		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page" data-transition="<?php echo $transitionefect ?>">About Us</a></div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Directions</a></div>
              </div>

            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us </a></div>
				</div>

		  </div>

		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
							<li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					<img src="img/web-design/service.jpg" alt="SLider" class="images-mobile">
					

				</div>

			</div>	
				
				
		</div>
		
	<!-- page 2 ///////////////////////////-->
		<!-- page 3 ///////////////////////-->


		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>	
					<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
						Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
						E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
						Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
						Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
						Message:<br>
						<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
						<input type="submit" value="Send" name="submit" class="btn">
					</form>
				</div>
			</div>
		
		</div>
<!--page 3///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 5///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page5" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu">
                        <ul id="menu">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <section id="our">
                             <h1 id="dd">Our Staff</h1>
                        <h2>Director</h2>
                        <img src="img/web-design/janny.jpg" width="100" alt="Janny Becker" >
                        <h4>Janny Becker</h4>
                        <p>Janny founded AMHP in 1988 after 21 years of working with the chronically mentally ill in the public system.
                            During those years, she worked in in-patient hospitals, community mental health centers, residential group homes,
                            and intensive case management. On the 40th anniversary of her career, she retired in February 2008, but continues
                            to provide oversight and consultation to the agency.</p>
                        <h3>Education</h3>
                        <ul>
                            <li>Columbia University, NYC, B. S., Occupational Therapy 1968</li>
                            <li>University of Washington, Seattle, Political Science and Occupational Therapy 1961 - 1964</li>
                        </ul>
                        <ul>
                            <h3>Certification/License</h3>
                            <li>National Certification with American Occupational Therapy Association 1968 - 2008, Sustaining member, retired, 2008 to 2010.</li>
                            <li>State of Washington, Licensed Occupational Therapist, 1972 -2008</li>
                        </ul>
                        <h3>Associations</h3>
                        <ul>
                            <li>American Occupational Therapy Association</li>
                            <li>Washington State Occupational Therapy Association</li>
                            <li>Washington State Day Treatment Association, Treasurer, Chair for 1977 Day Treatment Washington State annual Conference</li>>
                        </ul>>
                        <h3>Community Service</h3>
                        <ul>
                            <li>504/ADA Committee, King County, member, Chairperson, 1989-1995</li>
                            <li>Advisory Committee to King Co. Executive for the Disabled, 1990-1994</li>
                            <li>King County Commisioner, on Human Rights Commission representing the Disabled, 1994-1996</li>
                            <li>King County Mental Health Quality Assurance  committee to KC Mental Health Board, member, 1995, co-chair, 1996-1998</li>
                            <li>Seattle Counseling Services, member of Board, 1992-1994</li>
                            <li>Eastside NAMI, member of Board, 2005-2006</li>
                            <li>Founder and producer of the AIDS Prevention Theatre Troupe serving the mentally ill and young adults, 1990-2001</li>
                            <li></li>
                        </ul>



                             </section>
                </div>

            </div>
        </div>




        <!--page 5///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page 4///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page4" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu4">
                        <ul id="menu4">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <section id="service">
                        <h3> Mental Health Assessment and Evaluation </h3>
                        <p>At AMHP, we believe that each person has the right to dignity, compassion, respect and self determination.
                            We support individuals with the understanding that there are no limits to recovery, and provide support to live a healthy lifestyle.
                            Our clients learn to experience hope, empowerment, choice and personal responsibility.
                            We will support you to find your own unique path to healing and recovery.</p>
                        <h3>Initial Assessment and Evaluation</h3>>
                        <p>When a client first comes to AMHP, our clinical director meets with them and any supportive individuals (family, spouse, etc.).
                            If the client is interested in having someone as part of the treatment team, they are invited in to help gather information
                            for a comprehensive assessment and to evaluate the best type of program suited for the client's specific needs.</p>
                        <p>Our assessment begins by compiling a comprehensive history of education, family, psychosocial events, medical issues,
                            and mental health issues, as well as drug and alcohol history, and any information related to legal issues. If an individual
                            is referred to us from a hospital, records form the hospital are acquired prior to the meeting in order to help get an initial
                            sense of the current mental health issues.</p>
                        <p>Our services are driven by the assessed needs of each individual and based on their strengths, goals and objectives.
                            We work together as a team to develop a plan that will begin to address concerns identified by the director,
                            client and any other resources that may help contribute to a comprehensive, positive plan.</p>
                        <h3>Individualized Treatment</h3>
                        <p>The director assigns a staff member who has been determined to be best suited to help each individual according
                            to their specific needs. Treatment begins with a signed agreement to receive services, a release of information
                            to multiple resources, and a contract for services. The assigned therapist/case manager will set up an initial meeting
                            with the client and any relevant individuals to develop a client focused and strength based treatment plan.
                            This initial appointment may occur at the office or at the client's residence as needed.</p>>
                        <h1>For Older Adults</h1>
                        <p>Each individual receives a comprehensive assessment of their mental health, physical health, psychosocial evaluation,
                            work history, family, lifestyle and residential situation. Counseling and therapeutic case manager address issues such
                            as depression, anxiety, changes in lifestyle, grief, severe psychiatric disorders, and complex medication management issues.
                            Services are provided in the office and at home as indicated. Coordination of care with all medical providers and family is
                            an essential and valued part of our care with older adults.</p>

                       <a href="http://affiliatedmentalhealth.com/geriatric_care.html">more information about geriatric care</a>

                        <h1>Medication</h1>
                        <p>AMHP provides referrals to psychiatrists to assess the need for medication. If the client has a psychiatrist,
                            we explain the importance for care coordination and request contact with the doctor.
                        </p>
                        </section>



                </div>

            </div>
            </div>



            <!--page 4///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>


<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
