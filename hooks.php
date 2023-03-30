<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Learn more about hooks.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/flickity.css"/>
	<link rel="preload" href="styles/video-js.min.css" as="style" onload="this.rel='stylesheet'"/>
	<title>Hooks</title>
	<link rel="stylesheet" type="text/css" href="styles/website.css">
	<link rel="icon" type="text/css" href="iconss/shortIcon32x32.jpg">
</head>
<body class="productsDetailed">
<?php include('otherPagesNav.php');

/*
	****ADD IMAGES FOR THE TOP FLICKITY SLIDER / FLICKITY POPUP / FLICKITY POPUP NAV****
*/
$hooksProductsTopSection = ['assets/CarpContinental.webp','assets/CarpContinental.webp','assets/CarpContinental.webp','assets/CarpContinental.webp','assets/CarpContinental.webp','assets/CarpContinental.webp'];
/*
	****ADD IMAGES FOR THE TOP FLICKITY SLIDER / FLICKITY POPUP / FLICKITY POPUP NAV****
*/
	
?>
<!-- POPUP CODE START -->
<section class="popUp softAnimation">
	<button class="xMark softAnimation popUpXmark"><svg ;xmlns="http://www.w3.org/2000/svg" width="82.763" viewBox="0 0 82.763 82.741"><path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M62.473,52.659,92.033,23.1a6.926,6.926,0,1,0-9.8-9.8l-29.56,29.56L23.118,13.3a6.926,6.926,0,1,0-9.8,9.8l29.56,29.56-29.56,29.56a6.926,6.926,0,0,0,9.8,9.8l29.56-29.56,29.56,29.56a6.926,6.926,0,0,0,9.8-9.8Z" transform="translate(-11.285 -11.289)" class="softAnimation" /></svg></button>
	<div class="carousel carousel-main flickitySliderPopUp">
		<?php
		foreach($hooksProductsTopSection as $hooksSingleProductTopSection){?>
			<div class="carousel-cell flex">
				<div class="imgContainer">
					<img src="<?php echo $hooksSingleProductTopSection;?>">
				</div>
			</div>
		<?php
	    }
		?>
	</div>

	<div class="carousel carouselNavTopSection flickityNavPopUp">
		<?php
		foreach($hooksProductsTopSection as $hooksSingleProductTopSection){?>
			<div class="carousel-cell">
				<div class="imgContainer">
					<img src="<?php echo $hooksSingleProductTopSection;?>">
				</div>
			</div>
		<?php
	    }
		?>
	</div>
</section>
<!-- POPUP CODE END -->
<section class="topSection flex">
	<div class="bigBg bgTopSection">
		<div class="imgContainer"><img src="assets/placeholder.webp" data-src="assets/CarpContinental.webp" class="lazy" alt="Image of the carop continental product" /></div>
	</div>
	<div class="rightContent flex">
		<div class="carousel flickitySliderToPopUp">
			<?php
		foreach($hooksProductsTopSection as $hooksSingleProductTopSection){?>
			<div class="carousel-cell flex">
				<div class="imgContainer">
					<img src="<?php echo $hooksSingleProductTopSection;?>">
				</div>
			</div>
		<?php
	    }
		?>
		</div>
		<div class="bottomContent">
			<p class="sitemap flex"><a href='index.php' target="_blank" class="middleBorderAnimation middleBorderAnimationParent">Home</a><img src="iconss/next.png" class="arrowIcon" alt='>' /> hooks</p>
			<p class="title">Carp continental</p>
			<p class="desc initial">Our Carp Continental is the ultimate carp hook for snaggy and wild continental warers. Features include a short heavy-duty forged shank, the Hand Ground point, and the super slick SS coating.
			</p>
		</div>
		<div class="tags flex">
			<p class="middleBorderAnimation">saltwater baitffishing</p>
			<p class="middleBorderAnimation">swimbait and worm hooks</p>
			<p class="middleBorderAnimation">all purpose hooks</p>
		</div>
	</div>	
