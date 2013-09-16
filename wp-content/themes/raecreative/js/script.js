$(document).ready(function(){
	// Cufon letters
	$(function(){
		Cufon.replace('span,ul,p,h1,h2,h3', {hover: 'true'});	
	})
	
	// Resize and run slideshow of home images
	$(function(){
		$('#home_images').cycle();
	})
	
	//If pages have children then second tier menu slide down.
	$(function(){
		if($('.col-second-tier')[0]){
			$('.col-second-tier').slideDown(800);
		}
		if($('.second-tier')[0]){
			$('.second-tier').slideDown(800);
		}
		
		$(".content").css("display", "none");
	 
		$(".content").fadeIn(900);
	 
		$("a.transition").click(function(event){
			event.preventDefault();
			linkLocation = this.href;
			$(".content").fadeOut(600, redirectPage);     
		});
	});
	
	//client Scrollbar call
	$(function(){
		$('.scroll-pane').jScrollPane({
			verticalDragMinHeight: 20,
			verticalDragMaxHeight: 20,
			horizontalDragMinWidth: 20,
			horizontalDragMaxWidth: 20
		});
	});
   
   /* Contact Footer Links */
  $(function(){
  	$('#company-information-link').click(function(){
  		$('#terms-and-privacy').css('display', 'none');
  		$('.content').css('display', 'none');
  		$('#company-information').fadeIn(600);
  		$('footer').fadeOut(600);
  	});
  	$('#terms-and-privacy-link').click(function(){
  		$('#company-information').css('display', 'none');
  		$('.content').css('display', 'none');
  		$('#terms-and-privacy').fadeIn(600);
  		$('footer').fadeOut(600);
  	});
  	$('.exit').click(function(){
  		$('#terms-and-privacy').css('display', 'none');
  		$('#company-information').css('display', 'none');
  		$('.content').fadeIn(600);
  		$('footer').fadeIn(300);
  	});
  });
  
  
  	//trying to remove filter form inline css in IE8, this will hhopefully solve the full image background issue
	$(function(){
		$( this ).css({
                display: "",
                opacity: "",
                filter: "",
                zoom: ""
            });
		
		var isIE = !! $( "html.lt-ie9" ).length;
			if ( isIE ) {
			this.style.removeAttribute( "filter" );
		}
	});
    
	/* Video Player Settings */
    $(function(){
		var video = document.getElementById('myVideo');
		
		//Play/Pause control clicked
		$('.toPlay').click(function(){
		   if(video.paused) {
		      video.play();
			  $('.toPlay').css("display", "none");
			  $('.btnPlay').css('background-position', '-30px');
		   }
		   else {
		      video.pause();
			  $('.toPlay').css("display", "block");
			  $('.btnPlay').css('background-position', '0px');
		   }
		   return false;
		});
		
		$('.btnPlay').click(function(){
		   if(video.paused) {
		      video.play();
			  $('.toPlay').css("display", "none");
			  $('.btnPlay').css('background-position', '-30px');
		   }
		   else {
		      video.pause();
			  $('.toPlay').css("display", "block");
			  $('.btnPlay').css('background-position', '0px');
		   }
		   return false;
		});
		
		//get HTML5 video time duration
		video.addEventListener('loadedmetadata', function() {
			$('.duration').text(Math.round(video.duration));
		});
		 
		//update HTML5 video current play time
		video.addEventListener('timeupdate', function() {
			$('.current_time').text(Math.round(video.currentTime));
		});
		 
		//update HTML5 video current play time
		video.addEventListener('timeupdate', function() {
		   var currentPos = Math.round(video.currentTime); //Get currenttime
		   var maxduration = Math.round(video.duration); //Get video duration
		   var percentage = 100 * currentPos / maxduration; //in %
		   $('.timeBar').css('width', percentage + "%");   
		   
		   if (video.ended) {  
				video.currentTime = 0;
				video.pause();
				$('.toPlay').css("display", "block");
				$('.btnPlay').css('background-position', '0px');
				$('.videoPosterImg').css("display", "block");
			}
			if(video.currentTime != 0){
			  $('.videoPosterImg').css("display", "none");
			}
		});
		
		var timeDrag = false;  /* Drag Status */
		$('.progressBar').mousedown(function(e){
			timeDrag = true;
			updatebar(e.pageX);
		});
		$(document).mouseup(function(e){
			if(timeDrag){
				timeDrag = false;
				updatebar(e.pageX);
			}
		});
		$(document).mousemove(function(e){
			if(timeDrag){
				updatebar(e.pageX);
			}
		});
		
		//update progress bar control
		var updatebar = function(x){
			var progress = $('.progressBar');
			var maxduration = video.duration; //Video duration
			var position = x - progress.offset().left; //Click Position
			var percentage = 100 * position / progress.width();
			
			
			if(percentage > 100){
				percentage = 100;
			}
			if(percentage < 0){
				percentage = 0;
			}
			
			$('.timeBar').css('width', percentage + '%');
			video.currentTime = maxduration * percentage / 100;
		}
		
		//Volume settings
		//Mute/Unmute control clicked
		$('.muted').click(function(){
			video.muted = !video.muted;
			
			if(video.muted == true){
				$('.muted').css('background-position', '-90px');
			} else{
				$('.muted').css('background-position', '-60px');
			}
			
			return false;
		})
		
		//Volume control clicked
		$('.volumeBar').mousedown(function(e){
			var volumeBar = $('.volumeBar');
			var position = volumeBar.offset().top - e.pageY;
			var bottom = position + volumeBar.height();
			var percentage = 100 * bottom / volumeBar.height();
			$('.volume').css('height', percentage + '%');
			video.volume = percentage / 100;
		})
		
		$('.muted').mousedown(function(){$('.volumeBar').css('display','block');});
		$('.muted').mouseup(function(){$('.volumeBar').css('display','none');});
		
		//fullscreen		
		$('.fullscreen').click(function() {
			  if (video.requestFullscreen) {
			    video.requestFullscreen();
			  } else if (video.mozRequestFullScreen) {
			    video.mozRequestFullScreen(); // Firefox
			  } else if (video.webkitRequestFullScreen) {
			    video.webkitRequestFullScreen(); // Chrome and Safari
			  }
		   
		});
		
		document.addEventListener("webkitfullscreenchange", function () {
				$('.toPlay').css("display", "none");
				video.currentTime = video.currentTime;
		}, false)
		
		document.addEventListener("mozfullscreenchange", function () {
			if ($('#myVideo').attr('controls')){
				$('#myVideo').removeAttr('controls');
			}else{$('#myVideo').attr('controls',true)}
		}, false);
		
		
	});//videoPlayer() end
	
});