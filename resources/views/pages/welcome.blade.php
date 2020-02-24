
    <style type="text/css">
     
.carousel-caption h1
{
    font-size: 50px;
    font-weight: 1000;
    text-shadow: 3px 3px #15b000;;
    text-transform: uppercase;
    animation-delay: 1s;
    animation-duration: 2s;
}

.carousel-caption .btn
{
    animation-delay: 1s;
    border-radius: 20px;
    background-color: transparent;
    border: 2px solid white;
    color: white;
    margin-top: 20px;
    animation-duration: 2s;
}
#nav1{
  margin-bottom: 0px;
   border-radius: 0px;
   background-color: #fff;
   height: 40px;
}

#search-button{
    height: 33px;
    margin-left: -4px;
}

#sign-in{
        background-color: #0B2471;
    border-radius: 15px;
    font-size: 18px;
    padding: 2px;
    margin-left: 320px;
    float: right;
    font-weight: bold;
    display: inline-block;
}

#title{    color: #0B2471;
    margin-left: 12px;
    font-size: 18px;
    font-weight: bold;
    padding: 0px;
}
#learn-more{
    border-radius: 20px;
    background-color: #bfc2c4;
border-color: #bfc2c4;
}
/*
#Curr{
  border-radius: 10%;
  background-color:#626668;
border-color: #e0e0e0;
  border-width:1px;
  border-style: solid;
  box-shadow:7px 7px 7px #eee;}*/
  #cur1{
    color:#0B2471;
    display: center;
    text-transform: uppercase;
  }
#curings{
    color:#fff;
    font-size: 18px;
}
 /* .icons{
  width:110px;
  font-size: 60px;
  background-color:#fdfbfb;
  padding:5px 10px;
  height:100px;
  margin-top: -50px;
  color:#514e4e; 
  border-radius:10px;
}*/
 
#a{
  color:#0B2471;
}
#h2{
    text-align: center;
background-color: #0B2471;
color: #fff;
height: 40px;
border-radius: 5px;
padding: 7px;
font-weight: bold;
font-family: inherit;}

#drop{
      width: 145px;
    font-size: 20px;
}
 .accordion-item:nth-of-type(odd){
  background-color: #e4e1e1;
}
.accordion-item p:last-of-type{
  border-bottom: 3px solid #0B2471;
  box-shadow:5px 5px 5px #ccc;
}

.icons{
  width:110px;
  font-size: 60px;
  background-color:#0B2471;
  padding:5px 10px;
  height:100px;
  margin-top: -50px;
  color:#fff; 
  border-radius:10px; 
}
.icons:hover{
  background-color: #15b000;
}

#con{margin-top: 30px;
}
#col_1{
  border-color:#e0e0e0;
  min-height: 35px;
  border-width:1px;
  border-style: solid;
  box-shadow:7px 7px 7px #eee; 
  padding:10px;
  color:black;
  background:linear-gradient(to bottom, rgba(243, 244, 246, 0.3), rgba(237, 236, 236, 0.9));
    margin-top: 50px;
    border-radius: 10px;
}

.btn-primary{
background-color:#0B2471;
font-size: 15px; 
font-weight: bold;
}

.btn-primary:hover{
  background-color: #15b000;
}
 
/*faq*/
.accordion-item{
        background-color: ;
        border-radius: .4rem;
        margin-bottom: 1rem;
        padding:1rem;
        box-shadow:  .5rem 2px .5rem rgba(0,0,0,.1);
       }
      .accordion-link{
        font-size: 1.6rem;
        font-weight: bold;
        color:#0B2471;
        text-decoration: none;
        background-color: 
        width:;
        display:flex;
        align-items: center;
        justify-content: space-between;
        padding:1rem 0;
      }
      .accordion-link i{
        color:
        padding: .5rem;
      }
      .accordion-link .fa-chevron-up{
        display: none;
      }
      .ans{
        max-height: 0;
        overflow: hidden;
        position: relative;
        background-color: :
        transition: max-height 650ms;
      }
      .ans::before{
        content: "";
        position: absolute;
        width:.6rem;
        height:90%;
        background-color: #0B2471;
        top: 50%;
        left:0;
        transform: translateY(-50%);
      }
      .ans p{
        font-size: 1.4rem;
        padding: 2rem;
      }
      .accordion-item:target .ans{
        max-height: 20rem;
      }
      .accordion-item:target .accordion-link .fa-chevron-up{
        display: none;
        }
        .accordion-item:target .accordion-link .fa-chevron-down{
        display: block;
        }

        /*Announcement*/
        #container{
      color: #fff;
       background:rgba(12, 68, 174, 0.9);
       opacity:0.9;
    }
    #well{
      color:#5C595D;
      height:80px;
      padding:8px;
    }
    #announcement-id{
      margin-left: 100px;
    }

