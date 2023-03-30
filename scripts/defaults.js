function removeNav(){
	'use strict';
	document.querySelector('.overlayMenuBar').classList.remove('openOverlay');
	document.querySelector('.bottomNav').classList.remove('openBarMobile');
}
function openNav(){
	'use strict';
	document.querySelector('.overlayMenuBar').classList.add('openOverlay');
	document.querySelector('.bottomNav').classList.add('openBarMobile');
}
let socialMediaContentCarouselDOM = document.querySelector('.socialMediaContentCarousel');
if(typeof(socialMediaContentCarouselDOM) != undefined && socialMediaContentCarouselDOM != null){
  let socialMediaContentCarousel = new Flickity('.socialMediaContentCarousel',{
    wrapAround:true,
    freeScroll:true,
    cellAlign:'left',
    arrowShape:{x0: 10, x1: 70, y1: 40, x2: 70, y2: 40, x3: 70},
    imagesLoaded:true,
    lazyLoad:true,
    contain:true,
  });
  window.onresize = () => {
    socialMediaContentCarousel.resize();
  }
}

function loopVideo(playerElem,startSecs,endSecs){
  setInterval(function(){
    if(playerElem.currentTime() > endSecs){
      playerElem.currentTime(startSecs);
      playerElem.play();
    }
  },10);
}
function startPlayingVideoBG(videoId, startSecsVid,endSecsVid, videoPoster){
  let player = videojs(videoId,{
    muted:true,
    controls:0,
  });
  //TO CHECK FOR SCROLLING
  window.addEventListener('load',()=>{
    let elemToCheckPlay = document.getElementById(videoId).parentElement;
    if(elemToCheckPlay.getBoundingClientRect().top < window.innerHeight - 100){
      player.on('loadedmetadata',()=>{player.play()});
      player.play();
    }
    window.addEventListener('scroll',()=>{
      if(elemToCheckPlay.getBoundingClientRect().bottom < 20){
        player.pause();
      }else if(elemToCheckPlay.getBoundingClientRect().top < window.innerHeight - 100){
        player.on('loadedmetadata',()=>{player.play()});
        player.play();
      }else{ 
        player.pause();
      }
    });
  });
  player.on('playing',function(){
    if(videoPoster && videoPoster != ''){
      player.on('playing',function(){
        setTimeout(function(){
          videoPoster.style.opacity = 0;
        },1);
      });
    }
    loopVideo(player,startSecsVid,endSecsVid);
    document.addEventListener('visibilitychange',function(){
      if(document.hidden){
        player.pause();
      }else{
        player.play();
      }
    });
  });
}
//createVideoElement(videoId: element id, youtubeId, videoContainer, videoJsOtherOptions: object)
function createVideoElement(videoId,videoContainer){
  let videoElement = document.createElement('video');
  videoElement.classList.add('video-js');
  videoElement.id = videoId;
  videoContainer.appendChild(videoElement);
}
function playVideoGeneral(player, videoId, youtubeId, videoContainer){
  if(!document.body.hasAttribute(`data-whenstopped${videoId}`)){
    document.body.setAttribute(`data-whenstopped${videoId}`,0);
  }
  player.on('loadedmetadata',()=>{
    player.currentTime(document.body.getAttribute(`data-whenstopped${videoId}`));
    player.play();
  });
  player.on('ended',()=>player.play());
}
function playVideosFullScreen(videoId, youtubeId,videoContainer){
  'use strict';
  createVideoElement(videoId, videoContainer);
  let playerFullScreen;
  playerFullScreen = videojs(videoId,{
    controls:true,
    preload:'metadata',
    techOrder:['youtube'],
    sources:[{type:'video/youtube',src:`https://www.youtube.com/embed/${youtubeId}?controls=0&modestbranding=1&showinfo=0&rel=0`}]
  });
  playVideoGeneral(playerFullScreen, videoId, youtubeId, videoContainer);
  let parent = document.getElementById(videoId);
  setTimeout(()=>{
    playerFullScreen.requestFullscreen();
    parent.style.display = 'block';
  },1000)
  document.addEventListener('fullscreenchange',function(e){
    if(document.fullscreenElement == null){
      if(document.getElementById(videoId) != null){
        console.log(videoId);
        document.body.setAttribute(`data-whenstopped${videoId}`,playerFullScreen.currentTime());
        playerFullScreen.dispose();
      }
    }
  });
}

function hoverImgPlay(img){
  'use strict';
  img.style.transform = 'scale(1.1)';
}
function leaveImgPlay(img){
  'use strict';
  img.style.transform = 'scale(1)';
}
const imagesLazy = document.querySelectorAll('img.lazy');
if("IntersectionObserver" in window && "IntersectionObserverEntry" in window){
  function preloadLazyImage(lazyImg){
    const src = lazyImg.dataset.src;
    if(!src){
      return;
    }
    lazyImg.src = src;
  }
  const imgLazyOptions = {
  };
  const imgLazyObserver = new IntersectionObserver((entries,imgLazyObserver) => {
    entries.forEach(entry => {
      if(!entry.isIntersecting){
        return;
      }else{
        preloadLazyImage(entry.target);
        imgLazyObserver.unobserve(entry.target);
      }
    })
  }, imgLazyOptions);
  imagesLazy.forEach(singleLazyImg => {
    imgLazyObserver.observe(singleLazyImg);
  })
}else{
  imagesLazy.forEach(function(singleLazyImg){
    singleLazyImg.src = singleLazyImg.dataset.src;
  })
}

function fadeIn(elem){
  elem.style.visibility = 'visible';
  elem.style.opacity = 1;
}
function fadeOut(elem){
  elem.style.opacity = 0;
  elem.style.visibility = 'hidden';
}