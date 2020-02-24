

	<style type="text/css">


/*gallery*/
img{ max-width:100%;}
.gallery_box{}

.gallery_box li{width:348px;height:280px; display:inline-block; float: left; text-align: center; overflow: hidden;    position: relative;margin-right: 10px; margin-bottom: 10px;}
.gallery_box{display: flow-root;}

.gallery_box li:hover img {
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
}
.gallery_box li img{-webkit-transition: transform 0.5s ease;
    -o-transition: transform 0.5s ease;
    transition: transform 0.5s ease;}
.gallery_box li:nth-child(even) {}
.gallery_box li:nth-child(odd) {}
.gallery_box li:nth-child(odd) .box_data{ /*background:rgba(0,0,0,0.17) */}
.gallery_box li:nth-child(even) .box_data{ /*background:rgba(0,44,255,0.27)*/ }
.gallery_box .box_data{ position:absolute; top: 0; left: 0; right:0; bottom:0; color:#fff;}
.gallery_box .box_data span{ position:absolute; top: 50%; transform: translateY(-50%); left:0 ; right:0; font-size:30px; font-family: Ariel}
.gallery_box li:hover .box_data{background:rgba(16, 43, 98, 0.9); opacity: 0.6}


	</style>
@extends('layout.app')

@section('content')



<ul class="gallery_box">
	<li>
		<a href="#0"><img src="img/compassion8.jpg">
		<div class="box_data">
			<span>Our team as at 2009</span>
		</div></a>
	</li>
		<li>
		<a href="#0"><img src="img/compassion-sports.jpg">
		<div class="box_data">
			<span>Sports team</span>
		</div></a>
	</li>
		<li>
		<a href="#0"><img src="img/compassion9.jpg">
		<div class="box_data">
			<span>Gift day</span>
		</div></a>
	</li>
			<li>
		<a href="#0"><img src="img/compassion10ed.jpg">
		<div class="box_data">
			<span>Birthday celebration</span>
		</div></a>
	</li>
			<li style="  ">
		<a href="#0"><img src="img/compassion11.jpg">
		<div class="box_data">
			<span>Clean up exercise</span>
		</div></a>
	</li>
			<li>
		<a href="#0"><img src="img/cdc13_edited.jpg">
		<div class="box_data">
			<span>Tour to UCC</span>
		</div></a>
	</li>	
    <li style="  ">
        <a href="#0"><img src="img/compassion6.jpg">
        <div class="box_data">
            <span>Birthday Celebration</span>
        </div></a>
    </li>
            <li>
        <a href="#0"><img src="img/compassion7.jpg">
        <div class="box_data">
            <span>Singing & Entertainment</span>
        </div></a>
    </li>   


<!-- list 2 -->


    <li>
        <a href="#0"><img src="img/compassion14.jpg">
        <div class="box_data">
            <span>Our team as at 2009</span>
        </div></a>
    </li>
        <li>
        <a href="#0"><img src="img/compassion15.jpg">
        <div class="box_data">
            <span>Sports team</span>
        </div></a>
    </li>
        <li>
        <a href="#0"><img src="img/compassion16.jpg">
        <div class="box_data">
            <span>Gift day</span>
        </div></a>
    </li>
            <li>
        <a href="#0"><img src="img/compassion17.jpg">
        <div class="box_data">
            <span>Birthday celebration</span>
        </div></a>
    </li>
            <li style=" ">
        <a href="#0"><img src="img/compassion18.jpg">
        <div class="box_data">
            <span>Leather Work Center</span>
        </div></a>
    </li>
            <li>
        <a href="#0"><img src="img/compassion19.jpg">
        <div class="box_data">
            <span>Playing</span>
        </div></a>
    </li>   
    <li style="  ">
        <a href="#0"><img src="img/compassion20.jpg">
        <div class="box_data">
            <span>Graduation</span>
        </div></a>
    </li>
            <li>
        <a href="#0"><img src="img/compassion4.jpg">
        <div class="box_data">
            <span>Learning</span>
        </div></a>
    </li>   

<!-- list 3 -->


    <li>
        <a href="#0"><img src="img/compassion21.jpg">
        <div class="box_data">
            <span>Our team as at 2009</span>
        </div></a>
    </li>
        <li>
        <a href="#0"><img src="img/compassion22.jpg">
        <div class="box_data">
            <span>Sports team</span>
        </div></a>
    </li>
        <li>
        <a href="#0"><img src="img/compassion23.jpg">
        <div class="box_data">
            <span>Gift day</span>
        </div></a>
    </li>
            <li>
        <a href="#0"><img src="img/compassion24.jpg">
        <div class="box_data">
            <span>Birthday celebration</span>
        </div></a>
    </li>
            <li style=" ">
        <a href="#0"><img src="img/compassion25.jpg">
        <div class="box_data">
            <span>Leather Work Center</span>
        </div></a>
    </li>
            <li>
        <a href="#0"><img src="img/leather.jpg">
        <div class="box_data">
            <span>Playing</span>
        </div></a>
    </li>   
    <li style="  ">
        <a href="#0"><img src="img/compassion13.jpg">
        <div class="box_data">
            <span>Graduation</span>
        </div></a>
    </li>
            <li>
        <a href="#0"><img src="img/cdc13_edited3.jpg">
        <div class="box_data">
            <span>Learning</span>
        </div></a>
    </li>   
</ul>



 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> 
@endsection