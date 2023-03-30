<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Design Page">
	<link rel="preload" href="styles/video-js.min.css" as="style" onload="this.rel='stylesheet'"/>
	<title>Design</title>
	<link rel="stylesheet" type="text/css" href="styles/website.css">
	<link rel="icon" type="text/css" href="iconss/shortIcon32x32.jpg">
</head>
<body class="designStyle">
	<section class="topSectionOther flex">
		<div class="navContact"><?php include('otherPagesNav.php'); ?></div>
		<div class="poster flex">
			<p class="smallTitle greyTitle">design</p>
			<h1 class="bigTitle">Award winning</h1>
		</div>
	</section>
	<section class="storyDesc ">
		<div class="forNavigation flex">
			<p class="sitemap flex"><a href='index.php' target="_blank" class="middleBorderAnimation middleBorderAnimationParent">Home</a><img src="iconss/next.png" class="arrowIcon" alt='>' /> design</p>
			<p>Information <img src="iconss/next.png" class="arrowIcon" alt='>' /></p>
		</div>
		<div class="storyDescContainer flex">
			<div class="logoWinning flex">
				<div class="imgContainer logoWinningImgContainer"><img class="logoWinningImg" src="iconss/Good-Design-Award-BKK-hooks.png" alt="award winning logo: G" /></div>
				<p class="logoWinningText" translate='no'>good<br>design</p>
			</div>
			<div class="quote quoteOpen"><img src="iconss/quote.png" class="quoteImg" alt='"' /></div>
			<p class="desc initial">Since 1957, the Japanese “Good Design Award” has been bestowed to some of the most innovative industrial designs from a wide array of different industries. We are the first fishing hook brand ever to receive such award.</p>
			<div class="quote quoteClose"><img src="iconss/quote.png" class="quoteImg" alt='"' /></div>
		</div>
	</section>

	<section class="designVideoContainer flex flexCenter">
		<div class="video">
			<div class="textVideo">
				<!-- playVideosFullScreen(HTML video element ID, YouTube video ID, the HTML Video element parent(VideoContainer)) -->
				<button class="playBtn softAnimation" onmouseenter="hoverImgPlay(document.querySelector('.designVideoContainer .posterVideo img'))" onmouseleave="leaveImgPlay(document.querySelector('.designVideoContainer .posterVideo img'))" onclick="playVideosFullScreen('designVideo','vmSD5GqZegQ',document.querySelector('.designVideoContainer .video'))"><img alt="play button" src="iconss/play-button.png" class="softAnimation" />
			    </button>
		    </div>
			<div class="imgContainer posterVideo"><img src="assets/placeholder.webp" data-src="assets/Our-Story-Cover-HP-2.webp" class="softAnimationLong lazy" alt="A background video banner" /></div>
			<video controls data-setup='{}' id="designVideoBG" class="video-js bgVideo" autoplay muted>
				<source src="https://www.youtube.com/embed/nqye02H_H6I?controls=0&modestbranding=1&showinfo=0&rel=0&start=7&end=17" type="video/youtube" />
			</video>
		</div>
	</section>

	<section class="winningAwards ">
		<p class="titleSection">awarded products</p>
		<?php

		$products = array(
			/*ROW*/array(
				/*CELL --- Product*/array(
					"elemId"=>"product101",
					"title"=>"product 1",
					"desc"=>"Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
					"imgCover"=>"assets/productDesignPageOne.webp",
					"videoId"=>"nqye02H_H6I",
					"awardLink"=>"#",
					"productLink"=>"#"
				),
				/*CELL --- Product*/array(
					"elemId"=>"product102",
					"title"=>"product 2",
					"desc"=>"Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
					"imgCover"=>"assets/productDesignPageTwo.webp",
					"videoId"=>"ois2c2tFjhg",
					"awardLink"=>"#",
					"productLink"=>"#"
				),
			),/*ROW*/array(
				/*CELL --- Product*/array(
					"elemId"=>"product103",
					"title"=>"product 1",
					"desc"=>"Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
					"imgCover"=>"assets/productDesignPageOne.webp",
					"videoId"=>"g8TR9MvOc7I",
					"awardLink"=>"#",
					"productLink"=>"#"
				),
				/*CELL --- Product*/array(
					"elemId"=>"product104",
					"title"=>"product 2",
					"desc"=>"Saltwater fishing is just another league if you’ve flicked lures in freshwater rivers and lakes for the big chunk of your angling experience.",
					"imgCover"=>"assets/productDesignPageTwo.webp",
					"videoId"=>"nqye02H_H6I",
					"awardLink"=>"#",
					"productLink"=>"#"
				),
			));
		
		foreach($products as $row){
			?>
			<div class="Products row flex">
				<?php
				foreach($row as $column){
					?>
					<div class="product productAwarded column videoCard<?php if(count($row) == 1){echo 'singleColumn';} ?>">
						<div class="awardedProductsVideo softAnimation">
							<button class="xMark softAnimation popUpXmark"><svg ;xmlns="http://www.w3.org/2000/svg" width="82.763" viewBox="0 0 82.763 82.741" class="softAnimation"><path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M62.473,52.659,92.033,23.1a6.926,6.926,0,1,0-9.8-9.8l-29.56,29.56L23.118,13.3a6.926,6.926,0,1,0-9.8,9.8l29.56,29.56-29.56,29.56a6.926,6.926,0,0,0,9.8,9.8l29.56-29.56,29.56,29.56a6.926,6.926,0,0,0,9.8-9.8Z" transform="translate(-11.285 -11.289)" /></svg></button>
							<div class="videoContainer"></div>
						</div>
						<div class="video">
							<div class="textVideo">
								<button class="playBtn softAnimation" onclick="playPopUpVideo(`video_<?php echo $column['elemId'];?>`, '<?php echo $column['videoId'];?>', this.closest('.column').querySelector('.videoContainer'))"><img alt="play button" src="iconss/play-button.png" class="softAnimation" alt="play button" />
							    </button>
						    </div>
							<div class="imgContainer posterVideo softAnimation"><img src="assets/placeholder.webp" data-src="<?php echo $column['imgCover']; ?>" class="softAnimation lazy" alt="image banner for a video" /></div>
						</div>
						<div class="descVideo videoCardDesc">
							<p class="title"><?php echo $column['title']; ?></p>
							<p class="descVideoText initial bodyText"><?php echo $column['desc']; ?></p>
							<div class="footerColumn links flex">
								<a class="readMore link" href="<?php echo $column['awardLink']; ?>"><span class="middleBorderAnimation">view award</span> <img src="iconss/next.png" class="arrowIcon" alt='>' /></a>
								<a class="readMore link" href="<?php echo $column['productLink']; ?>"><span class="middleBorderAnimation">see product</span> <img src="iconss/next.png" class="arrowIcon" alt='>' /></a></div>
						</div>
					</div>
					<?php } ?>
				</div>
			<?php } ?>
		</section>
		<section class="techList ">
			<p class="sectionTitle">full technologies list</p>
			<?php 
			$itemTitle = "itemTitle";
			$itemBody = "itemBody";
			$lists = array(
				/*LIST*/array(
					"listTitle" => "hook point",
					"listItems" => /*ITEMS*/array(
						/*SINGLE ITEM*/array($itemTitle => "hand ground", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
						/*SINGLE ITEM*/array($itemTitle => "cutting blade", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
						/*SINGLE ITEM*/array($itemTitle => "cutting delta", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
						/*SINGLE ITEM*/array($itemTitle => "combat point", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
					)
				),
				/*LIST*/array(
					"listTitle" => "hook coating",
					"listItems" => /*ITEMS*/array(
						/*SINGLE ITEM*/array($itemTitle => "hand ground", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
						/*SINGLE ITEM*/array($itemTitle => "cutting blade", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
						/*SINGLE ITEM*/array($itemTitle => "cutting delta", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
						/*SINGLE ITEM*/array($itemTitle => "combat point", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
					)
				),
				/*LIST*/array(
					"listTitle" => "hook eye & spade",
					"listItems" => /*ITEMS*/array(
						/*SINGLE ITEM*/array($itemTitle => "hand ground", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
						/*SINGLE ITEM*/array($itemTitle => "cutting blade", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
						/*SINGLE ITEM*/array($itemTitle => "cutting delta", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
						/*SINGLE ITEM*/array($itemTitle => "combat point", $itemBody => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."),
					)
				)
			);
			foreach($lists as $list){
			?>
			<div class="listContainer">
				<p class="listTitle softAnimation"><?php echo $list['listTitle']; ?></p>
				<?php 
				foreach($list['listItems'] as $listItem){
				?>
				<div class="item softAnimation">
					<div class="itemHeader flex">
						<p><?php echo $listItem[$itemTitle]; ?></p>
						<button class="expand flex flexCenter"><img src="iconss/next.png" class="arrowIcon softAnimation" alt='>' /></button>
					</div>
					<p class="itemBody initial"><?php echo $listItem[$itemBody]; ?></p>
				</div>
			<?php } ?>
			</div>
			<?php } ?>
		</section>
		<?php include('footer.php'); ?>
		<script src="scripts/video-js.min.js"></script>
		<script src="scripts/youtube.min.js"></script>
		<script type="text/javascript" src="scripts/defaults.js"></script>
		<script type="text/javascript">
			startPlayingVideoBG('designVideoBG',7,15,document.querySelector('.designVideoContainer .video .posterVideo'));
			function playPopUpVideo(videoId, youtubeId, videoContainer){
				createVideoElement(videoId, videoContainer);/*ORIG FUNC AT THE DEFAULT.JS*/
				let player = videojs(videoId,{
					aspectRatio:"16:9",
					controls:true,
					fluid:true,
					techOrder:['youtube'],
					sources:[{type:'video/youtube',src:`https://www.youtube.com/embed/${youtubeId}?controls=0&modestbranding=1&showinfo=0&rel=0`}]
				}),
				    divVideo = document.getElementById(videoId);

				playVideoGeneral(player,videoId,youtubeId,videoContainer);
				fadeIn(videoContainer.parentElement);
				divVideo.style.display = 'block';

				window.onkeyup = (e)=> {
					if(e.which == 27) closePopUpVideo(player, divVideo.closest('.awardedProductsVideo'));
				}
				divVideo.closest('.product').querySelector('button.xMark').onclick = () => closePopUpVideo(player, divVideo.closest('.awardedProductsVideo'));
			}
			function closePopUpVideo(player, videoContainerSection){
				fadeOut(videoContainerSection);
				document.getElementById(player.id_).style.display='none';
				document.body.setAttribute(`data-whenStopped${player.id_}`,player.currentTime());
				player.dispose();
			}
			Array.from(document.getElementsByClassName('itemHeader')).forEach(function(singleItemHeader){
				singleItemHeader.addEventListener('click',function(){
					singleItemHeader.closest('.item').classList.toggle('selectedItem');
					singleItemHeader.querySelector('img').classList.toggle('selectedArrow');
					let parentList = singleItemHeader.closest('.listContainer'),
					selectedList = Array.from(parentList.querySelectorAll('.item')).every((item) => item.className.indexOf('selectedItem') == -1);
					if(!selectedList){
						parentList.classList.add('selectedList');
					}else{
						parentList.classList.remove('selectedList');
					}
				});
			});
		</script>
	</body>
</html>