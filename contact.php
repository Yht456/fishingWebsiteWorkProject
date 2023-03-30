<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="If you need to contact us for any inquiry you are welcome to leave a note or reach out to our distributors for more detailed info about our BKK hooks!"/>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="styles/website.css">
	<link rel="icon" type="text/css" href="iconss/shortIcon32x32.jpg">
</head>
<body class="contactBody">
	<section class="topSectionOther topSectionOtherForContact flex">
		<div class="navContact"><?php include('otherPagesNav.php'); ?></div>
		<div class="poster flex">
			<p class="smallTitle greyTitle">contact</p>
			<h1 class="bigTitle">Get in touch</h1>
		</div>
	</section>
	<section class="form">
		<div class="forNavigation flex">
			<p class="sitemap flex"><a href='index.php' target="_blank" class="middleBorderAnimation middleBorderAnimationParent">Home</a><img src="iconss/next.png" class="arrowIcon" alt='>'> contact</p>
			<p>Information <img src="iconss/next.png" class="arrowIcon" alt='>'></p>
		</div>
		<div class="introContainer introContainerForContact">
			<p class="desc">We operate through a world-wide distribution network and offices accross <span style="word-break:all;">conti&shy;nents.</span> For general inquiries regarding our products or events, please fill the form below.</p>
		</div>
		<div class="formContanctContainer">
		<p class="formTitle">*All fields are compulsory</p>
		<form class="formForContact flex">
			<div class="row name flex">
				<div class="firstNameInputContainer inputContainer">
					<input type="text" name=""required class="contactInputElement"/>
					<p class="label"><span class="labelName">First Name</span></p>
					<p class="error">Error Container</p>
				</div>
				<div class="lastNameInputContainer inputContainer">
					<input type="text" name=""required class="contactInputElement"/>
					<p class="label"><span class="labelName">Last Name</span></p>
					<p class="error"></p>
				</div>
			</div>
			<div class="row companyName flex">
				<div class="companyNameInputContainer inputContainer">
					<input type="text" name=""required class="contactInputElement"/>
					<p class="label"><span class="labelName">Company Name</span></p>
					<p class="error"></p>
				</div>
				<div class="emailAdressInput inputContainer">
					<input type="text" name=""required class="contactInputElement"/>
					<p class="label"><span class="labelName">email Name</span></p>
					<p class="error"></p>
				</div>
			</div>
			<div class="row country flex">
				<div class="countryInputContainer inputContainer">
					<input type="text" name=""required class="contactInputElement"/>
					<p class="label"><span class="labelName">country</span></p>
					<p class="error"></p>
				</div>
			</div>
			<div class="row messageContainer flex">
				<label for="messageEmail">Message</label>
				<textarea required id="messageEmail" class="initial"></textarea>
				<p class="error errorForMessageInput"></p>
			</div>
			<div class="row submitBtn flex">
				<input type="submit" name="" vlue="submit form >" class="softAnimation contactInputElement" />
			</div>
		</form>
	</div>
		</div>
	</section>
	<section class="infoWebsiteSection flex flexCenter">
		<p class="title initial">info@website.com</p>
		<div class="socialMedia flex flexCenter">
			<a class="youtube socialMediaBrand flex flexCenter" href="#">
				<div class="iconContainer"><img src="iconss/youtube.png" alt="youtube icon"></div>
				<p class="socialMediaYT socialMediaBrandName">youtube</p>
			</a>
			<a class="instagram socialMediaBrand flex flexCenter" href="#">
				<div class="iconContainer"><img src="iconss/social-Instagram-icon.png" alt="instagram icon"></div>
				<p class="socialMediaIG socialMediaBrandName">instagram</p>
			</a>
			<a class="facebook socialMediaBrand flex flexCenter" href="#">
				<div class="iconContainer"><img src="iconss/social-facebook-icon.png" alt="facebook icon"></div>
				<p class="socialMediaFB socialMediaBrandName">facebook</p>
			</a>
		</div>
	</section>
	<section class="locations">
		<div class="row flex">
			<div class="floridaLoc loca">
				<p class="locTitle">Florida</p>
				<p class="smallTitle office">office</p>
				<p class="locaData">6666 Governors Square Blvd Suite<br># 333 Miami Lakes,<br>Florida 33016<br>United States of America</p>
				<p class="phoneNumber">+1 777 777 7777</p>
			</div>
			<div class="floridaLoc loca">
				<p class="locTitle">Saigon</p>
				<p class="smallTitle office">office</p>
				<p class="locaData">6666 Governors Square Blvd Suite<br># 333 Miami Lakes,<br>Florida 33016<br>United States of America</p>
				<p class="phoneNumber">+1 777 777 7777</p>
			</div>
		</div>
		<div class="row flex">
			<div class="floridaLoc loca">
				<p class="locTitle">Cairo</p>
				<p class="smallTitle office">office</p>
				<p class="locaData">6666 Governors Square Blvd Suite<br># 333 Miami Lakes,<br>Florida 33016<br>United States of America</p>
				<p class="phoneNumber">+1 777 777 7777</p>
			</div>
			<div class="floridaLoc loca">
				<p class="locTitle">Manilla</p>
				<p class="smallTitle office">office</p>
				<p class="locaData">6666 Governors Square Blvd Suite<br># 333 Miami Lakes,<br>Florida 33016<br>United States of America</p>
				<p class="phoneNumber">+1 777 777 7777</p>
			</div>
		</div>
	</section>
	<section class="distributorForContact flex">
		<div class="content">
			<p class="title">find a distributor</p>
			<p class="desc initial">Our great products are found at renound fishing gear distributors around the world.<br><br>Do you love hooking your dream?</p>
			<a href="#" class="CAT zoomAnimationLink">search directory</a>
		</div>
		<div class="imgDistributor"><img src="assets/distributorImg.webp"></div>
	</section>
	<script type="text/javascript" src="scripts/defaults.js"></script>
	<?php include('footer.php'); ?>
</body>
</html>