</section>
<section class="videoThumbPopUp softAnimation "></section>
<section class="videoThumb">
	<div class="carousel videoThumbCarousel">
		<div class="carousel-cell flex">
			<div class="video videoOne" id="hpFWgI7ZGbE" data-youtube-video='hpFWgI7ZGbE'>
				<img alt="Image of a video" data-flickity-lazyload-src="assets/sirv_thumbnail.webp" class="sirv_thumbnail softAnimationLong lazy" />
			</div>
			<div class="video videoTwo" id="X3h5-Dzmaeg" data-youtube-video='X3h5-Dzmaeg'>
				<img alt="Image of a video" data-flickity-lazyload-src="assets/videoThumbPlayerOn.webp" class="videoThumbPlayerOn softAnimationLong lazy" />
				<div class="textVideo">
					<button class="playBtn softAnimation playBtnForPopUp"><img alt="play button" src="iconss/play-button.png" class="softAnimation" /></button>
				</div>
			</div>
		</div>
		<div class="carousel-cell flex flexCenter">
			<div class="video videoThree" id='nqye02H_H6I' data-youtube-video='nqye02H_H6I'>
				<img alt="Image of a video" data-flickity-lazyload-src="assets/videoThumbPlayerOn.webp" class="lazy videoThumbPlayerOn softAnimationLong">
				<div class="textVideo">
					<button class="playBtn softAnimation playBtnForPopUp"><img alt="play button" src="iconss/play-button.png" class="softAnimation" /></button>
				</div>
			</div>
			<div class="video videoFour" id="USgL_rPbcKI" data-youtube-video='USgL_rPbcKI'>
				<img alt="Image of a video" data-flickity-lazyload-src="assets/sirv_thumbnail.webp" class="lazy sirv_thumbnail softAnimationLong" loading="lazy" />
			</div>
		</div>
	</div>
</section>
<section class="downloadSection flex flexCenter">
<p class="downloadSpeciDesc initial">Features include a short heavy-duty forged shank, the Hand Ground point, and the super slick SS coating.<br /><br />This hook is perfect for all kinds of presentations, including pop-up, balanced, and bottom-bait rigs. Features include a short heavy-duty forged shank, the Hand Ground point, and the super slick SS coating.<br /><br />This hook is perfect for all kinds of presentations, including pop-up, balanced, and bottom-bait rigs.</p>
<a href="#" class="downloadSpeciLink">download full specifications</a>
</section>
<section class="tagsSection flex">
<div class="parentTag">
	<div class="row tags flex">
		<p class="middleBorderAnimation">Catch and Release</p>
		<p class="middleBorderAnimation">FW Lurefishing</p>
		<p class="middleBorderAnimation">Hard Lures</p>
		<p class="middleBorderAnimation">Peacock</p>
		<p class="middleBorderAnimation">bass</p>
	</div>
	<div class="row tags flex">
		<p class="middleBorderAnimation">Catch and Release</p>
		<p class="middleBorderAnimation">FW Lurefishing</p>
		<p class="middleBorderAnimation">Catch and Release</p>
		<p class="middleBorderAnimation">FW Lurefishing</p>
	</div>
</div>
</section>

<section class="seeItInAction">
<p class="sectionTitle initial">See it in action</p>
<div class="carousel carouselVideo-main videosDemonstartion">
	<?php 
	$carouselVideos = array(
		array(
			'youtubeId'=>'tDRgX9Jh120',
			'imgCover'=>'assets/posterVideoSlider.webp',
			'elemId'=>1,
		),
		array(
			'youtubeId'=>'AyKZFExFCPM',
			'imgCover'=>'assets/posterVideoSlider.webp',
			'elemId'=>2,
		),
		array(
			'youtubeId'=>'PVDU45BeDbU',
			'imgCover'=>'assets/posterVideoSlider.webp',
			'elemId'=>3,
		)
	);
	foreach($carouselVideos as $singleVideo){
	?>
	<div class="carousel-cell flex flexCenter">
		<div class="videoContainer">
		    <div class="poster" style="background-image: url(<?php echo $singleVideo['imgCover'];?>);"></div>
	    </div>
	    <div class="textVideo">
	    	<button class="playBtn softAnimation playBtnNormal" data-youtube-id='<?php echo $singleVideo['youtubeId'];?>' id="<?php echo $singleVideo['elemId'];?>"><img alt="play button" src="iconss/play-button.png" class="softAnimation playBtnNormalIcon" /></button>
	    	<button class="restartVideo softAnimation">Close Video To Save Data</button>

	    </div>
	</div>
    <?php } ?>
</div>
<div class="carousel carouselVideo-nav videosNavDemonstartion">
	<?php
	foreach($carouselVideos as $singleVideo){
	 ?>
	<div class="carousel-cell flex flexCenter">
		<img src="assets/placeholder.webp" data-flickity-lazyload-src="<?php echo $singleVideo['imgCover'];?>" alt="" />
		<button class="playBtn softAnimation"><img alt="play button" src="iconss/play-button.png" class="softAnimation" loading="lazy" /></button>
	</div>
    <?php } ?>
