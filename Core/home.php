<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>ISTE | KNIT, Sultanpur</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="../css/superslides.css">
    <!-- Slick slider css file -->
    <link href="../css/slick.css" rel="stylesheet"> 
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="../css/animate.css">  
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="../css/elastic_grid.css"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- Default Theme css file -->
    <link id="orginal" href="../css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="../style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

  </head>
  <body> 
     

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->

            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="#">ISTE <span>KNIT, Sultanpur</span></a>
            
            <!-- IMG BASED LOGO  -->
            <!--  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a> --> 
            
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#works">Events</a></li> 
              <li><a href="#team">Team</a></li>                                                                         
              <li><a href="#blog">News</a></li> 
			  
				<li>
					<a href="#"  data-toggle="dropdown"> 
					<?php echo $row['userName']; ?> <i class="caret"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a tabindex="-1" href="logout.php">Logout</a>
						</li>
					</ul>
				</li>
             
			</ul>           
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->

      <!-- BEGIN SLIDER AREA-->
      <div class="slider_area">
        <!-- BEGIN SLIDER-->          
        <div id="slides">
          <ul class="slides-container">

            <!-- THE FIRST SLIDE-->
            <li>
              <!-- FIRST SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- FIRST SLIDE MAIN IMAGE -->
              <img src="../img/ISTE1.jpg" alt="img">
              <!-- FIRST SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Indian Society</h2>
                <h2>For technical Education</h2>
               </div>
            </li>

            <!-- THE SECOND SLIDE-->
            <li>
              <!-- SECOND SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- SECOND SLIDE MAIN IMAGE -->
              <img src="../img/ISTE2.JPG" alt="img">
              <!-- SECOND SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Kamla Nehru</h2>
                <h2>institute of technology</h2>
                </div>
            </li>

            
          </ul>
          <!-- BEGIN SLIDER NAVIGATION -->
          <nav class="slides-navigation">
            <!-- PREV IN THE SLIDE -->
            <a class="prev" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Prev</strong></h3>
            </a>
            <!-- NEXT IN THE SLIDE -->
            <a class="next" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Next</strong></h3>
            </a>
          </nav>       
        </div>
        <!-- END SLIDER-->          
      </div>
      <!-- END SLIDER AREA -->
    </header>
    <!--=========== End HEADER SECTION ================--> 


    <!--=========== BEGIN ABOUT SECTION ================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig">About Us</h2>
                <p>One of the most ingenious and scienti?c councils in KNIT, ISTE encompasses whole-dimensioned potential development of students. Round the year, it organizes numerous technical and non-technical events with loads of fun attached to it. ISTE realizes its sole objective of providing an impetus to the scienti?c knowledge of the students. 
