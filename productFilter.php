<?php 
$productImg = 'productImg'; $productTitle = 'productTitle'; $productType = 'productType'; $productDesc = 'productDesc'; $productClass = 'productClass';
$tableVersions = array(
	array('class'=>'contentDesktopVersion','columnLength'=> 3),
	array('class' => 'content900MaxVersion', 'columnLength' => 2),
	array('class' => "content700MaxVersion", 'columnLength' => 1)
);
$products = array(
	/*single product*/array(
		$productImg => "assets/Raptor-X-pk_ccexpress.png",
		$productTitle => "Raptor X",
		$productType => "Treble Hooks",
		$productDesc => "3X-wire treble hook inspired by one of our best treble hooks ever made. Built solid as gold.",
		$productClass => "raptorX101Product",
	),
	/*single product*/ array(
		$productImg => "assets/CarpContinental.webp",
		$productTitle => "Carp Continental",
		$productType => "carp hooks",
		$productDesc => "The ultimate carp hook for snaggy and wild continental waters.",
		$productClass => "carpContinental101Product",
	),
	/*single product*/ array(
		$productImg => "assets/Accessories-hp-productsDetailedPage.webp",
		$productTitle => "football head",
		$productType => "jigheads",
		$productDesc => "Light jighead featuring a 0.8x-wire, a cutting delta point and bottom soft plastic lures.",
		$productClass => "footbalHeadl101Product",
	),
	/*single product*/ array(
		$productImg => "assets/Raptor-X-pk_ccexpress.png",
		$productTitle => "Raptor X",
		$productType => "Treble Hooks",
		$productDesc => "3X-wire treble hook inspired by one of our best treble hooks ever made. Built solid as gold.",
		$productClass => "raptorX101Product",
	),
	/*single product*/ array(
		$productImg => "assets/CarpContinental.webp",
		$productTitle => "Carp Continental",
		$productType => "carp hooks",
		$productDesc => "The ultimate carp hook for snaggy and wild continental waters.",
		$productClass => "carpContinental101Product",
	),
	/*single product*/ array(
		$productImg => "assets/Accessories-hp-productsDetailedPage.webp",
		$productTitle => "football head",
		$productType => "jigheads",
		$productDesc => "Light jighead featuring a 0.8x-wire, a cutting delta point and bottom soft plastic lures.",
		$productClass => "footbalHeadl101Product",
	),
	/*single product*/ array(
		$productImg => "assets/Raptor-X-pk_ccexpress.png",
		$productTitle => "Raptor X",
		$productType => "Treble Hooks",
		$productDesc => "3X-wire treble hook inspired by one of our best treble hooks ever made. Built solid as gold.",
		$productClass => "raptorX101Product",
	),
	/*single product*/ array(
		$productImg => "assets/Chinu-Shark-PK.webp",
		$productTitle => "Carp Continental",
		$productType => "carp hooks",
		$productDesc => "The ultimate carp hook for snaggy and wild continental waters.",
		$productClass => "carpContinental101Product",
	),
	/*single product*/ array(
		$productImg => "assets/Chinu-R-Hand-Ground-PK-1_1.webp",
		$productTitle => "football head",
		$productType => "jigheads",
		$productDesc => "Light jighead featuring a 0.8x-wire, a cutting delta point and bottom soft plastic lures.",
		$productClass => "footbalHeadl101Product",
	),
);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="BKK products">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/flickity.css">
	<link rel="preload" href="styles/flickityCustomizationDefault.css" as="style" onload="this.rel='stylesheet'">
	<title>Hooks</title>
	<link rel="stylesheet" type="text/css" href="styles/website.css">
	<link rel="icon" type="text/css" href="iconss/shortIcon32x32.jpg">
