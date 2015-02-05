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
        <link rel="stylesheet" href="css/t/t.css" />
        <link rel="stylesheet" href="css/t/jquery.mobile.icons.min.css" />

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
                $('#menu1').slicknav({
                    prependTo:'#navigation-menu1'
                });
            });
            $(function(){
                $('#menu2').slicknav({
                    prependTo:'#navigation-menu2'
                });
            });
            $(function(){
                $('#menu3').slicknav({
                    prependTo:'#navigation-menu3'
                });
            });
            $(function(){
                $('#menu4').slicknav({
                    prependTo:'#navigation-menu4'
                });
            });
            $(function(){
                $('#menu4a').slicknav({
                    prependTo:'#navigation-menu4a'
                });
            });
            $(function(){
                $('#menu5').slicknav({
                    prependTo:'#navigation-menu5'
                });
            });
            $(function(){
                $('#menu5a').slicknav({
                    prependTo:'#navigation-menu5a'
                });
            });
            $(function(){
                $('#menu6a').slicknav({
                    prependTo:'#navigation-menu6a'
                });
            });
            $(function(){
                $('#menu6').slicknav({
                    prependTo:'#navigation-menu6'
                });
            });
            $(function(){
                $('#menu7').slicknav({
                    prependTo:'#navigation-menu7'
                });
            });
            $(function(){
                $('#menu8').slicknav({
                    prependTo:'#navigation-menu8'
                });
            });
            $(function(){
                $('#menu9').slicknav({
                    prependTo:'#navigation-menu9'
                });
            });
            $(function(){
                $('#menu10').slicknav({
                    prependTo:'#navigation-menu10'
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
		    <h1><img src="img/logo1.png" alt="LOGO"></h1>
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
				        <img src="img/slider-images/slide31.jpg" alt="">
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
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></div>
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
							<li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							<li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
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
<!--page 4 Services glavni/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page4" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu4">
                        <ul id="menu4">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#prvi1" data-transition="<?php echo $transitionefect ?>">Mental Health Assessment and Evaluation</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#drugi2" data-transition="<?php echo $transitionefect ?>">Long-term Care Coordination</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#treci3" data-transition="<?php echo $transitionefect ?>">Senior Services</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#cetvrti4" data-transition="<?php echo $transitionefect ?>">Mental Health Counseling</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#peti" data-transition="<?php echo $transitionefect ?>">Specialized Services for High Functioning Autism and Asperger's Syndrome</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#sesti" data-transition="<?php echo $transitionefect ?>">Services For Those With Medical Issues</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page" data-transition="<?php echo $transitionefect ?>">Groups and Meetings</a></div>
                    </div>



                </div>

            </div>


        </div>
        <!--page 4 Services glavni//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --?


        <!--page1 Mental Health Assessment and Evaluation ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="prvi1" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu1">
                        <ul id="menu1">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <section id="prvi">

                    <div id="content">
                        <h2>Mental Health Assessment and Evaluation</h2>
                        <p>At AMHP, we believe that each person has the right to dignity, compassion, respect and self determination.
                            We support individuals with the understanding that there are no limits to recovery, and provide support to live a healthy lifestyle.
                            Our clients learn to experience hope, empowerment, choice and personal responsibility.
                            We will support you to find your own unique path to healing and recovery.
                        </p>
                        <h1>Initial Assessment and Evaluation</h1>
                        <p>When a client first comes to AMHP, our clinical director meets with them and any supportive individuals (family, spouse, etc.).
                            If the client is interested in having someone as part of the treatment team, they are invited in to help gather information for
                            a comprehensive assessment and to evaluate the best type of program suited for the client's specific needs.
                        </p>
                        <p>Our assessment begins by compiling a comprehensive history of education, family, psychosocial events, medical issues,
                            and mental health issues, as well as drug and alcohol history, and any information related to legal issues.
                            If an individual is referred to us from a hospital, records form the hospital are acquired prior to the meeting in order
                            to help get an initial sense of the current mental health issues.
                        </p>
                        <p>Our services are driven by the assessed needs of each individual and based on their strengths, goals and objectives.
                            We work together as a team to develop a plan that will begin to address concerns identified by the director,
                            client and any other resources that may help contribute to a comprehensive, positive plan.
                        </p>
                        <h1>Individualized Treatment</h1>
                        <p>The director assigns a staff member who has been determined to be best suited to help each individual according to their specific needs.
                            Treatment begins with a signed agreement to receive services, a release of information to multiple resources, and a contract for services.
                            The assigned therapist/case manager will set up an initial meeting with the client and any relevant individuals to develop
                            a client focused and strength based treatment plan.  This initial appointment may occur at the office or at the client's residence as needed.
                        </p>
                        <h1>For Older Adults</h1>
                        <p>Each individual receives a comprehensive assessment of their mental health, physical health, psychosocial evaluation, work history,
                            family, lifestyle and residential situation.  Counseling and therapeutic case manager address issues such as depression, anxiety,
                            changes in lifestyle, grief, severe psychiatric disorders, and complex medication management issues.  Services are provided in the
                            office and at home as indicated.  Coordination of care with all medical providers and family is an essential and valued part of our
                            care with older adults.
                        </p>
                        <p><a href="#care">more information about geriatric care</a>
                        </p>
                        <h1>Medication</h1>
                        <p>AMHP provides referrals to psychiatrists to assess the need for medication.  If the client has a psychiatrist,
                            we explain the importance for care coordination and request contact with the doctor.
                        </p>
                    </div>
                    </section>
                </div>

            </div>


        </div>
        <!--page1 Mental Health Assessment and Evaluation ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--care //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->

        <div data-role="page" id="care" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu8">
                        <ul id="menu8">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>

                        <div id="care">
                            <h2>Geriatric Care</h2>
                            <p>AMHP assists seniors to live successfully in the familiar settings of their own homes,
                                assisted living situations and other facilities.  Our mental health expertise enhances our services
                                to adults with long-term mental health problems, and/or dementias including Alzheimer’s disease.
                            </p>
                            <h1>Specialized Services</h1>
                            <p>We provide the following services for geriatric care:</p>
                            <ul>
                                <li><a href="#prvi1">Assessment and evaluation</a> of current care and future options</li>
                                <li>Guidance and consultation services for clients, families, and caregivers</li>
                                <li>24-hour emergency telephone service</li>
                                <li><a href="#drugi2">Coordination of care</a> with other professionals</li>
                                <li><a href="#cetvrti4">Mental health treatment</a></li>
                                <li><a href="#cetvrti4">Supportive counseling</a> for a wide variety of issues, including terminal illnesses</li>
                                <li><a href="#drugi2">Payee services</a></li>
                                <li><a href="#drugi2">Monitoring of in-home care</a></li>
                                <li><a href="#drugi2">Housing placement</a></li>
                            </ul>
                        </div>
                    </div>



                </div>

            </div>


        </div>



        <!--care //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->























        <!--page2  Long-term Care Coordination///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="drugi2" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu2">
                        <ul id="menu2">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>

                        <section id="drugi"   >
                            <div id="content">
                                <h2>Long-term Care Coordination</h2>
                                <h1>Intensive Case Management</h1>
                                <p>At AMHP, we define Intensive Case Management as extensive coordination of client care.  We work closely with other client involved providers
                                    for consistency in approach to directly assisting the client with managing their disorder, maintaining an appropriate living
                                    environment and developing a quality life style.
                                </p>
                                <p>AMHP coordinates client discharge planning with hospitals and other institution staff.  Discharge planning services include
                                    determining medical needs and arranging services, and working to provide appropriate mental health services such as day programs,
                                    vocational counseling, education resources and arranging volunteer and paid work opportunities.
                                </p>
                                <p>We also provide medication monitoring including direct monitoring of clients taking their medication, observing for side effects and
                                    accompanying clients to medical appointments to insure proper follow-through of treatment recommendations.
                                </p>
                                <h1>Advocacy</h1>
                                <p>At AMHP, we work on the client's behalf to promote mental health and safety in the community.  We advocate for the client with other medical
                                    care providers, landlords, guardians, fiduciaries, employers, and educators.
                                </p>
                                <h1 id="payee">Money Management</h1>
                                <p>When needed, AMHP provides money management services to the client.  This includes coordinating with families,
                                    guardians, fiduciaries and lawyers in providing direct payee services, monitoring and dispersing allowances,
                                    assisting with client budgeting, and providing financial education for managing bank accounts and dealing with cash in the community.
                                </p>
                                <h1 id="housing">Housing Placement and Maintenance</h1>
                                <p>As part of overall client care, AMHP works to place clients in proper housing including private residences
                                    (apartments, condos, houses), adult family homes and group homes.  We also monitor and insure proper upkeep
                                    of the home and arrange for services including cleaning, maintenance, and overall upkeep.
                                </p>
                                <h1>Outreach to Client in the Community</h1>
                                <p>AMHP educates and helps clients use existing resources available to them in their community.
                                    As an example, our staff accompanies clients on outings to learn social skills in the community.
                                    Our clinicians may choose to meet with clients for therapy in the home or in the community when
                                    a less formal environment will facilitate a more comfortable interaction than in the formal office setting.
                                </p>
                            </div>

                        </section>
                </div>
            </div>
        </div>
        <!--page2  Long-term Care Coordination///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page3  Senior Services///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div data-role="page" id="treci3" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu3">
                        <ul id="menu3">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <section id="treci">
                        <div id="content">
                            <h2>Senior Services</h2>
                            <p>AMHP assists seniors to live successfully in the familiar settings of their own homes, assisted living situations and other facilities.  Our mental health expertise enhances our services to adults with long-term mental health problems, and/or dementias including Alzheimer’s disease.
                            </p>

                            <h1>Services for Seniors Living at Home</h1>
                            <p>We provide coordination of care and intensive case management with the goal of allowing clients to remain at home for as long as possible.</p>
                            <ul>
                                <li>Home visits for counseling and work with home based activity</li>
                                <li>Assistance in keeping residence safe and healthy</li>
                                <li>Assistance in shopping</li>
                                <li>Coordination of care with physicians and all service providers</li>
                                <li>Transport to doctors and other necessary appointments</li>
                                <li>Medication monitoring</li>
                                <li>Medical care follow-through in accordance with doctors’ instructions</li>
                                <li>Mental health counseling</li>
                                <li>General client advocacy</li>
                                <li>Referrals to agencies for in-home assistance with</li>
                                <ul>
                                    <li>Activities of daily living</li>
                                    <li>Management of bills and finance</li>
                                    <li>Obtaining meals</li>
                                    <li>Home upkeep</li>
                                </ul>
                                <li>Referrals to higher levels of care</li>
                            </ul>

                            <h1>Services to Caregivers of Seniors</h1>
                            <p>“The Caregiver Must Survive" - services for adult children of aging parents (and other family members and caregivers)</p>
                            <ul>
                                <li>Coordination of services with all caregivers</li>
                                <li>Family counseling</li>
                                <li>Providing resource information</li>
                                <li>Counseling</li>
                                <li>Arranging respite for caregivers</li>
                                <li>Providing information on medical and mental health issues</li>
                                <li>Workshops on what you need to know as a care giver</li>
                            </ul>

                            <h1>Specialized Services</h1>
                            <p>We provide the following services for senior care:</p>
                            <ul>
                                <li><a href="assessment_and_evaluation.html">Assessment and evaluation</a> of current care and future options</li>
                                <li>Guidance and consultation services for clients, families, and caregivers</li>
                                <li>24-hour emergency telephone service</li>
                                <li><a href="long_term_care_coordination.html">Coordination of care</a> with other professionals</li>
                                <li><a href="mental_health_counseling.html">Mental health treatment</a></li>
                                <li><a href="mental_health_counseling.html">Supportive counseling</a> for a wide variety of issues, including terminal illnesses</li>
                                <li><a href="long_term_care_coordination.html#payee">Payee services</a></li>
                                <li><a href="long_term_care_coordination.html#housing">Monitoring of in-home care</a></li>
                                <li><a href="long_term_care_coordination.html#housing">Housing placement</a></li>
                            </ul>
                        </div>

                    </section>


                </div>

            </div>



        </div>
        <!--page3  Senior Services///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page4a  Mental Health Counseling///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="cetvrti4" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu4a">
                        <ul id="menu4a">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                   <section id="cetvrti"
                    <div id="content">
                        <h2 id="a"> Mental Health Counseling</h2>
                        <h1 id="a">Solution Focused Therapy</h1>
                        <p>At AMHP we take a solution focused approach toward working with current mental health issues to resolve problems such as anxiety,
                            depressions, relationships, addictions, identity issues, grief and loss, and long term disability.
                        </p>
                        <p>Our counseling is focused on the management of identified diagnoses.  Our staff provides feedback to both positive and negative
                            behaviors and aspects of the client's diagnoses, and gives support for overcoming roadblocks in the community.
                            In addition to in-office counseling, therapy is taken to client homes when an office setting is counterproductive.
                        </p>
                        <p>We work to educate clients by teaching the purpose of medications.  We help clients manage medications by evaluating
                            with the client the positive and negative effects of medication and discussing client concerns regarding medication.
                        </p>
                        <h3>Co-Occurring Disorder (Mental Health and Addiction Issues)</h3>
                        <p>AMHP also specializes in providing co-occurring disorder counseling.  When both mental health and addiction are present in the
                            client's diagnoses, we have a chemical dependency professional on staff available to work with clients dealing with co-occurring disorder.
                        </p>
                        <h3>Group Counseling</h3>
                        <p>Group counseling is offered when needed by putting together groups for individuals with similar issues.
                            Group therapy is often used to provide a setting to work on relationship issues as a group.
                        </p>
                    </div>

                </div>

            </div>


        </div>

        <!--page4a Mental Health Counseling///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 5a Specialized Services for High Functioning Autism and Asperger's Syndrome///////////////////////////////////////////////////////////////-->
        <div data-role="page" id="peti" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu5a">
                        <ul id="menu5a">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <section id="peti">
                        <div>
                            <h2 id="a">Specialized Services for High Functioning Autism and Asperger's Syndrome</h2>
                            <h1 id="a">Vision</h1>
                            <p>Empowering those with HFA and Asperger's syndrome to thrive as valued members of the community.
                            </p>
                            <h2 id="a">Philosophy: Strength Based Approach</h2>
                            <p>Our key objective is to support and nurture the strengths of individuals with high functioning autism and Asperger’s Syndrome.
                                Problems are addressed to assist the clients in fulfilling their potential and reaching their goals in interpersonal relationships,
                                education, employment and pursuing meaningful, safe activities.
                            </p>
                            <p>AMHP helps clients reach their full potential by teaching and coaching daily living skills such as grooming and self care,
                                structuring and managing time, mobility in transportation, clothing care, money management, stress reduction, and managing sensory overload.
                                Community interaction is promoted through peer mentoring (a volunteer adult) supervised by staff. Recreational activities are often used to promote relationships and investigate new activities of interest to the client.
                            </p>
                            <p>Our staff provides <a href="long_term_care_coordination.html">intensive case management</a> for clients including providing <a href="mental_health_counseling.html">individual counseling</a>, <a href="couples_and_family_counseling.html">working with the family</a>, and acting as liaison for respite care.
                            </p>
                        </div>

                    </section>


                </div>

            </div>


        </div
            <!--page 5a Specialized Services for High Functioning Autism and Asperger's Syndrome///////////////////////////////////////////////////////////////-->
            <!--page 6a Services For Those With Medical Issues/////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="sesti" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu6a">
                        <ul id="menu6a">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <section id="sest">
                        <div id="content">
                            <h2>Services For Those With Medical Issues</h2>
                            <p>AMHP provides <a href="long_term_care_coordination.html">intensive case management</a> services for people with primary medical diagnoses who also have mental health issues which complicate treatment. We help physicians as well as patients through:</p>
                            <ul>
                                <li>Coordinating care with other professionals involved with the patient</li>
                                <li>Assisting clients in monitoring medications</li>
                                <li>Assisting with following through on doctor's instructions</li>
                                <li>Providing objective information to the physician by being in contact with patients between appointments</li>
                                <li>Working with client life style changes necessary to address medical issues</li>
                                <li>Working with mental health issues including depression, grief, psychotic symptoms, or difficult behaviors</li>
                                <li>Transport to appointments</li>
                                <li>Assisting with maintaining and improving quality of life</li>
                            </ul>
                            <!--
                            <p>AMHP is a private mental health agency providing <a href="long_term_care_coordination.html">intensive case management</a> for people with significant mental health issues.  We offer services for people with primary medical diagnoses who also have mental health issues that interfere with treatment.  We are able to help physicians as well as patients by providing the following services:</p>
                            </p>
                            <ul>
                                <li>Coordinate care with other professionals involved with the patient</li>
                                <li>Monitor medications</li>
                                <li>Work with mental health issues of depression, paranoia, delusions and managing difficult behaviors</li>
                                <li>Transport to appointments</li>
                                <li>Assist with follow up to doctor's instructions</li>
                                <li>Assist with quality of life which may be difficult when dealing with medical conditions</li>
                                <li>Have contact with patients between appointments and provide objective and valuable information to the physician</li>
                                <li>Assist with life style changes necessary to address medical issues</li>
                            </ul>
                            -->
                            <p>For more information, please <a href="contact.html">contact us</a>.</p>
                        </div>









                    </section>


                </div>

            </div>


        </div>
        <!--page 6a Services For Those With Medical Issues/////////////////////////////////////////////////////////////////////////////////////////////////-->


        <!--page 5 Our Staff///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page5" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu5">
                        <ul id="menu5">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <section id="paa">
                        <tbody> <tr id="Janny">
                            <td>
                                <h1>Director</h1>
                                <img class="bio" src="img/web-design/janny.jpg" width="100" alt="Janny Becker">
                                <h4>Janny Becker</h4>
                                <ul><li>
                                    Janny founded AMHP in 1988 after 21 years of working with the chronically mentally ill in the public system.

                                    During those years, she worked in in-patient hospitals, community mental health centers, residential group homes,
                                    and intensive case management.  On the 40th anniversary of her career, she retired in February 2008, but continues
                                    to provide oversight and consultation to the agency.
                                </li></ul>
                                <h3>Education</h3>
                                <ul>
                                    <li>Seattle University, master's candidate in Public Administration, 1986 -1988</li>
                                    <li>Columbia University, NYC, B. S., Occupational Therapy 1968</li>
                                    <li>University of Washington, Seattle, Political Science and Occupational Therapy 1961 - 1964</li>
                                </ul>

                                <h3>Certification/License</h3>
                                <ul>
                                    <li>National Certification with American Occupational Therapy Association 1968 - 2008, Sustaining member, retired, 2008 to 2010.</li>
                                    <li>State of Washington, Licensed Occupational Therapist, 1972 -2008</li>
                                </ul>

                                <h3>Associations</h3>
                                <ul>
                                    <li>American Occupational Therapy Association</li>
                                    <li>Washington State Occupational Therapy Association</li>
                                    <li>Washington State Day Treatment Association, Treasurer, Chair for 1977 Day Treatment Washington State annual Conference</li>
                                </ul>

                                <h3>Community Service</h3>
                                <ul>
                                    <li>504/ADA Committee, King County, member, Chairperson, 1989-1995</li>
                                    <li>Advisory Committee to King Co. Executive for the Disabled, 1990-1994</li>
                                    <li>King County Commisioner, on Human Rights Commission representing the Disabled, 1994-1996</li>
                                    <li>King County Mental Health Quality Assurance  committee to KC Mental Health Board, member, 1995, co-chair, 1996-1998</li>
                                    <li>Seattle Counseling Services, member of Board, 1992-1994</li>
                                    <li>Eastside NAMI, member of Board, 2005-2006</li>
                                    <li>Founder and producer of the AIDS Prevention Theatre Troupe serving the mentally ill and young adults, 1990-2001</li>
                                </ul>
                            </td>
                            <td>
                                <h3>Specialties</h3>
                                <p>
                                    Program development, psychodrama, group therapy, counseling for management of bi-polar disorder
                                </p>
                                <h3>Philosophy</h3>
                                <p>
                                    <i>The basis of care coordination and counseling is to develop a collaborative relationship with the client toward  Improving their general quality of life by supporting the management of mental health, promoting  productive activities and advocating for the respect and dignity of the client in the community.</i>
                                </p>
                                <h3>Personal Interests</h3>
                                <p>
                                    Enjoying my dogs, Charlie and  Coco Chanel and cat "Ms. Kitty". Studying Ikebana (Japanese flower arranging), reading fiction and non fiction, studying ancient history, classical piano, oil painting, puttering in my gardens, and visiting Mexico.
                                </p>
                            </td>
                        </tr>
                        </tbody>



                        <h1>Clinical Director</h1>

                            <tbody><tr id="Jerry">
                                <td>
                                    <img class="bio" src="img/web-design/jerry.jpg" width="100" alt="Jerry Hagen">
                                    <h4>Jerry Hagen, MSW, LICSW</h4>
                                    <p>
                                        Jerry has 30 years of professional social work experience. His career includes 22 years with the Department of Veteran Affairs in Seattle and Hawaii. Most recently, he was the Team Leader of the VA’s Mental Health Intensive Case Management Program from 1994 – 2006. He has wide-ranging experience in program development and administration as well as direct service. Specialty areas have included chemical dependency treatment, acute day hospital, emergency room services, and outpatient psychiatry.
                                    </p>
                                    <h3>Education</h3>
                                    <ul>
                                        <li>Master of Social Work<br>
                                            University of Hawaii, 1976</li>
                                        <li>BA Psychology<br>
                                            University of Washington, 1975</li>
                                    </ul>
                                    <h3>Certification/License</h3>
                                    <p>
                                        Licensed Independent Clinical Social Worker
                                    </p>
                                </td>
                                <td>

                                    <h3 class="right">Specialties</h3>
                                    <p>
                                        Individual case management, psychotherapy, group therapy
                                    </p>
                                    <h3>Philosophy</h3>
                                    <p>
                                        <i>I believe that establishing a healthy balanced lifestyle is essential for laying the groundwork for meaningful change.  Supportive care can make a significant impact on people's lives and help them achieve their greatest potential in community living.
                                        </i>
                                    </p>
                                    <h3>Personal interests</h3>
                                    <p>
                                        Spending time with his wife of 20 years and his adopted cat Roxy.  Working on home rehab projects, walking, jogging and going to the gym.
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                    <h1>Care Coordinators</h1>
                        <tbody><tr>
                            <td>
                                <img class="bio" src="img/web-design/Denise.JPG" width="100" alt="Denise Ascolesi">
                                <h4>Denise Ascolesi, MA, LCPC</h4>
                                <p>Denise has 13 years of experience working with adults with chronic and persistent mental illness,
                                    through case management, crisis intervention and therapeutic support. She has worked in both residential
                                    and outpatient environments, has directed psychiatric rehabilitation services in Chicago and has conducted
                                    emergency department assessments. Additionally, Denise has experience with clients with dual diagnosis, personality disorders and has facilitated program development in residential treatment setting.
                                </p>
                                <h3>Education</h3>
                                <p>BA Sociology<br>
                                    UC Santa Barbara, 2000<br>
                                </p><p> MA Community Counseling<br>
                                    Argosy University, Chicago, 2007
                                </p>
                                <h3>Certification/License</h3>
                                <p>Licensed clinical professional      counselor,National certified counselor
                                </p>
                                <h3 class="right">Specialties</h3>
                                <p>Case management of chronically mentally ill, crisis management, personality disorders, outpatient group psychotherapy
                                </p>
                                <h3>Philosophy</h3>
                                <p><i>Empowering each individual to achieve his or her goals through support, encouragement and the
                                        therapeutic relationship in order to live a life that is personally meaningful and rewarding.
                                    </i></p>
                                <h3>Personal interests</h3>
                                <p>
                                    Living life to the fullest through new experiences, travel and being open to learning each day.
                                    Spending time with family and friends, and taking care of myself through daily walks, warm baths and a good book.
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    <h4>Cynthia Hale, BA, CC</h4>
                    <img class="bio" src="img/web-design/cynthia.jpg" width="100" alt="Cynthia Hale">
                    <p>Cynthia has 12 years experience with diverse populations providing comprehensive therapeutic and community support.
                        She has training in geriatrics, crisis management, eating disorders, mood disorders and psychopharmacology.
                        Cynthia has a passion for seeing that older adults'
                        physical and emotional needs are met and has done extensive advocacy on their behalf.</p>
                    <p>Prior to working at AMHP, she worked at the Community House Mental Health Agency for ten years, and as a residential
                        counselor at Cascade Hall, Seattle. She also worked as an instructor for Creative Living Services, Seattle,
                        supporting adults with developmental disabilities with life and social skills.</p>
                    <h3>Education</h3>
                    <ul><li>BA Liberal arts
                    <br>
                    Evergreen State College, 1990</li></ul>

                    <h3>Certification/License</h3>
                        <ul>
                    <li>Washington State Certified Counselor</li></ul>

                    <h3>Associations</h3>
                    <ul><li>
                        Alzheimers Association
                    </li></ul>
                    <h3>Community Service</h3>
                    <ul>
                        <li>Day treatment team member (volunteer) at Community House Mental Health Agency, Seattle</li>
                        Program Assistant (volunteer) at Heart of Glass Foundation, Seattle, developing curriculum using art, music,
                        photography and dance for program for teens living with HIV/AIDS.
                    <li>Group Facilitator for an arts and a womens group</li></ul>
                    <h3>Specialties</h3>
                    <ul>
                    <li>Chronically Mentally Ill Case Management, Geriatrics</li></ul>
                    <h3>Philosophy</h3>
                    <ul><li><i>To support others to live a full and rich life and to help improve their quality
                               of life through comprehensive care and by improving social relationships.
                    </i></li></ul>
                    </p>
                    <h3>Personal interests</h3>
                    <ul><li>
                        Spending time with family and friends, yoga, gardening, cooking as an art, and being in nature.
                    </li></ul>


                    </section>
                </div>

            </div>
        </div>
        <!--page 5 Our Staff///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page 6///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page6" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu6">
                        <ul id="menu6">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page7" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <section id="direction">
                    <h1 id="dire"> <strong>Contact Us</strong></h1>
                    <p><h3><b>Affiliated Mental Health Programs, Inc.</b></h3></p>
                    <p>
                        Jerry Hagen, LICSW
                        <br>
                        Clinical Director
                    </p>
                    <p>
                        636 Lake Washington Blvd East
                        <br>
                        Seattle, WA 98112
                    </p>
                    <p>
                        Phone: (206) 322-5258
                        <br>
                        Fax: (206) 322-7621
                    </p>
                    <p>
                        Email:
                        <a href="mailto:amhp@amhpseattle.com">amhp@amhpseattle.com</a>
                    </p>
                    <h1 id="directions">Directions</h1>
                    <p>
                        AMHP is now located in Madison Valley at 636 Lake Washington Blvd East, just off of East Madison Street.
                        Our offices are to the right of the Landmark Group building in a small, green cottage-like building with a red door.
                        If you need any further help finding us, please feel free to call.
                    </p>

                    </section>

                </div>

            </div>


        </div>


        <!--page 6///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page About as///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="page7" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu7">
                        <ul id="menu7">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#history" data-transition="<?php echo $transitionefect ?>">History</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page6" data-transition="<?php echo $transitionefect ?>">Contact</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page6" data-transition="<?php echo $transitionefect ?>">Location</a></div>
                    </div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#employment" data-transition="<?php echo $transitionefect ?>">Employment</a></div>
                    </div>


                </div>

            </div>


        </div>
        <!--page About as///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--History///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="history" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu10">
                        <ul id="menu10">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <section id="a">
                        <div>
                            <h2>About AMHP</h2>
                            <h1>History</h1>
                            <p>
                                Affiliated Mental Health Programs, Inc, was founded on September 1, 1988 to provide
                                <a href="#drugi2">intensive case management</a>
                                to people with severe and chronic mental health issues under the original name of Case Management Services, Inc.
                                The agency name was changed in 1994 to Affiliated Mental Health Programs, Inc (AMHP) as the agency expanded services
                                from intensive case management only, to also providing individual, group and family counseling.  As the need for chemical
                                dependency services became evident, AMHP added a credentialed chemical dependency counselor to the staff.  From 1988 to 1992,
                                AMHP provided pro bono intensive case management services to the mentally ill with AIDS.
                            </p>
                            <p>
                                As an agency, AMHP is able to provide an assigned therapist with additional backup coverage in the event the assigned therapist is not available.
                                For this reason the staff works as a team which also provides rotating coverage for 24/7 on-call and outreach emergency services.
                                Case loads are limited as the agency values a working environment that is supportive of high quality client care. In our experience,
                                when families are available and engaged as part of the treatment team, the potential for a positive outcome is increased for the client.
                            </p>
                            <p>
                                AMHP is a private, fee for service, provider.  We maintain competitive rates and our fee schedule is available upon request.
                            </p>
                            <h1>Our Philosophy of Care</h1>
                            <p>
                                Having worked in the public system for 21 years, Janny Becker, AMHP founder and owner, identified basic factors that promote quality care for people
                                with major mental health issues.  The administrative staff at AMHP ensures a working environment that is supportive and respectful to staff,
                                where clinicians have the opportunity to grow professionally with consistent supervision.  The staff works as a team, attending bi-weekly staff
                                meetings for client review and clinical consultation and to ensure informed crisis coverage on a rotating schedule.  Caseloads are kept at a
                                manageable level, capped at no more than 14 clients for any individual care coordinator/counselor.  It is essential that the staff hired has
                                training and experience appropriate to working with our designated population.  Also important, is providing pay that is competitive to other
                                mental health agencies in the Seattle area.
                            </p>
                            <p>
                                The staff at AMHP acknowledges the difficulties for any family with a mentally ill relative.  We recognize that mental illness has many causes
                                and provide a supportive and non-judgmental approach towards helping families deal with these serious issues.  Research indicates that family
                                involvement improves the prognosis for the identified client.  Therefore, we welcome relatives as active members of the treatment team, and
                                offer family counseling to help clarify goals and set limits when necessary to reduce stress and promote healing for the family as a whole.
                                Our 24 hour telephone crisis line is responsive to family members as well as to the client.  Individual counseling is also available to family
                                members as part of our offered services.
                            </p>




                    </section>



                </div>

            </div>


        </div>






        <!--History/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--Employment/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="employment" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu10">
                        <ul id="menu10">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page4" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#page5" data-transition="<?php echo $transitionefect ?>">Our Staff</a></li>
                            <li><a href="#page6" data-transition="<?php echo $transitionefect ?>">Directions</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <div id="dd"
                    <h2>Employment Opportunities</h1=2>
                    <h1>Current Job Oppenings</h1>
                    <p>AMHP does not currently have any job openings.</p>
                    </div>


                </div>

            </div>


        </div>




        <!--Employment/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
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