.carousel-item{
  height: 550px;
}

    </style>




@extends('layout.app')

@section('content')

<!-- <......nav2......> -->
                          <nav id="nav1" class="navbar navbar-expand-lg navStyle" style="background-color: #f2f2f2;"> 
                        
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-target="#robust" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button></div>
<div class="container-fluid">
    <div class="row">
       
            </div>
            


            <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
                <span><i class="fas fa-align-right iconStyle"></i></span>
            </button> 
            
            <div class="collapse navbar-collapse" id="mainMenu">
                <h2 id="title">DAGO METHODIST CHILD DEVELOPMENT CENTRE</h2>
                <input type="text" name="" class=" form-control" placeholder="Search" style="width: 10%;margin-left: 20%;">
                <button class="btn btn-success" id="search-button" href="form-control"><i class="fa fa-search" style="background-color:"></i></button>

                <h5 id="donate" style="background-color:#28a745; color:#fff; margin-left:55px; border-radius: 15px; font-size: 18px; padding: 5px;  font-weight: bold;height: 35px; ">Donate</h5>

 <li class="nav-item dropdown" style="" id="sign-in">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;">
          SIGN IN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"  >
          <p id="drop">
          <a style="background-color: #0B2471; color:#fff;margin-bottom:5px;" class="dropdown-item" href="/login">Social Worker</a>
          <a style="background-color: #0B2471; color:#fff; margin-bottom:5px;" class="dropdown-item" href="/login">Volunteer</a>
          <a style="background-color: #0B2471; color:#fff;" class="dropdown-item" href="/login">Beneficiary</a>
          </p>
        </div>
      </li> 

            </div> </div></nav>

<!--     ======================================carousel=================================================  -->
        
        <div class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/cdc13_edited.jpg" role="listbox" style="height:auto;" >

                        <div class="carousel-caption">
                                <h1 class="animated fadeInDown">Welcome</h1>
                                <p class="animated fadeInUp">Explore to know more about us</p>
                                <button class="btn btn-defualt animated zoomIn">Read More</button>
                        </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/compassiongh1.jpg" alt="..." role="listbox" style="height:auto;">
                    <div class="carousel-caption">
                            <h1 class="animated fadeInDown">DCDC</h1>
                            <p class="animated fadeInUp">0002</p>
                            <button class="btn btn-defualt animated zoomIn">Read More</button>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/leather.jpg" alt="..." role="listbox" style="height:auto;">
                    <div class="carousel-caption">
                            <h1 class="animated zoomIn">We Work, We Learn, We Play</h1>
                            <p class="animated zoomIn">Join us make fun,<br/>feel and be excited</p>
                            <button class="btn btn-defualt animated zoomIn">Read More</button>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control" aria-hidden="true"><i class="fsas fa-long-arrow-alt-right"></i></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>





    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">

                    
                        <h4 name="about">About Us</h4>
                        <h2>Welcome to Dago Methodist Child Development Centre</h2>
                        <p class="lead">Know more about us, Partner us and get exciting with us.</p>

                        <p> Dago Methodist Child Development Centre is a non governmental organization (NGO) owned by Dago Wesley Methodist Church in partnership with compassion international Ghana.
            We are aimed at releasing children from poverty, providing better education for children and ensuring a healthy life style of children under our care.<br> The project was established on 1st September, 2009 with 250 registered beneficiaries. Currently, the total number of registered beneficiaries stands at 308. </p>

                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1" id="learn-more">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="img/compassion5.jpg" alt="" class="img-responsive img-rounded" style="height: 360px;">
                       
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1"> 

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="img/compassion8.jpg" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                
                <div class="col-md-6"> 
                    <div class="message-box">
                        <h4>Who We are</h4>
                        <h2>We Are Dago Methodist CDC</h2>
                        <h3>Our Mission</h3>
                        <p class="">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <h3>Our Vision Statement</h3>
                        <p class="">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <h3>Our Core Values</h3>
                        <p class="">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1" id="learn-more">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
