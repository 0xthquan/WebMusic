// ONLY WORKS ON BROWSERS THAT SUPPORT MP3 //
$(function () {
    var play = $('#play'),
		pause = $('#pause'),
    	stop = $('#stop'),
		mute = $('#mute'),
		muted = $('#muted'),
		song = new Audio(''),
		duration = song.duration;
		var src_song = document.getElementById('source').value;

	song.type= 'audio/mpeg';
	song.src= src_song;

    stop.on('click', function(e) {
    	e.preventDefault();
		song.pause();
            $('.active').removeClass('active');
            var curtime = song.currentTime / song.duration * 100;
            $('.progress-radial').removeClass('progress-'+parseInt(curtime));
    	    song.currentTime = 0;            
            $(this).addClass('hide');
            stop.removeClass('hide').addClass('active');  
    })

	play.on('click', function(e) {
		e.preventDefault();
        
    		song.play();
            $('.active').removeClass('active');
    		$(this).addClass('active');
	});

	pause.on('click', function(e) {
		e.preventDefault();
		song.pause();
		$('.active').removeClass('active');
		$(this).addClass('active');
	});

	mute.on('click', function(e) {
		e.preventDefault();
		song.volume = 0;
		$(this).addClass('hide');
		$('#muted').removeClass('hide');
	});

	muted.on('click', function(e) {
		e.preventDefault();
		song.volume = 1;
		$(this).addClass('hide');
		$('#mute').removeClass('hide');
	});

	song.addEventListener('timeupdate', function (){
		var curtime = song.currentTime / song.duration * 100;
		$('.progress-radial').addClass('progress-'+parseInt(curtime));
		$('.progress-radial').removeClass('progress-'+parseInt(curtime-1));
	});	
});