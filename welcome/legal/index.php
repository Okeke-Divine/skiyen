<?php 
session_start();
	include("language_changer.php");
	include("../../css.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/font/css/all.css">
	<title>Skiyen Legal Info</title>
</head>
<body>

<div class="navbar wd100 skiyen_background p-2 text-light">
		<img src="/logo/s1.png" alt="Skiyen Logo" style="width: 65px;height: 50px;">
		
		<div id="google_translate_element"></div>

		
		<button class="btn btn"></button>

	</div>


	<main class="container mt-2" role="main">
			<div id="page">
				

				<center><h1>Skiyen Privacy Policy</h1></center>


				<span class="legal_intro">
					When you use our services, you're trusting us with your personal information, so we work hard to protect your information.
				</span><br>

				<span class="content">This Privacy Policy will help you understand the information we collect, why we collect it, and how you can manage, update and delete your information.</span>

				<hr>
				
				<span class="content">Effective from - June 14, 2021</span><br>
				<span class="content">Last updated - June 14, 2021</span>

				<hr>

				<h3>Contents</h3>

				<ul>
					<li><a href="#intro" class="linky1">Introduction</a></li>
					<li><a href="#info-we-collect" class="linky1">Information We Collect</a></li>
					<li><a href="#why-skiyen-collect-data" class="linky1">Why Skiyen Collects Data</a></li>
					<li><a href="#privacy-controls" class="linky1">Your Privacy Controls</a></li>
					<li><a href="#supported-browsers" class="linky1">Supported Browsers</a></li>
					<li><a href="#about-policy" class="linky1">About This Policy</a></li>
				</ul>

				<hr>

				<div id="intro">
					<h3>Introduction</h3>
					<span class="content">
						We build a range of services that helps people to explore and interact with the world.
						Our services include:
						<ul>
							<li>Skiyen - Social media site that helps people meet new friends and connect with the frineds and family online.</li>
							<li>Skiyen Sender - An online file transfer system that transfers file from your location to any place with the <u>lowest</u> data available.</li>
						</ul>
						<br>

						You can use our services in a variety of ways to manage your privacy. For example, you can sign up for a Skiyen account to use services like Skiyen (social network), etc. And you can use many skiyen services like skiyen sender when you are signed out or without creating an account at all.
					</span>
				</div>

				<br>

				<div id="info-we-collect">
					<h3>Information we collect</h3>
					<span class="content">
						We collect information to provide better services to all other users like which language you speak, to more complex things like your favourite activity on Skiyen. The information Skiyen collects, and how the information is used depends on how you use our services and how you managed our privacy controls.

						<br>
						<br>

						When you sign in to a Skiyen account, we store information with complex identifiers to the browser or application you're using. This helps us identify you next time you use any Skiyen service.
					</span>
						<br>
						<br>

						<h4>Things you provide to us</h4>
						<span class="content">
							When you create a Skiyen account, you provide us with personal information that includes your username, password, firstname, lastname, etc.
							<br>
							We also collect the content you upload like photos, videos and comments you also create.
							We collect information about the apps, browsers, and devices you use to access Skiyen services

							<br><br>
						</span>
							<h4>Your activity</h4>
							<span class="content">
								We collect information about your activity when using services.
								<ul>
									<li>Terms you search for</li>
									<li>Videos you watch</li>
									<li>Voice and audio</li>
									<li>People with whom you communicate or share content with</li>
								</ul> 
							</span>
							<br><br>

							<h4>Your location</h4>
							<span class="content">
								We collect information about your location where you use our services.
								<br>
								Your location can be determined by:
								<ul>
									<li>IP address</li>
									<li>ISP provider</li>
									<li>Data from your devices</li>
								</ul> 
							</span>
							</span>


							<br>
							<br>
						<div id="why-skiyen-collect-data">
								<h3>Why Skiyen collects data</h3>
							<span class="content">
								The information we collect helps us:<br>
								<ul>
									<li>Protect our users and the public</li>
									<li>Improve our services</li>
									<li>Develop new services</li>
									<li>Provide personalized content</li>
									<li>Measure performance</li>
									<li>Communicate with you</li>
								</ul>
							</span>
						</div>
						<br>
						<br>

						<div id="privacy-controls">
							<h3>Your privacy controls</h3>
							<span class="content">
								When you're signed in, you can review, update and delete your infromations.<br>
								<b>Activity controls</b> - We save your video watch history or search history to get better videos or search results related to the things your like most.<Br>
								<b>About you</b> - You can control what others see about you across all Skiyen services.
							</span>
						</div>

						<Br>
						<br>
				<div id="supported-browsers">
					<h3>Supported browsers</h3>
					<span class="content">
						We support all browsers approved and supported by google
						<ul>
							<li><a href="https://support.google.com/accounts/answer/7675428?HL=en&authuser=0" class="linky1" target="_blank">Supported Browsers (Google) <i class="fas fa-external-link-alt"></i></a></li>
						</ul>
					</span>
				</div>
				<br><br>
						<div id="about-policy">
							<h3>About this policy</h3>
							<span class="content">
								This Privacy Policy applies to all the services offered by Skiyen.
							</span>
								<br>
								<br>
								<h3>Changes to this policy</h3>
								<span class="content">
									We update this policy from time to time. We do not reduce your rights under this privacy policy  without your consent.
							</span>
						</div>
						<br><br>
				

			</div>

	</main>


		<br>
		<br>
		<br>
		<footer class="footer bg-dark text-white wd100 p-4">
			2020 - <?php echo date('Y'); ?> &copy;<br>
			<span class="text-light">Privacy & Terms</span><br>
			<span class="text-light"><b>Skiyen</b> <i>linking the world together...</i></span>
		</footer>

</body>
</html>
	<script type="text/javascript" src="/jquery.js"></script>
<?php
if($language_select == 1){
	?>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script type="text/javascript">
		function googleTranslateElementInit(){
			new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element');
		}
	</script>
	<?php
}
?>
<style type="text/css">
.skiyen_background{
  background: linear-gradient(145deg, rgba(114,2,187,1) 0%, rgba(50,100,245,1) 100%)!important;
}.skiyen_col{
  color:rgb(114,2,187)!important;
}

.linky1{
  font-size: 20px;
}
.legal_intro{
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 1px;
}
.content{
	font-size: 18px;
}
</style>