</div>

<div class="container" id="con" style="margin-bottom: 100px;" >
<!-- <center><strong id="service">SERVICE</strong></center> -->
 <div class="section-title text-center">
<h4 style="color:; text-align: center; font-size: 30px;">Curriculums We Offer</h4>
<p style="font-family: verdana;">Dago Methodist Child Development Centre use HOLISTIC DEVELOPMENT approach to train beneficiaries<br>In our field of studies, the following curriculums are used. </p>
</div>
<div class="row">
<div class="col-md-3 "  >
  <div  id="col_1">
    <center><div class="icons"><i class="fas fa-bible"></i><!-- <img style="color:#fff; width: 50px; margin-bottom: 24px;" src="img/spiritual.jpg"> --></div>
   <a style="font-size: 20px; color:#fff;/*background-color:#0B2471;*/ "> <strong ></strong></a>
   <p style="font-family: verdana; opacity: 0.9;">This curriculum is aimed atLeading children to Christ. It contains Bible lessons which bind the behaviours of the children to be Christ Centered. It also prevents them from immoral activities.</p>
  <button class="btn btn-primary">SPIRITUAL</button>

  </center>
    </div>
</div>
<div class="col-md-3 " >
  <div  id="col_1">
    <center>
      <div class="icons"><i class="fas fa-user-friends"></i><!-- <img style="color:#fff; width: 50px; margin-bottom: 24px;" src="img/social.jpg"> --></div>
   <a style="font-size: 20px; color:#f44542;"> <strong ></strong></a>
<p style="font-family: verdana; opacity: 0.9;">Obtain good social and communication skills.It contains Bible lessons which bind the behaviours of the children to be Christ Centered. It also prevents them from immoral activities.</p>
<button class="btn btn-primary">SOCIO-EMOTIONAL</button>
</center>
     </div>
</div>

<div class="col-md-3 ">
  <div  id="col_1">
  <center>  
    <div class="icons"><i class="fas fa-brain"></i><!-- <img style="color:#fff; width: 50px; margin-bottom: 24px;" src="img/cognitive.jpg"> --></div>
  <a style="font-size: 20px; color:#f44542;"><strong ></strong> </a>
  <p style="font-family: verdana; opacity: 0.9;">Build your mentality.It contains Bible lessons which bind the behaviours of the children to be Christ Centered. It also prevents them from immoral activities.</p>
  <button class="btn btn-primary">COGNITIVE</button>
</center>
</div>
</div>
<div class="col-md-3 " >
  <div  id="col_1">
    <center>
      <div class="icons"><i class="fa fa-child"></i><!-- <img style="color:#fff; width: 50px; margin-bottom: 24px;" src="img/exercise.jpg"> --></div>
  <a style="font-size: 20px; color:#f44542; "> <strong ></strong></a>
<p style="font-family: verdana; opacity: 0.9;">Maintain a good and healthy life.It contains Bible lessons which bind the behaviours of the children to be Christ Centered. It also prevents them from immoral activities.</p>
<button class="btn btn-primary">PHYSICAL</button>
</center>
     </div>
</div>
</div>
</div>