</div>
</section>
<section class="alsoLikeSection">
	<p class="sectionTitle">you might also like</p>
	<table class="alsoLikeSectionTable products productsDesktop">
		<tbody>
			<tr>
				<td><div class="imgContainer"><img src="assets/placeholder.webp" data-src="assets/Raptor-X-pk_ccexpress.png" title="Product 1" alt="image of product 1" class="lazy" /></div></td>
				<td><div class="imgContainer"><img src="assets/placeholder.webp" data-src="assets/CarpContinental.webp" title="Product 2" alt="image of product 1" class="lazy" /></div></td>
				<td><div class="imgContainer"><img src="assets/placeholder.webp" data-src="assets/Accessories-hp-productsDetailedPage.webp" title="Product 3"alt="image of product 1" class="lazy" /></div></td>
			</tr>
			<tr>
				<td><p class="title">product 1</p></td>
				<td><p class="title">product 2</p></td>
				<td><p class="title">product 3</p></td>
			</tr>
			<tr>
				<td><p class="desc">3X-wire treble hook inspired by one of our best treble hooks ever made. Built solid as gold.</p></td>
				<td><p class="desc">3X-wire treble hook inspired by one of our best treble hooks ever made. Built solid as gold.</p></td>
				<td><p class="desc">3X-wire treble hook inspired by one of our best treble hooks ever made. Built solid as gold.</p></td>
			</tr>
		</tbody>
	</table>
	<div class="products productsMobileVersion">
		<div class="rowAlikeProducts">
			<div class="containerImg"><img src="assets/placeholder.webp" data-src="assets/Raptor-X-pk_ccexpress.png" title="Product 1" alt="image of product 1" class="lazy" /></div>
			<p class="title">product 1</p>
			<p class="desc">3X-wire treble hook inspired by one of our best treble hooks ever made. Built solid as gold.</p>
		</div>
		<div class="rowAlikeProducts">
			<div class="containerImg"><img src="assets/placeholder.webp" data-src="assets/CarpContinental.webp" titba3ele="Product 2" alt="image of product 1" class="lazy" /></div>
			<p class="title">product 1</p>
			<p class="desc">3X-wire treble hook inspired by one of our best treble hooks ever made. Built solid as gold.</p>
		</div>
		<div class="rowAlikeProducts">
			<div class="containerImg"><img src="assets/placeholder.webp" data-src="assets/Accessories-hp-productsDetailedPage.webp" title="Product 3"alt="image of product 1" class="lazy" /></div>
			<p class="title">product 1</p>
			<p class="desc">3X-wire treble hook inspired by one of our best treble hooks ever made. Built solid as gold.</p>
		</div>
	</div>