</head>
<body class="productFilterPage">
	<section class="topSectionOther topSectionOtherProductFilterPage flex">
		<div class="navContact"><?php include('otherPagesNav.php'); ?></div>
		<div class="poster flex">
			<h1 class="bigTitle">Hooks</h1>
		</div>
	</section>
	<section class="introDesc introDescProductFilterPage">
		<div class="forNavigation flex">
			<p class="sitemap flex"><a href='index.php' target="_blank" class="middleBorderAnimation middleBorderAnimationParent">Home</a><img src="iconss/next.png" class="arrowIcon" alt='>' /> hooks</p>
			<p>Information <img src="iconss/next.png" class="arrowIcon" alt='>' /></p>
		</div>
		<div class="introContainer">
			<p class="desc">We offer patented innovative hooks for a variety of fish species, water type, and the bait you will be using. Select our award-winning electroplated high carbon steel hooks to catch with the confidence of a proffessional.</p>
		</div>
	</section>
	<section class="hooksProductsContainer flex">
		<div class="filter">
			<div class="positionCorrector"> <!-- USED TO FIX THE ELEMENT WHILE SCROLLING IN MOBILE VERSIONS -->
				<p class="titleFilter">all hooks</p>
				<form>
					<div class="inputContainer">
						<input type="text" placeholder="enter product name" name="" />
						<button class="iconContainer"><img src="iconss/searchBlack.png" alt="search icon" /></button>
					</div>
				</form>
				<div class="filterText flex"><div class="filterIconContainer"><img src="iconss/filterLines.png" /></div><p class="fontSize20ViewPort">filter</p></div>
				<hr>
				<p class="smallSize">by categories</p>
				<div>
					<p class="fontSize20ViewPort">bail hooks</p>
					<ul>
						<li>all purpose hooks</li>
						<li>carp hooks</li>
						<li>saltwater baitfishing</li>
					</ul>
				</div>
				<hr>
				<div>
					<p class="fontSize20ViewPort">lure hooks</p>
					<ul>
						<li>all purpose hooks</li>
						<li>carp hooks</li>
						<li>saltwater baitfishing</li>
					</ul>
				</div>
				<hr>
				<p class="smallSize">by tags</p>
				<div class="filterTags tags flex">
					<p class="middleBorderAnimation">catch and realease</p>
					<p class="middleBorderAnimation">FW lurefishing</p>
					<p class="middleBorderAnimation">hard lures</p>
					<p class="middleBorderAnimation">peacock</p>
					<p class="middleBorderAnimation">bass</p>
					<p class="middleBorderAnimation">catch and realease</p>
					<p class="middleBorderAnimation">FW lurefishing</p>
					<p class="middleBorderAnimation">hard lures</p>
					<p class="middleBorderAnimation">peacock</p>
					<p class="middleBorderAnimation">bass</p>
					<p class="middleBorderAnimation">catch and realease</p>
					<p class="middleBorderAnimation">FW lurefishing</p>
					<p class="middleBorderAnimation">hard lures</p>
					<p class="middleBorderAnimation">peacock</p>
					<p class="middleBorderAnimation">bass</p>
				</div>
			</div>
		</div>
		<div class="hooksProducts">
			<button class="filterShowBtn softAnimation">Filter
				<svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="32px" height="32px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
				<style type="text/css">
					.bentblocks_een{fill:#0B1719;}
				</style>
				<path class="bentblocks_een softAnimation" d="M8,9.142V4H6v5.142c-1.72,0.447-3,2-3,3.858c0,1.858,1.28,3.411,3,3.858v10.096h2V16.858
				c1.72-0.447,3-2,3-3.858C11,11.142,9.72,9.589,8,9.142z M7,15c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2s2,0.895,2,2
				C9,14.105,8.105,15,7,15z 
				M17,16.142V10V4h-2v6v6.142c-1.72,0.447-3,2-3,3.858c0,1.858,1.28,3.411,3,3.858v3.096h2v-3.096 c1.72-0.447,3-2,3-3.858C20,18.142,18.72,16.589,17,16.142z M16,22c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2s2,0.895,2,2
				C18,21.105,17.105,22,16,22z 
				M29,16c0-1.858-1.28-3.411-3-3.858V4h-2v8.142c-1.72,0.447-3,2-3,3.858c0,1.858,1.28,3.411,3,3.858 v7.096h2v-7.096C27.72,19.411,29,17.858,29,16z M25,18c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2s2,0.895,2,2
				C27,17.105,26.105,18,25,18z"/>
			</svg></button>
			<?php foreach($tableVersions as $tableVersion){ ?>
			<table class="content <?php echo $tableVersion['class']; ?>">
				<?php for($i = 0; $i <= count($products);$i+=$tableVersion['columnLength']){
					?>
					<tbody>
						<tr class="imageRow">
							<?php 
							for($j = $i; $j < $i + $tableVersion['columnLength'];$j++){
								if($j < count($products)){
								?>
							<td class="<?php echo $products[$j][$productClass]; ?>">
								<div class="imgContainer"><img src="assets/placeholder.webp" data-src="<?php echo $products[$j][$productImg]; ?>" alt="Image product for <?php echo $products[$j][$productTitle];?>" class="lazy" /></div>
							</td>
							<?php }} ?>
						</tr>
						<tr class="titleRow">
							<?php 
							for($j = $i; $j < $i + $tableVersion['columnLength'];$j++){
								if($j < count($products)){
								?>
							<td class="<?php echo $products[$j][$productClass]; ?>"><p class="productTitle softAnimation"><?php echo $products[$j][$productTitle]; ?></p></td>
						<?php }} ?>
						</tr>
						<tr class="titleSmallRow">
							<?php 
							for($j = $i; $j < $i + $tableVersion['columnLength'];$j++){
								if($j < count($products)){
								?>
							<td class="<?php echo $products[$j][$productClass]; ?>"><p class="productType softAnimation"><?php echo $products[$j][$productType]; ?></p></td>
							<?php }} ?>
						</tr>
						<tr class="descRow">
							<?php 
							for($j = $i; $j < $i + $tableVersion['columnLength'];$j++){
								if($j < count($products)){
								?>
							<td valign="top" class="<?php echo $products[$j][$productClass]; ?>"><p class="productDesc softAnimation initial"><?php echo $products[$j][$productDesc]; ?></p></td>
							<?php }} ?>
						</tr>
					</tbody>
					<tr>
						<td class="empty" colspan="3"></td>
					</tr>
				<?php } ?>
			</table>
			<?php } ?>
		</div>
	</section>
	<section class="joinTheTeam">
		<p class="sectionTitle">join our pro-Team</p>
		<div class="parentContent greyTwoSectionsContent flex">
			<div class="content contentText">
				<p class="title">join the team</p>
				<p class="desc initial">Our company sponsors and supports some of the most talented anglers from around the world.<br><br>Do you love hooking your dream?</p>
				<a href="#" class="CAT zoomAnimationLink link">apply here</a>
			</div>
			<div class="imgJoinTheTeam contentImg"><img src="assets/placeholder.webp" data-src="assets/joinTheTeamBanner.jpg" alt="image of a guy holding a big fish" class="lazy"></div>
		</div>
	</section>
	<?php include('socialMediaContent.php'); ?>
	<?php include('footer.php'); ?>
	<script type="text/javascript" src="scripts/flickity.pkgd.js"></script>
	<script type="text/javascript" src="scripts/defaults.js"></script>
	<script type="text/javascript">
		document.querySelector('.filterShowBtn').onclick = function(){
			this.classList.toggle('activeFilterShowBtn');
			this.querySelector('svg').classList.toggle('on');
			document.querySelector('.hooksProducts').classList.toggle('activeFilterSectionHooksProduct');
			document.querySelector('.filter').classList.toggle('activeFilterSection');
			document.querySelector('.filter .positionCorrector').classList.toggle('activePositionCorrector');
		}
		let activePositionCorrectorFilter = document.querySelector('.activePositionCorrector');
	</script>
</body>
</html>