<!-- announcement and upcoming events -->
    <div class="container-fluid" id="container">
    <div class="row">
      <div class="col-md-12">
      <div class="col-md-4">
        <h2 id="announcement-id">Announcement <i class="fa fa-bullhorn"></i><a name="announcement"></a></h2>
        <ul>
          <li class="well" id="well" >Birthday Celebration
                          <p>Date:Sat,23rd March, 2019
                            <br> Venue:School premises</p>
                     </li>

          <li class="well" id="well">Birthday Celebration
                          <p>Date:Sat,23rd March, 2019
                            <br> Venue:School premises</p>
                     </li>

          <li class="well" id="well">Birthday Celebration
                          <p>Date:Sat,23rd March, 2019
                            <br> Venue:School premises</p>
                     </li>

          <li class="well" id="well">Birthday Celebration
                          <p>Date:Sat,23rd March, 2019
                            <br> Venue:School premises</p>
                     </li>
        </ul>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <h2 id="announcement-id">Upcomming Events <i class="fa fa-calendar"></i></h2>
        <ul>
          <li class="well" id="well">Inauguration of project
                          <p>Date:Sat,23rd March, 2019
                            <br> Venue:School premises</p>
                     </li>

          <li class="well" id="well">Inauguration of project
                          <p>Date:Sat,23rd March, 2019
                            <br> Venue:School premises</p>
                     </li>

          <li class="well" id="well">Inauguration of project
                          <p>Date:Sat,23rd March, 2019
                            <br> Venue:School premises</p>
                     </li>

          <li class="well" id="well">Inauguration of project
                          <p>Date:Sat,23rd March, 2019
                            <br> Venue:School premises</p>
                     </li>
        </ul>

      </div>
      </div>
    </div>
  </div>



    <div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3 name="services">Our Services and Other Featuring Partners</h3>
                <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
            </div><!-- end title -->

            <div class="owl-services owl-carousel owl-theme">
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="#" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"></a>
                        <img src="img/shoe.jpg" alt="" class="img-responsive img-rounded" style="height: 200px;">
                    </div>
                    <div class="service-dit">
                    <h3>Dago Leather Work Training Centre</h3>
                     <p>This is an initiative of Dago Methodist Child Development Centre to help reduce the rate of unemployment in the community.</p>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="#" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"></a>
                        <img src="img/compassion12.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                    <h3>Going Beyound SHS Campaign</h3>
                     <p>We are a group aimed at helping educate the young once and nurturing them to attain better educational backrounds by going beyound Senior Hihg School.</p>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="uploads/service_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"></a>
                        <img src="/img/compassion18.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3>Scholarship Program</h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"></a>
                        <img src="/img/img.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3>Digital Design for Mac</h3>
                        <p>Praesent in neque congue sapien lobortis faucibus id eget erat. <br>Pellentesque maximus rutrum felis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
                <!-- end service -->
            </div><!-- end row -->

            <hr class="hr1">
            <div class="col-md-2 col-sm-6 col-xs-12"></div>

        </div><!-- end container -->
    </div><!-- end section -->



    <div class="parallax section noover" style="/*background-image:url('img/down.jpg');*/background-size:100%; background:rgba(12, 68, 174, 0.9);opacity:0.9;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="customwidget text-left">
                        <h1 style="color:#fff; text-align: center; font-size: xxx-large;font-style: italic;">Psalm 119:1</h1>
                        <p style="color:#fff; text-align: center; font-size: 25px;font-style: italic;">Blessed are those whose ways are right and walk in the laws of the LORD</p>
                        
                    </div>
                </div><!-- end col -->
                <div class="col-md-6">
                    <!-- <div class="text-center image-center hidden-sm hidden-xs">
                        <img src="img/compassion4.jpg" alt="" class="img-responsive wow fadeInUp">
                    </div> -->
                    <scan class="fas fa-bible" style="color:#fff; font-size:100px;"></scan>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    
    <div id="features" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Things We Do<a name="activities"></a></h3>
                <p class="lead">We engage our children in the following activities to help them acquire the neccessary skills, <br>and also build them up with a life career and a brighter future.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-left">
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="fa fa-book"></i>
                            <div class="fl-inner">
                                <h4> Bible Studies & Spiritual Formation</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="fa fa-users"></i>
                            <div class="fl-inner">
                                <h4>Youth Guidance & monitoring Program</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="fa fa-graduation-cap"></i>
                            <div class="fl-inner">
                                <h4>My Life & Carreer Guidance</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="fa fa-book"></i>
                            <div class="fl-inner">
                                <h4>Educational Programs</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="img/child1.jpg" class="img-center img-responsive" alt="">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-right">
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="fa fa-soccer-ball-o"></i>
                            <div class="fr-inner">
                                <h4>Sports & Games</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="fa fa-heart"></i>
                            <div class="fr-inner">
                                <h4>Donation to the Aged</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="fa fa-star"></i>
                            <div class="fr-inner">
                                <h4>Outreach Programmes</h4>
                                <p>Through local resource mobilization and strategic alliance with other partners,  </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="fa fa-stethoscope"></i>
                            <div class="fr-inner">
                                <h4>Health Screening</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                    </ul>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 Questions">
            <strong><h2 id="h2" name="faq"><span class="fa fa-question-circle text-white" style="margin-right:20px";></span>Questions You May Ask</h2></strong>
            

          <div class="accordion">
      <div class="accordion-item" id="q1">
        <div id="faq"></div>
        <a href="#q1" class="accordion-link">
          How do Dago Methodist Child Development Centre Select Beneficiaries?
          <span class="fa fa-chevron-down pull-right"></span>
          <span class="fa fa-chevron-up pull-right"></span>
        </a>
        <div class="ans">
        <p> Dago Methodist Child Development Centre select the neediest in the community. The poorest of the poor. We use poverty probability index for the selection of our beneficiaries.. </p>
        </div>
      </div>

      <div class="accordion-item" id="q2">
        <a href="#q2" class="accordion-link">
        Do Dago Methodist Child Development Centre only support beneficiaries in education?
          <span class="fa fa-chevron-down pull-right"></span>
          <span class="fa fa-chevron-up pull-right"></span>
        </a>
        <div class="ans">
        <p> At Dago Methodist Child Development Centre, the 309 beneficiaries who are selected are the core beneficiaries who receive full and regular support in education. However there are other non beneficiaries who also receive regular support through external funding , strategic alliance and local resource mobilization. We supported 6 students to study in Arizona State University,USA through full scholarship. We curently support a medical student from University of Cape Coast Medical school and a Law student also in University of Cape Coast... </p>
        </div>
      </div>
      <div class="accordion-item" id="q3">
        <a href="#q3" class="accordion-link">
          Do we,(DCDC) take all responsibility concerning beneficiaries from parents?
          <span class="fa fa-chevron-down pull-right"></span>
          <span class="fa fa-chevron-up pull-right"></span>
        </a>
        <div class="ans">
          <p>We do not make parents irresponsible. We rather empower them to protect their children and provide needed support. We organise parenting education, child protection education, entrepreneurship education for parents. We also organise father's and mother's day celebrations to help them achieve this goal.</p>
        </div>
      </div>

      <div class="accordion-item" id="q4">
        <a href="#q4" class="accordion-link">
          Do Dago Methodist Child Development Centre help non beneficiaries?
          <span class="fa fa-chevron-down pull-right"></span>
          <span class="fa fa-chevron-up pull-right"></span>
        </a>
        <div class="ans">
        <p> In most cases, no. Such direct aid can lead to misuse of funds, children's unhealthy dependency on an outside organization, and difficulty in monitoring individual development goals. Compassion funds church-based programs that provide developmental opportunities and benefits agreed upon by the church and Compassion. The standard is that funds are used on meaningful developmental opportunities for the program's children. </p>
        </div>
      </div>

            <div class="accordion-item" id="q5">
                <a href="#q5" class="accordion-link">
                    How do Dago Methodist Child Development Centre fund the project?
                    <span class="fa fa-chevron-down pull-right"></span>
                    <span class="fa fa-chevron-up pull-right"></span>
                </a>
                <div class="ans">
                <p> From statistics to stories, there is growing evidence that our program gives children a strong opportunity to overcome poverty. </p>
                </div>
            </div>


            <div class="accordion-item" id="q6">
                <a href="#q6" class="accordion-link">
                    Can I get support from Dago Methodist Child Development Centre if I don't come from Dago?
                    <span class="fa fa-chevron-down pull-right"></span>
                    <span class="fa fa-chevron-up pull-right"></span>
                </a>
                <div class="ans">
                <p> Dago Methodist Child Development Centre through locsl resource mobilization and strategic alliance with other partners reach out to other communities in Ekumfi District and Mfantseman municipality.We are ready to help the neediest irrespective of the location. </p>
                </div>
            </div>
    </div>

           
        </div>
        <div class="col-md-1"></div>
    </div>
</div>



    @endsection
 