</div>
</section>
<?php include('footer.php'); ?>
<script src="scripts/flickity.pkgd.js"></script>
<script src="scripts/asNavFor.js"></script>
<script src="scripts/video-js.min.js"></script>
<script src="scripts/youtube.min.js"></script>
<script type="text/javascript" src="scripts/defaults.js"></script>
<script type="text/javascript">
	let flickityVideoSee = new Flickity('.carouselVideo-main',{pageDots:false,arrowShape:{x0: 10, x1: 70, y1: 40, x2: 70, y2: 40, x3: 70},
		on:{
			ready:function(){
				document.querySelectorAll('.playBtnNormal').forEach((singlePlayBtnNormal) => {
					singlePlayBtnNormal.onclick = () => {
						let video,
						textVideoElem = singlePlayBtnNormal.closest('.textVideo'),
						carouselCellElem = singlePlayBtnNormal.closest('.carousel-cell'),
						restartVideoBtn = textVideoElem.querySelector('.restartVideo'),
						poster = carouselCellElem.querySelector('.poster');

						createVideoElement(`video_${singlePlayBtnNormal.id}`,carouselCellElem.querySelector('.videoContainer'));
						if(video == null){
							video = videojs(`video_${singlePlayBtnNormal.id}`,{
								controls:true,
								preload:'metadata',
								techOrder:['youtube'],
								sources:[{type:'video/youtube',src:`https://www.youtube.com/embed/${singlePlayBtnNormal.dataset.youtubeId}?controls=0&modestbranding=1&showinfo=0&rel=0`}]
							});
						}
						video.play();
						video.on('loadedmetadata',() => video.play());
						video.on('ended',() => video.play());
						video.on('playing',() => {
							textVideoElem.style.display = 'none';
							restartVideoBtn.style.display = 'block';
							poster.style.display = "none";
							flickityVideoSee.on('change',(index) => video.pause());
						});
						video.on('pause',() => {textVideoElem.style.display = 'grid'});
						restartVideoBtn.onclick = () =>{
							video.dispose();
							poster.style.display = "block";
							restartVideoBtn.style.display = 'none';
						}
					}
				});
			}
		}
	}),
	flickitySeeItInActionNav = new Flickity('.carouselVideo-nav',{
		asNavFor:".carouselVideo-main",
		contain:true,
		pageDots:false,
		groupCells:true,
		arrowShape:{x0: 10, x1: 70, y1: 40, x2: 70, y2: 40, x3: 70},
		lazyLoad:true,
		imagesLoaded:true,
		on:{
			ready:function(){
				this.resize();
			}
		}
	}),
	flickitySliderToPopUp = new Flickity('.flickitySliderToPopUp',{
		freeScroll:true,
		pageDots:false,
		cellAlign:'left',
		arrowShape:{x0: 10, x1: 70, y1: 40, x2: 70, y2: 40, x3: 70},
		lazyLoad:true,
		groupCells:true,
		imagesLoaded:true,
		contain:true,
		on:{
			ready:function(){
				this.resize();
			}
		}
	}),
	flickityTopPopUpNav = new Flickity('.flickityNavPopUp',{
		groupCells:true,
		asNavFor:'.carousel-main',
		contain:true,
		pageDots:false,
		lazyLoad:true,
		imagesLoaded:true,
		arrowShape:{x0: 10, x1: 70, y1: 40, x2: 70, y2: 40, x3: 70},
		on:{
			ready:function(){
				this.resize();
			}
		}
	}),
	videoThumbCarousel = new Flickity('.videoThumbCarousel',{
		pageDots:false,
		arrowShape:{x0: 10, x1: 70, y1: 40, x2: 70, y2: 40, x3: 70},
		lazyLoad:true,
		contain:true,
		imagesLoaded:true,
		on:{
			ready:function(){
				this.resize();
				this.element.querySelectorAll('.carousel-cell .video').forEach((singleCarouselVideo)=>{
					singleCarouselVideo.onclick = () => {
						playVideosFullScreen(`video_${singleCarouselVideo.id}`,singleCarouselVideo.dataset.youtubeVideo,document.querySelector('.videoThumbPopUp'));
					}
				});
			}
		}
	}),
	flickitySliderPopUp = new Flickity('.flickitySliderPopUp',{
		freeScroll:true,
		pageDots:false,
		lazyLoad:true,
		imagesLoaded:true,
		contain:true,
		wrapAround:true,
		arrowShape:{x0: 10, x1: 70, y1: 40, x2: 70, y2: 40, x3: 70},
		on:{
			ready:function(){
				this.resize();
				let flickitySliderToPopUpElem = flickitySliderToPopUp.element.querySelectorAll('.carousel-cell'),
				flickitySliderPopUpElem = this.element;
				for(let i = 0; i < flickitySliderToPopUpElem.length; i++){
					flickitySliderToPopUpElem[i].addEventListener('click',function(){
						try{
							fadeIn(document.querySelector('.popUp'))
						}catch(e){}
						let oldSelectedIndex = Array.from(flickitySliderPopUpElem.querySelectorAll('.carousel-cell')).indexOf(flickitySliderPopUpElem.querySelector('.is-selected'));
						if(i - oldSelectedIndex > 0){
							for(let j = 0; j < Math.abs(i - oldSelectedIndex);j++){
								flickitySliderPopUpElem.querySelector('.flickity-prev-next-button.next').click()
							}
						}else{
							for(let j = 0; j < Math.abs(i - oldSelectedIndex);j++){
								flickitySliderPopUpElem.querySelector('.flickity-prev-next-button.previous').click()
							}
						}
					})
				}
				window.onkeydown = (event)=>{
					if(event.which == 27){
						fadeOut(document.querySelector('.popUp'));
					}
				}
				document.querySelector('.popUp .xMark').addEventListener('click',()=>fadeOut(document.querySelector('.popUp')));
			}
		}
	});
	window.onresize = ()=>{
		flickitySeeItInActionNav.resize();
		flickitySliderToPopUp.resize();
		flickitySliderPopUp.resize();
		videoThumbCarousel.resize();
		flickityTopPopUpNav.resize();
	}
</script>
</body>
</html>