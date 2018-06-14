<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>USPL &#8211; Training Service</title>
<link href="images/favi.ico" rel="shortcut icon" type="image/x-icon" />
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
<div id="fullpage" class="row fullpage-wrapper" style="height: 100vh; position: relative; touch-action: none; transform: translate3d(0px, 0px, 0px);">
    <div class="logo"><img src="assets/images/logo-final.png" alt="Uriah Solution Logo" title="Uriah Solution Logo" /></div>
	<!--Home-->
	<div class="section fp-section active fp-table fp-completely" id="home-slide" style="height: 769px; padding-top: 0px; padding-bottom: 0px; background-color: rgb(204, 204, 204);">
	    <div class="fp-tableCell" style="height:769px;">
    		<div class="section_wrapper">
    			<div class="large-12 columns large-centered medium-centered small-centered section_content topnav_video">
    				<div class="hidden_btn" style="height: 769px;"></div>
    				<video id="myVideo" autoplay>
    				    <source class="active" src="assets/video/Intro2.mp4" type="video/mp4">
						<source class="active" src="assets/video/Intro2.ogg" type="video/ogg">
    				    <!--<source src="assets/video/Intro2.mp4" type="video/mp4">-->
    				</video>
    			</div>
            </div>
        </div>
    </div>
    <div class="socialCircle-container">
      <div class="socialCircle-item opacity-zero"><img src="assets/images/icons/more.png" alt="icons" title="icons" /> <div class="text-box hide">
	  <h4 style="font-family:Archive; font-size:33px;"><a href="services/about-us.html">About</a></h4><p>About US</p></div></div>
	  
	  <div class="socialCircle-item opacity-zero"><img src="assets/images/icons/seo.png" alt="icons" title="icons" /> <div class="text-box hide">
	  <h4 style="font-family:Archive; font-size:33px;"><a href="services/ourpartners.html">Partners</a></h4><p>Our partners</p></div></div>
	  
      <div class="socialCircle-item opacity-zero"><img src="assets/images/icons/digital.png" alt="icons" title="icons" /> <div class="text-box hide"><h4 style="font-family:Archive;  font-size:33px;"><a href="services/seo.html">Digital Marketing</a></h4><p>Top digital marketing agency in bangalore</p></div></div>
      
      <div class="socialCircle-item opacity-zero"><img src="assets/images/icons/web-app.png" alt="icons" title="icons" /> <div class="text-box hide"><h4 style="font-family:Archive; font-size:29px;"><a href="services/softwaredevelopment.html">Software Development</a></h4><p>Webdesigning and Development in bangalore</p></div></div>
	  
      <div class="socialCircle-item opacity-zero"><img src="assets/images/icons/bpo-kpo.png" alt="icons" title="icons" /> <div class="text-box hide"><h4 style="font-family:Archive; font-size:33px;"><a href="services/bposervices.html">BPO/KPO Services</a></h4><p>High Performance uriah solution in bangalore</p></div></div>

      <div class="socialCircle-item opacity-zero"><img src="assets/images/icons/it-training.png" alt="icons" title="icons" /> <div class="text-box hide"><h4 style="font-family:Archive; font-size:33px;"><a href="https://www.uriahtraining.com/">IT Training</a></h4><p>IT training HSR layout in bangalore</p></div></div>

      <div class="socialCircle-center opacity-zero closed "><i class="fa fa-bars"></i></div>
    </div>

    <div class="menu">
        <div class="socialCircle-center closed"><i class="fa fa-bars"></i></div>
    </div>
</div>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/socialCircle.js"></script> 
<script type="text/javascript">
if (window.chrome)
    $("[type=video\\\/mp4]").each(function()
    {
        $(this).attr('src', $(this).attr('src').replace(".mp4", "_c.mp4"));
    });
if($(window).width() >= 1024){
  // do your stuff
$( ".socialCircle-center" ).socialCircle({
	rotate: 280,
	radius:350,
	circleSize: 2.7,
	speed:500
});
}else
{
	//alert($(window).width());
$( ".socialCircle-center" ).socialCircle({
	rotate: 280,
	radius:150,
	//circleSize: 3,
	speed:500
});	
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script>
/*
var video_second = false;
var myvid = document.getElementById('myVideo');
myvid.addEventListener('ended', function(e) {
    alert("sadsad");
    if(video_second == false){
  // get the active source and the next video source.
  // I set it so if there's no next, it loops to the first one
  var activesource = document.querySelector("#myVideo source.active");
  var nextsource = document.querySelector("#myVideo source.active + source") || document.querySelector("#myVideo source:first-child");
  
  // deactivate current source, and activate next one
  activesource.className = "";
  nextsource.className = "active";
  
  // update the video source and play
  myvid.src = nextsource.src;
  myvid.loop = true;
  myvid.play();
  video_second = true;
    }
});
*/

/*
var myvid = document.getElementById('myVideo'); */
/* alert("sdsddd"); */
/*
var myvids = [
 "http://www.w3schools.com/html/mov_bbb.mp4",
  "http://www.w3schools.com/html/movie.mp4"
  ];
var activeVideo = 0;

myvid.addEventListener('ended', function(e) {
  // update the active video index
  activeVideo = (++activeVideo) % myvids.length;

  // update the video source and play
  myvid.src = myvids[activeVideo];
  myvid.play();
});

*/

/* my code start here*/

</script>
</body>
</html>