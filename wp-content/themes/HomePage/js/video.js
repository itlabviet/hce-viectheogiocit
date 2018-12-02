// Problems //  not moving mouse, then video controls and mouse cursor will not disappear.
// Video controls and mouse will disappear only when moving mouse first.
// FireFox and IE: When clicked to play the video and
// FireFox: If on fullscreen and pressing 'Esc' on keyboard, progressbar's default style is not set

// All browsers: if both are playing and showing controls, then one of them may have two controls at the same time. But it will fade
// the extra controls over time.


var videoClass = $('.my-video');

// This function fixes current time reset if inside .my-video on function
$(document).ready( function () {
	videoClass.on('loadedmetadata', function() {
		var video = $(this);
		var controls = video.parent().find('.control');
		// Add current time to elements
		video.parent().find('.current').text(timeFormat(0));
		video.parent().find('.duration').text(timeFormat(video[0].duration));
		// Set default volume level
		updateVolume(0, 0.7, video, controls);
		// on FirstBtn click activates this video
		video.parent().find('.FirstBtn').click( function () {
			video.trigger( "click" );
		});
	});
});

videoClass.click(function () {

	var video = $(this);
	var videoContainer = video.parent();
	var controls = videoContainer.find('.control');

	clickedPressed();

	videoContainer.find('.FirstBtn').hide();
	setTimeout(startBuffer(video), 150);
	playpause(video);

	// Makes play button work
	controls.find('.btnPlay').click( function () {
		playpause(video);
	});

	controls.stop().fadeIn();

	// If mouse is idle then fade out controls, but not when on controls element
	function clickedPressed() {
		var timeout = null;
		videoContainer.on('mousemove', function() {
		    if (timeout !== null) {
				controls.fadeIn();
				video.css({'cursor' : ''});
				clearTimeout(timeout);
			}
		    timeout = setTimeout(function() {
		        if ( !controls.is(':hover') )
		        controls.fadeOut();
		        video.css({'cursor' : 'none'});
		    }, 2000);
		});
	};

	video.on('timeupdate', function() {
		var currentPos = video[0].currentTime;
		var maxduration = video[0].duration;
		var perc = 100 * currentPos / maxduration;
		controls.find('.timeBar').css('width',perc+'%');
		controls.find('.current').text(timeFormat(currentPos));
	});

	// Sound button clicked
	controls.find('.sound').click(function() {
		video[0].muted = !video[0].muted;
		$(this).toggleClass('muted');
		if(video[0].muted) {
			controls.find('.volumeBar').css('width',0);
		}
		else{
			controls.find('.volumeBar').css('width', video[0].volume*100+'%');
		}
	});

	// VIDEO EVENTS
	// Video canplay event
	video.on('canplay', function() {
		controls.find('.loading').fadeOut(100);
	});

	// Video canplaythrough event
	// Solve Chrome cache issue
	var completeloaded = false;
	video.on('canplaythrough', function() {
		completeloaded = true;
	});

	// Video ended event
	video.on('ended', function() {
		controls.find('.btnPlay').removeClass('paused');
		// video[0].stop(); // Error in JS if video ends
	});

	// Video seeking event
	video.on('seeking', function() {
		// If video fully loaded, ignore loading screen
		if(!completeloaded) { 
			controls.find('.loading').fadeIn(200);
		}	
	});

	// Video seeked event
	video.on('seeked', function() { });

	// Video waiting for more data event
	video.on('waiting', function() {
		controls.find('.loading').fadeIn(200);
	});

	// VIDEO PROGRESS BAR
	// When video timebar clicked
	var timeDrag = false;	/* check for drag event */
	controls.find('.progress').on('mousedown', function(e) {
		timeDrag = true;
		updatebar(e.pageX);
	});

	$(document).on('mouseup', function(e) {
		if(timeDrag) {
			timeDrag = false;
			updatebar(e.pageX);
		}
	});

	$(document).on('mousemove', function(e) {
		if(timeDrag) {
			updatebar(e.pageX);
		}
	});

	var updatebar = function(x) {
		var progress = controls.find('.progress');
		
		// Calculate drag position and update video currentTime as well as progress bar
		var maxduration = video[0].duration;
		var position = x - progress.offset().left;
		var percentage = 100 * position / progress.width();
		if(percentage > 100) {
			percentage = 100;
		}
		if(percentage < 0) {
			percentage = 0;
		}
		controls.find('.timeBar').css('width',percentage+'%');	
		video[0].currentTime = maxduration * percentage / 100;
	};

	// VOLUME BAR
	// Volume bar events
	var volumeDrag = false;
	controls.find('.volume').on('mousedown', function(e) {
		volumeDrag = true;
		video[0].muted = false;
		controls.find('.sound').removeClass('muted');
		updateVolume(e.pageX);
	});
	$(document).on('mouseup', function(e) {
		if(volumeDrag) {
			volumeDrag = false;
			updateVolume(e.pageX);
		}
	});
	$(document).on('mousemove', function(e) {
		if(volumeDrag) {
			updateVolume(e.pageX);
		}
	});

	// Fullscreen button clicked
	controls.find('.btnFS').on('click', function() {

		// Events if fullscreen state changes
		// document.addEventListener("fullscreenchange", function () {
		// }, false);

		// document.addEventListener("mozfullscreenchange", function () {
		// }, false);

		// document.addEventListener("webkitfullscreenchange", function () {
		// }, false);

		// document.addEventListener("msfullscreenchange", function () {
		// }, false);

		if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {
			if($.isFunction(video[0].requestFullscreen)) {
				video[0].requestFullscreen();			}	
			else if($.isFunction(video[0].webkitRequestFullscreen)) {
				video[0].webkitRequestFullscreen();			}	
			else if ($.isFunction(videoContainer[0].mozRequestFullScreen)) {
				videoContainer[0].mozRequestFullScreen();			}
			else if ($.isFunction(videoContainer[0].msRequestFullscreen)) {
				videoContainer[0].msRequestFullscreen();			}
			else {
				alert('Your browser doesn\'t support fullscreen');
			}
		} else {
			if (document.exitFullscreen) {
				document.exitFullscreen();
			} else if (document.msExitFullscreen) {
				document.msExitFullscreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.webkitExitFullscreen) {
				document.webkitExitFullscreen();
			}
		}

	});

});

