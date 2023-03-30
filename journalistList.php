<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="BKK Fishing Log is our space to narrate and share our and your most epic fishing stories and adventures. Send us your story and get published!">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preload" href="styles/video-js.min.css" as="style" onload="this.rel='stylesheet'"/>
	<title>Journalist Page</title>
	<link rel="stylesheet" type="text/css" href="styles/website.css">
	<link rel="icon" type="text/css" href="iconss/shortIcon32x32.jpg">
</head>
<body class="journalListPage">
	<section class="topSectionOther topSectionOtherJournalistPage flex">
		<div class="navContact"><?php include('otherPagesNav.php'); ?></div>
		<div class="poster flex">
			<p class="smallTitle greyTitle">Stories</p>
			<h1 class="bigTitle">Our expeditions</h1>
		</div>
	</section>
	<section class="storyDesc ">
		<div class="forNavigation flex">
			<p class="sitemap flex"><a href='index.php' target="_blank" class="middleBorderAnimation middleBorderAnimationParent">Home</a><img src="iconss/next.png" class="arrowIcon" alt='>' /> Stories</p>
			<p>Information <img src="iconss/next.png" class="arrowIcon" alt='>' /></p>
		</div>
		<div class="storyDescContainer introContainer">
			<p class="desc">At our company we love anglers' stories and we believe that taking the time to read through them like we used to do with paper magazines is something to cherish.<br><br>If you want to submit your fishing adventure for us to publish, please shoot us an email at <a href="mailto:marketing@website.com">marketing@website.com</a> or PM on Facebook with a description of your catch using our hooks, and relative photos and/or videos.</p>
		</div>
	</section>
	<section class="storiesVideoContainer videoCard">
		<div class="video">
			<div class="posterVideo softAnimationLong imgContainer">
				<img src="assets/placeholder.webp" data-src="assets/topSectionVideoPoster.webp" class="lazy" />
			</div>
			<video controls data-setup='{}' id="storiesVideoBG" class="video-js bgVideo" autoplay muted>
				<source src="https://www.youtube.com/embed/nqye02H_H6I?controls=0&modestbranding=1&showinfo=0&rel=0&start=7&end=17" type="video/youtube" /> 
			</video>
			<div class="textVideo">
				<button class="playBtn softAnimation" onmouseenter="hoverImgPlay(document.querySelector('.storiesVideoContainer .video .posterVideo'))" onmouseleave="leaveImgPlay(document.querySelector('.storiesVideoContainer .video .posterVideo'))" onclick="playVideosFullScreen('storiesVideo', 'nqye02H_H6I', this.closest('.video'))"><img alt="play button" src="iconss/play-button.png" class="softAnimation" />
				</button>
			</div>
		</div>
		<div class="descVideo videoCardDesc">
			<p class="title">the king at the lodge</p>
			<p class="descVideoText initial bodyText">Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.</p>
			<a class="readMore link" href="#"><span class="middleBorderAnimation">read more</span> <img src="iconss/next.png" class="arrowIcon" alt='>' /></a>
		</div>
	</section>
	<section class="journalsGallery">
		<?php
		$data = array(
			array(
				"title" => "king of kings",
				"desc" => "Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.<br><br>Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
				"videoId" => "nqye02H_H6I",
				"img" => "storiesGalBG.webp",
			),
			array(
				"title" => "king of kings",
				"desc" => "Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.<br><br>Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
				"videoId" => "AyKZFExFCPM",
				"img" => "storiesGalBG.webp"
			),
			array(
				"title" => "king of kings",
				"desc" => "Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.<br><br>Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
				"videoId" => "KzpcqIiZ9YU",
				"img" => "storiesGalBG.webp"
			),
			array(
				"title" => "king of kings",
				"desc" => "Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.<br><br>Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
				"videoId" => "0Hzp5JX8JYs",
				"img" => "storiesGalBG.webp"
			),
			array(
				"title" => "king of kings",
				"desc" => "Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.<br><br>Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
				"videoId" => false,
				"img" => "storiesGalBG.webp"
			),
			array(
				"title" => "king of kings",
				"desc" => "Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.<br><br>Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
				"videoId" => "USgL_rPbcKI",
				"img" => "storiesGalBG.webp"
			),
		);
		foreach($data as $elem){
		 ?>
		<div class="singleJournal flex">
			<div class="journalMedia video">
				<div class="posterVideo softAnimation">
					<img src="assets/placeholder.webp" data-src="assets/<?php echo $elem['img'];?>" class="lazy" alt="video cover" />
				</div>
				<?php 
				if($elem['videoId']){
				?>
				<div class="textVideo">
					<button class="playBtn softAnimation" onclick="playVideosFullScreen('video_<?php echo $elem['videoId']; ?>', '<?php echo $elem['videoId']; ?>', this.closest('.journalMedia'))"><img alt="play button" src="iconss/play-button.png" class="softAnimation" />
					</button>
				</div>
				<?php } ?>
			</div>
			<div class="journalText">
				<p class="title"><?php echo $elem['title']; ?></p>
				<p class="desc initial"><?php echo $elem['desc']; ?></p>
				<a class="readMore flex" href="#"><span class="middleBorderAnimation middleBorderAnimationParent middleBorderAnimationWhite">read more</span> <img src="iconss/next.png" class="arrowIcon" alt='>' /></a>
			</div>
		</div>
	<?php  } ?>
	</section>
	<section class="pagination">
		<div class="content flex">
			<button class="direction">previous</button>
			<div class="paginationNbs flex">
			<button>1</button>
			<button>2</button>
			<button>3</button>
			<button>4</button>
		</div>
			<button class="direction">after</button>
		</div>
	</section>
	<?php include('footer.php'); ?>
	<script src="scripts/video-js.min.js"></script>
	<script src="scripts/youtube.min.js"></script>
	<script type="text/javascript" src="scripts/defaults.js"></script>
	<script type="text/javascript">
		/*startPlayingVideoBG(videoElementId, startSeconds, endSeconds, posterVideoElement)*/
		startPlayingVideoBG('storiesVideoBG',7,15,document.querySelector('.storiesVideoContainer .video .posterVideo'));
	</script>
</body>
</html>