</br><b>Convener - Prof. Ajay Shekhar Pandey</b></p>
              </div>

              <!-- START ABOUT CONTENT -->
              <div class="about_content">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                        <!-- START SINGLE FEATURED ITEAM #1-->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                 <span class="fa fa-check-square-o"></span>Convener's Desk
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                            "Everything is theoretically impossible until it is done". So I proudly present before all the knitians the council that believes in doing rather than preaching- Indian School of Technical Education -Student'support Chapter. Being the Convener of one of the oldest and most respectable council of knit is a matter of prestige for me. ISTE strives to build a technical environment for every mind to nurture. ISTE focuses more on the practical knowledge of its clan- from modelling junk into innovative machines to mind boggling brain games. ISTE brings harmony between science and fun. I would love to offer my sincere assistance and shower my blessings on the students to take this council to zenith of grandeur. 
							 </div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEAM #2 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="http://knit.ac.in/" target="_blank">
                                 <span class="fa fa-check-square-o"></span>KNIT, Official Website
                              </a>
                            </h4>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEAM #3 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a href="http://www.isteonline.in/" target="_blank">
                                <span class="fa fa-check-square-o"></span>ISTE, Official Website
                              </a>
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_slider">
                      <!-- BEGAIN FEATURED SLIDER -->
                      <div class="featured_slider">
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <img src="../img/About/pic1.jpg" alt="img">                        
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <img src="../img/About/pic2.JPG" alt="img">                         
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <img src="../img/About/pic3.jpg" alt="img">                        
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <img src="../img/About/pic4.jpg" alt="img">                       
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <img src="../img/About/pic5.jpg" alt="img">                      
                        </div>
                      </div>
                      <!-- END FEATURED SLIDER -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>       
      </div>
    </section>
    <!--=========== END ABOUT SECTION ================-->

    <!--=========== BEGAIN WORKS SECTION ================-->
    <section id="works">
      <!-- BEGAIN MILESTONE WORSK SECTION -->
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="counter_section">
            <!-- SKILLS COUNTER OVERLAY -->
            <div class="slider_overlay"></div>
            <div class="container">               
              <div class="counter_area">
               <div class="heading">
                  <h3 class="wow fadeInLeft">Events</h3>            
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="counter wow fadeInUp">
                    <i class="fa fa-cog fa-2x"></i>
                    <p class="count-text ">The Young Innovator</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="counter wow fadeInUp">
                    <i class="fa fa-code fa-2x"></i>
                    <p class="count-text ">The Tale of Crypton</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                   <div class="counter wow fadeInUp">
                    <i class="fa fa-car fa-2x"></i>
                    <p class="count-text ">Re-invent the Wheels</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                  <div class="counter wow fadeInUp">
                    <i class="fa fa-money fa-2x"></i>
                    <p class="count-text ">Bid Wars</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END MILESTONE WORSK SECTION -->

      <!-- BEGAIN FORTFOLIO WORSK SECTION -->
      <div class="row">
        <div class="portfolio_area">
          <!-- BEGAIN PORTFOLIO HEADER -->
          <div class="row">
            <div class="col-lg-12 col-md-12">
             <div class="container">
                <div class="heading">
                  <h2 class="wow fadeInLeftBig">Latest Works</h2>
                  <p>Various technical and non technical events are organised by the young technocrats of ISTE Student Chapter of KNIT Sultanpur round the year for the students of KNIT which aim at an all round  development of the student's personality. From technical events like 'The Tale of Crypton' 'Reinvent the Wheels', 'Technical Treasure hunt', 'Bid War' to non technical events like 'Memorandum of Understanding' ISTE serves to groom the budding engineers of the institution.</p>
				  </div>
              </div>
            </div>
          </div>
          <!-- END PORTFOLIO HEADER -->

    <!--=========== BEGAIN TEAM SECTION ================-->
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN ABOUT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Torch Bearers</h2>            
            </div>
            <div class="team_area">
              <!-- BEGAIN TEAM SLIDER -->
              <div class="team_slider">  
                <!-- BEGAIN SINGLE TEAM SLIDE#1 -->              
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="../img/Team/Pranav Goel.jpg" alt="img">
                    </div>
                    <h5 class="">Pranav Goel</h5>
                    <span>Chairman</span>                        
                    <p>Electronics Engineering<br/>Final Year</p><br/>
                    <div class="team_social">
                      <a href="https://www.facebook.com/pranav.goel.3914?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#2 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="../img/Team/Samiksha Agarwal.jpg" alt="img">
                    </div>
                    <h5>Samiksha Agarwal</h5>
                    <span>Vice Chairman</span>                        
                    <p>Computer Science and Engineering<br/>Final Year</p>
                    <div class="team_social">
                      <a href="https://www.facebook.com/samiksha.agarwal.3726?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                      </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#3 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="../img/Team/Mayank Pathak.jpg" alt="img">
                    </div>
                    <h5>Mayank Pathak</h5>
                    <span>Cyber Cell Incharge</span>                        
                    <p>Computer Science and Engineering<br/>Final Year</p>
                    <div class="team_social">
                      <a href="https://www.facebook.com/mayank.pathak.96742?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                      </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#4 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="../img/Team/Rajat Khemka.jpg" alt="img">
                    </div>
                    <h5>Rajat Khemka</h5>
                    <span>Secretary</span>                        
                    <p>Information Technology<br/>Third Year</p><br/>
                    <div class="team_social">
                      <a href="https://www.facebook.com/rajat.khemka.3?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                      </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#5 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="../img/Team/Soumya Dubey.jpg" alt="img">
                    </div>
                    <h5>Soumya Dubey</h5>
                    <span>Joint Secretary</span>                        
                    <p>Electronics Engineering<br/>Third Year</p><br/>
                    <div class="team_social">
                      <a href="https://www.facebook.com/profile.php?id=100004890288950&fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                      </div>
                  </div>
                </div>
				<!-- BEGAIN SINGLE TEAM SLIDE#6 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="../img/Team/Sneha Bharti.jpg" alt="img">
                    </div>
                    <h5>Sneha Bharti</h5>
                    <span>Cyber Cell Co-ordinator</span>                        
                    <p>Computer Science and Engineering<br/>Third Year</p>
                    <div class="team_social">
                      <a href="https://www.facebook.com/sneha.bharti.3557?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                      </div>
                  </div>
                </div>  
                <!-- BEGAIN SINGLE TEAM SLIDE#7 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="../img/Team/Anshul Varshney.jpg" alt="img">
                    </div>
                    <h5>Anshul Varshney</h5>
                    <span>Boys' Co-ordinator</span>                        
                    <p>Computer Science and Engineering<br/>Third Year</p>
                    <div class="team_social">
                      <a href="https://www.facebook.com/profile.php?id=100008134698095&fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                      </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#8 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="../img/Team/Akriti Sharma.jpg" alt="img">
                    </div>
                    <h5>Akriti Sharma</h5>
                    <span>Girls' Co-ordinator</span>                        
                    <p>Computer Science and Engineering<br/>Third Year</p>
                    <div class="team_social">
                      <a href="https://www.facebook.com/profile.php?id=100006558137186&fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                      </div>
                  </div>
                </div>  
				
				<!-- BEGAIN SINGLE TEAM SLIDE#9 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="../img/Team/Ayush Arela.jpg" alt="img">
                    </div>
                    <h5>Ayush Arela</h5>
                    <span>Treasurer</span>                        
                    <p>Electronics Engineering<br/>Third Year</p></br>
                    <div class="team_social">
                      <a href="https://www.facebook.com/PRayush2907?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                      </div>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END TEAM SECTION ================-->


    <!--=========== BEGAIN BLOG SECTION ================-->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Latest News</h2>
              <p>ISTE comes up again this year with new events with full enthusiasm and zeal for the fun and development of the peers.</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN BLOG CONTENT -->
            <div class="blog_content">

              <!-- BEGAIN BLOG SLIDER -->
              <div class="blog_slider">
                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="../img/Events/Opening Event.jpg" alt="img">
                    </div>
                    <h3>Opening Event</h3>
                    <div class="post_commentbox">
                      <span><i class="fa fa-calendar"></i>19 November</span>
                      </div>
                    <p>Iste comes up with it's opening event on 19 November with its two rounds to be followed by interviews.</p>
                    </div>
                </div>

                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="../img/Events/The Young Innovator.jpg" alt="img">
                    </div>
                    <h3>The Young Innovator</h3>
                    <div class="post_commentbox">
                      <span><i class="fa fa-calendar"></i>October</span>
                    </div>
                    <p>ISTE presents it's new event 'The YOUNG INNOVATOR'. In this event you have to take a process then Remodel it or Re-Design it or Renovate it and present it in the new form.</p>
                    
					</div>
                </div>
                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="../img/Events/The Tale of Crypton.jpg" alt="img">
                    </div>
                    <h3>The Tale of Crypton</h3>
                    <div class="post_commentbox">
                      <span><i class="fa fa-calendar"></i>September</span>
                    </div>
                    <p>Rampaged souls are crying for the knight, their only saviour. The evils have seized the kingdom. To a normal man the evil may seem invincible, unbreakable but only a true 'Cryptoknight' can spot and exploit their weaknesses. The stakes have been set. For you must decipher each level to collect the gems as only their fusion can yield the ultimate weapon to destroy the evil Krypton faces. Be the 'CryptoKnight'</p>
                    </div>
                </div>         
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END BLOG SECTION ================-->


    <!--=========== BEGAIN TESTIMONIAL SECTION ================-->
    <section id="developers">
      <div class="container"> 
        <div class="row">
          <div class=" col-lg-7 col-md-7 col-sm-6">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Website Developers</h2>
              <p> Web developement team of  ISTE design, develop, update and regulate web portal of our very own Student Chapter. It also organize workshops for different programming langauges . Web developement team is credited to  designs and controls all the online events organized by us.</p>
            </div>
          </div>
          <div class=" col-lg-5 col-md-5 col-sm-6">
            <div class="testimonial_customer">
              <!-- BEGAIN TESTIMONIAL SLIDER -->
              <ul class="testimonial_slider">
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#1 -->
                <li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="../img/Team/Mayank Pathak.jpg" alt="img">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Mayank Pathak</h4>
                      <span>Cyber Cell Incharge</span>                      
                    </div>
                  </div>
                  <div class="testi_content">
                    <p><font color="black">Computer Science and Engineering<br/>Final Year</font></p>
                  </div>
                </li>
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#2 -->
                <li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="../img/Team/Rajat Khemka.jpg" alt="img">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Rajat Khemka</h4>
                      <span>Secretary</span>                      
                    </div>
                  </div>
                  <div class="testi_content">
                    <p><font color="black">Information Technology<br/>Third Year</font></p>
                  </div>
                </li>
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#3 -->
                <li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="../img/Team/Sneha Bharti.jpg" alt="img">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Sneha Bharti</h4>
                      <span>Cyber Cell Co-ordinator</span>                      
                    </div>
                  </div>
                  <div class="testi_content">
                    <p><font color="black">Computer Science and Engineering<br/>Third Year</font></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>           
        </div>
      </div>
    </section>
    <!--=========== END TESTIMONIAL SECTION ================-->

     <!--=========== BEGIN FOOTER ================-->
     <footer id="footer">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_left">
				<!--=========== Designed By WpFreeware Team ================-->
               <p>Copyright &copy; 2016 <a href="http://www.isteknit.org">ISTE, KNIT Sultanpur</a>. All Rights Reserved</p>
			   <!--=========== Designed By WpFreeware Team ================-->
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_right">
               <ul class="social_nav">
                 <li><a href="https://www.facebook.com/isteknit/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
      </footer>
      <!--=========== END FOOTER ================-->
	  

     <!-- Javascript Files
     ================================================== -->
  
     <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery.ui.map.js"></script>
     <!-- For smooth animatin  -->
    <script src="../js/wow.min.js"></script> 
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- superslides slider -->
    <script src="../js/jquery.superslides.min.js" type="text/javascript"></script>
    <!-- slick slider -->
    <script src="../js/slick.min.js"></script>    
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- for portfolio filter gallery -->
    <script src="../js/modernizr.custom.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/elastic_grid.min.js"></script>

    <!-- Custom js-->
    <script src="../js/custom.js"></script>
  </body>
</html>