// CONTROLS EVENTS
// Video screen and play button clicked

var playpause = function(video) {
	if( video[0].paused || video[0].ended ) {
		video.parent().find('.btnPlay').addClass('paused');
		video.parent().find('.btnPlay').find('.icon-play').addClass('icon-pause').removeClass('icon-play');
		video[0].play();
	}
	else {
		video.parent().find('.btnPlay').removeClass('paused');
		video.parent().find('.btnPlay').find('.icon-pause').removeClass('icon-pause').addClass('icon-play');
		video[0].pause();
	}
};

// Display video buffering bar
var startBuffer = function(video) {
	var currentBuffer = video[0].buffered.end(0);
	var maxduration = video[0].duration;
	var perc = 100 * currentBuffer / maxduration;
	video.parent().find('.bufferBar').css('width',perc+'%');
		
	if(currentBuffer < maxduration) {
		setTimeout(startBuffer, 500);
	}
};

// Update volume bar function 
// Currently not showing volume bar. But can be added as a extra feature.
// ERRORS: property find is undefined
var updateVolume = function(x, vol, video, controls) {

	var volume = controls.find('.volume');

	var percentage;
	// If only volume have specificed
	// Then direct update volume
	if(vol) {
		percentage = vol * 100;
	}
	else {
		var position = x - volume.offset().left;
		percentage = 100 * position / volume.width();
	}
	
	if(percentage > 100) {
		percentage = 100;
	}
	if(percentage < 0) {
		percentage = 0;
	}
	
	// Update volume bar and video volume
	controls.find('.volumeBar').css('width',percentage+'%');	
	video[0].volume = percentage / 100;
	
	// Change sound icon based on volume
	if(video[0].volume == 0){
		controls.find('.sound').removeClass('sound2').addClass('muted');
	}
	else if(video[0].volume > 0.5){
		controls.find('.sound').removeClass('muted').addClass('sound2');
	}
	else{
		controls.find('.sound').removeClass('muted').removeClass('sound2');
	}
	
};

// Time format converter - 00:00
var timeFormat = function(seconds){
	var m = Math.floor(seconds/60)<10 ? "0"+Math.floor(seconds/60) : Math.floor(seconds/60);
	var s = Math.floor(seconds-(m*60))<10 ? "0"+Math.floor(seconds-(m*60)) : Math.floor(seconds-(m*60));
	return m+":"+s;
};