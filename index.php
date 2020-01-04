<?php include "inc/header.php";?>
	 
		<!-- /navbar-->
<img src="images/layer.jpg">
		<div class="slider">
			<div class="sliderphotos">
				<img src="images/1.jpg">
					<img src="images/2.jpg">
						<img src="images/3.jpg">
			</div>

		</div>
		
		
		
		<div id="left"><div id="l"></div></div>
			<div id="right"><div id="r"></div></div>
<Script>
			$(".sliderphotos").cycle({
			fx:				"scrollHorz",
			prev:			"#l",
			next:			"#r",
			timeout:		3,
			pause:			1,
	
			});
</script>
	
		<div class="Colums">
			<div class="c1">
				<h1 class="text1">About US</h1>
					<p class="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus gravida blandit ipsum.
				<a href="#"><img src="images/bullet.png"> Read More</a>
					</p>
			
			</div>
			
			<div class="c2">
				<h1 class="text1">Lastes blog post</h1>
					<p class="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Phasellus gravida blandit ipsum.
					</p>
				<a href="#"><img src="images/bullet.png"> Read More</a>
			</div>
			
			<div class="c3">
				<h1 class="text1">Social Media</h1>
					<p class="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					</p>
				<a class="blla" href="https://www.facebook.com/"><img src="images/facebook.png"></a>
					<a class="blla" href="https://www.google.com/"><img src="images/google.png"></a>
						<a class="blla" href="https://www.youtube.com/"><img src="images/youtube.png"></a>
			</div>


		</div>
		
					<div class="photost">
						<h1 id="latest">LATEST WORK</h1>
				<img id="firstT"src="images/t1.jpg" alt="t1">
					<img id="secondT"src="images/t2.jpg" alt="t2">
						<img id="thirdT"src="images/t3.jpg" alt="t3">				
		</div>
<?php include "inc/footer.php";?>