<section class="working-video">

    <div class="working-video__outer">
        <div class="working-video__inner">
            <div class="working-video__logo-container fade animate">
                <img class="working-video__logo" src="/wp-content/uploads/2024/10/dotpack_logo.svg" alt="">
            </div>
            <div class="working-video__title fade animate">
                <p class="working-video__title-text display-79"><?php the_field('working_video_title') ?></p>
            </div>

            <div class="working-video__btn">
                <img src="/wp-content/uploads/2024/10/fullscreen.svg" alt="full-screen-icon"
                    class="working-video__btn-icon">
                <span class="working-video__btn-text">Pełny ekran</span>
            </div>
            <div class="working-video__btn working-video__btn--sound muted">
                <img src="/wp-content/uploads/2024/11/mute-white-icon.png" alt="mute-icon"
                    class="working-video__btn-icon working-video__btn-icon--mute">
                <img src="/wp-content/uploads/2024/11/unmute-white-icon.png" alt="unmute-icon"
                    class="working-video__btn-icon working-video__btn-icon--unmute">
            </div>
            <!-- <div class="working-video__btn working-video__btn--unmute working-video__btn--unmute-hidden">
                <img src="/wp-content/uploads/2024/11/unmute-white-icon.png" alt="unmute-icon"
                    class="working-video__btn-icon working-video__btn-icon--unmute">
            </div> -->

            <?php
                $video_url = get_field('working_video_file');
                if ($video_url): ?>
            <div class="working-video__video-box">
                <?php   
                        $intro_video_poster = get_field('working_video_img');
                        $intro_video_src = get_field('working_video_file');
                        ?>
                <video class="working-video__video" muted="true" playsinline loop="true"
                    poster="<?php echo $intro_video_poster; ?>">
                    <source src="" data-src="<?php echo $intro_video_src; ?>" type="video/mp4">
                    Twoja przeglądarka nie wspiera odtwarzania plików wideo.
                </video>
            </div>
            <?php endif; ?>



            <?php
                $video_url = get_field('working_video_file');
                if ($video_url): ?>
            <div class="working-video__mobile-video-box">
                <?php   
                        $intro_video_poster = get_field('working_video_mobile_img');
                        $intro_video_src = get_field('working_video_file');
                        ?>
                <video class="working-video__mobile-video" muted playsinline loop="true"
                    poster="<?php echo $intro_video_poster; ?>">
                    <source src="<?php echo $intro_video_src; ?>" data-src="<?php echo $intro_video_src; ?>"
                        type="video/mp4">
                    Twoja przeglądarka nie wspiera odtwarzania plików wideo.
                </video>
            </div>
            <?php endif; ?>
        </div>
    </div>

</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const fullscreenButton = document.querySelector('.working-video__btn');
    const videoElement = document.querySelector('.working-video__video');

    if (fullscreenButton && videoElement) {
        fullscreenButton.addEventListener('click', () => {

            if (videoElement.requestFullscreen) {
                videoElement.requestFullscreen();
            } else if (videoElement.mozRequestFullScreen) {
                videoElement.mozRequestFullScreen();
            } else if (videoElement.webkitRequestFullscreen) {
                videoElement.webkitRequestFullscreen();
            } else if (videoElement.msRequestFullscreen) {
                videoElement.msRequestFullscreen();
            }

        });

        // toggling the controls
        function toggleVideoControls() {
            if (videoElement.hasAttribute('controls')) {
                videoElement.removeAttribute('controls');
            } else {
                videoElement.setAttribute('controls', 'true');
            }
        }

        $('video').bind('webkitfullscreenchange mozfullscreenchange fullscreenchange', function(e) {
            var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
            var event = state ? 'FullscreenOn' : 'FullscreenOff';

            // toggling hte controls on the Video element, fulscreen = visible controls
            toggleVideoControls();
        });


    }
});












document.addEventListener('DOMContentLoaded', () => {
    // $(document).ready(function() {
    const $video = $('.working-video video');
    const $muteBtn = $('.working-video__btn--sound');
    let isPlaying = false;

    // Load video src when video is 50% visible
    // function loadVideoSrc() {
    //     const videoElement = $video[0];
    //     const dataSrc = $video.attr('data-src');
    //     if (dataSrc && !videoElement.src) {
    //         videoElement.src = dataSrc;
    //     }
    // }

    // Function to toggle mute state
    function toggleMute() {
        const videoElement = $video[0];
        videoElement.muted = !videoElement.muted;
        // $muteBtn.text(videoElement.muted ? 'Unmute' : 'Mute');

        $muteBtn.toggleClass('muted');
    }

    // Event listener for mute/unmute button
    $muteBtn.on('click', toggleMute);


    const loadVideoSrc = () => {
        $(function() {
            $(".working-video video source").each(function() {
                var sourceFile = $(this).attr("data-src");
                $(this).attr("src", sourceFile);
                var myVideo = this.parentElement;
                myVideo.load();
                // myVideo.play();


                // Detect when the video is 50% in the viewport
                $(window).on('scroll', function() {
                    const videoElement = $video[0];
                    const videoTop = $video.offset().top;
                    const videoHeight = $video.height();
                    const windowTop = $(window).scrollTop();
                    const windowHeight = $(window).height();

                    // Check if 50% of the video is in view
                    if (windowTop + windowHeight > videoTop +
                        videoHeight / 2 &&
                        videoTop + videoHeight / 2 > windowTop &&
                        !isPlaying) {
                        // loadVideoSrc(); // Load video source if not already loaded
                        videoElement.play(); // Start video
                        isPlaying =
                            true; // Prevents video from starting multiple times
                        myVideo.play();
                    }

                });



            });
        });
    };


    loadVideoSrc();


});

// })
</script>