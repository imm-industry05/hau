<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta content="Cyclemon / Experiment" name="description">
	<meta
		content="Architect, Civil Engineer, Writer, Doctor, Barber, Fashion, Marketing, Photography, Teacher, Videography, Know More"
		name="keywords">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Trabahero / Experiment</title>
	<link rel="icon" type="image/png" href="../images/logo.png" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../scripts/jquery.js"></script>
	<script type="text/javascript" src="../scripts/bouton.js"></script>
	<script type="text/javascript" src="../scripts/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="../scripts/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="../scripts/jquery.scrollTo-1.4.2-min.js"></script>



	<script type="text/javascript" src="scripts/loader.js"></script>
	<script type="text/javascript">

		$(document).ready(function () {




			$('#ce').parallax("50%", 0.5);
			$('#writer').parallax("50%", 0.5);
			$('#doctor').parallax("50%", 0.5);
			$('#barber').parallax("50%", 0.5);
			$('#teacher').parallax("50%", 0.5);
			$('#marketing').parallax("50%", 0.5);
			$('#photography').parallax("50%", 0.5);
			$('#fashion').parallax("50%", 0.5);
			$('#videography').parallax("50%", 0.5);



			$('#intro a,#nom li a,#exp,#ce a').click(function () {
				var el = $(this).attr('href');
				var elWrapped = $(el);
				scrollToDiv(elWrapped, 40);
				return false;
			});

			function scrollToDiv(element, nomheight) {
				var offset = element.offset();
				var offsetTop = offset.top;
				var totalScroll = offsetTop - $("header").outerHeight() + "px";

				$('body,html').animate({ scrollTop: totalScroll }, 700);

			}

			$("#n1").css({ opacity: '1' }, 1);

			$("#n1").hover(function () {
				$("#b1").fadeToggle(0.5);
			});
			$("#n2").hover(function () {
				$("#b2").fadeToggle(0.5);
			});
			$("#n3").hover(function () {
				$("#b3").fadeToggle(0.5);
			});
			$("#n4").hover(function () {
				$("#b4").fadeToggle(0.5);
			});
			$("#n5").hover(function () {
				$("#b5").fadeToggle(0.5);
			});
			$("#n6").hover(function () {
				$("#b6").fadeToggle(0.5);
			});
			$("#n7").hover(function () {
				$("#b7").fadeToggle(0.5);
			});
			$("#n8").hover(function () {
				$("#b8").fadeToggle(0.5);
			});
			$("#n9").hover(function () {
				$("#b9").fadeToggle(0.5);
			});
			$("#n10").hover(function () {
				$("#b10").fadeToggle(0.5);
			});
			$("#n11").hover(function () {
				$("#b11").fadeToggle(0.5);
			});
			$("#n12").hover(function () {
				$("#b12").fadeToggle(0.5);
			});
			$("#n13").hover(function () {
				$("#b13").fadeToggle(0.5);
			});
			$("#n14").hover(function () {
				$("#b14").fadeToggle(0.5);
			});
			$("#n15").hover(function () {
				$("#b15").fadeToggle(0.5);
			});
			$("#n16").hover(function () {
				$("#b16").fadeToggle(0.5);
			});
			$("#n17").hover(function () {
				$("#b17").fadeToggle(0.5);
			});
			$("#n18").hover(function () {
				$("#b18").fadeToggle(0.5);
			});
			$("#n19").hover(function () {
				$("#b19").fadeToggle(0.5);
			});
			$("#n20").hover(function () {
				$("#b20").fadeToggle(0.5);
			});




		});


	</script>

</head>


<body>

	<!-- facebook like button -->
	<div id="fb-root"></div>
	<script>(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>


	<div id="menu">
		<a id="exp" href="#intro"><img alt="experiment" src="images/experiment_1.png" /></a>
		<a id="know" href="knowm/knowm.html"><img alt="know more" src="images/know-w.png" /></a>
		<a id="hero" href="heroes/heroes.html"><img alt="shop section" src="images/heroes-w.png" /></a>
		<a id="s-in" href="profile/profile.php"><img alt="sign-up section" src="images/account-w.png" /></a>
		<a id="s-in" href="logout.php"><img alt="sign-up section" src="images/s-out-w.png" /></a>
		
	</div>




	<ul id="nom">
		<nav>
			<li><a id="b1" href="#intro" title="Next Section"><img src="images/title1.png" alt="Link" /></a></li>
			<li><a id="b2" href="#arki" title="Next Section"><img src="images/title2.png" alt="Link" /></a></li>
			<li><a id="b3" href="#ce" title="Next Section"><img src="images/title3.png" alt="Link" /></a></li>
			<li><a id="b4" href="#writer" title="Next Section"><img src="images/title4.png" alt="Link" /></a></li>
			<li><a id="b5" href="#doctor" title="Next Section"><img src="images/title5.png" alt="Link" /></a></li>
			<li><a id="b6" href="#barber" title="Next Section"><img src="images/title6.png" alt="Link" /></a></li>
			<li><a id="b7" href="#fashion" title="Next Section"><img src="images/title7.png" alt="Link" /></a></li>
			<li><a id="b8" href="#marketing" title="Next Section"><img src="images/title8.png" alt="Link" /></a></li>
			<li><a id="b9" href="#photography" title="Next Section"><img src="images/title9.png" alt="Link" /></a></li>
			<li><a id="b10" href="#teacher" title="Next Section"><img src="images/title10.png" alt="Link" /></a></li>
			<li><a id="b11" href="#videography" title="Next Section"><img src="images/title11.png" alt="Link" /></a>
			</li>

			<li><a id="b12" href="footer" title="Next Section"><img src="images/title19.png" alt="Link" /></a></li>
		</nav>
		<li><a id="n1" href="#intro" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n2" href="#arki" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n3" href="#ce" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n4" href="#writer" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n5" href="#doctor" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n6" href="#barber" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n7" href="#fashion" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n8" href="#marketing" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n9" href="#photography" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n10" href="#teacher" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
		<li><a id="n11" href="#videography" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>

		<li><a id="n12" href="#footer" title="Next Section"><img src="images/button.png" alt="Link" /></a></li>
	</ul>

	<div id="intro">
		<a href="#arki"><img alt="fleche" src="images/fleche2.png"></a>

	</div>

	<div alt="you need an arki" id="arki">

		<div class="story">
			<div class="bg"></div>
		</div>

	</div>

	<div alt="you need a ce" id="ce">
		<div class="story">
			<div class="bg"></div>
		</div>
	</div>



	</div>
	<div alt="you need a writer" id="writer">
		<div class="story">
			<div class="bg"></div>

		</div>
	</div>

	<div alt="you need a doctor" id="doctor">
		<div class="story">
			<div class="bg"></div>

		</div>
	</div>
	<div alt="you need a barber" id="barber">
		<div class="story">
			<div class="bg"></div>

		</div>
	</div>
	<div alt="you need a fashion" id="fashion">
		<div class="story">
			<div class="bg"></div>

		</div>
	</div>
	<div alt="you need a marketing" id="marketing">
		<div class="story">
			<div class="bg"></div>

		</div>
	</div>
	<div alt="you need a photography" id="photography">
		<div class="story">
			<div class="bg"></div>

		</div>
	</div>
	<div alt="you need a teacher" id="teacher">
		<div class="story">
			<div class="bg"></div>

		</div>
	</div>
	<div alt="you need a videography" id="videography">
		<div class="story">
			<div class="bg"></div>

		</div>
	</div>
	<!-- <div alt="you're a freestyler" id="fond10">
		<div class="story"><div class="bg"></div>
        
       </div>
       </div>
       <div alt="you're a gangsta" id="fond11">
		<div class="story"><div class="bg"></div>
        
       </div>
       </div>
       <div alt="you're a lil gangsta" id="fond12">
		<div class="story"><div class="bg"></div>
        
       </div>
       </div>
       <div alt="you're a runner" id="fond13">
		<div class="story"><div class="bg"></div>
        
       </div>
       </div>
       <div alt="you're a rigid guy" id="fond14">
		<div class="story"><div class="bg"></div>
        
       </div>
       </div>
       <div alt="you're a warrior" id="fond15">
		<div class="story"><div class="bg"></div>
        
       </div>
       </div>
       <div alt="you're a lazy guy" id="fond16">
		<div class="story"><div class="bg"></div>
        
       </div>
       </div>
       <div alt="you're a fake" id="fond17">
		<div class="story"><div class="bg"></div>
        
       </div>
       </div> -->



	<footer id="footer">
		<div id="fond18">
			<img alt="did you enjoy" src="images/fin1.png" />
			<hr />
			<a href="heroes/heroes.html"><img alt="shop link" src="images/fin2.png" /></a>
			<hr />
		</div>
		<div class="story">
			<p>© MATENAKAN 2022 — All rights reserved</p>
		</div>
	</footer>


	<script>


		$("#arki p").hover(function () {
			$("#arki p").animate({ opacity: '0.6' }, "fast");
		});
		$("#arki p").mouseout(function () {
			$("#arki p").animate({ opacity: '1' }, 100);

		});
		$(function () {
			var element = $("#cl");
			(function () {
				element

					.animate({ opacity: '0.4' }, "slow")
					.animate({ opacity: '0.8' }, "slow", arguments.callee)

			}());
		});

	</script>
</body>

</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>