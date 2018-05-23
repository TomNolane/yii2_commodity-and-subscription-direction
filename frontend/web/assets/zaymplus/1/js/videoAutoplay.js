
(function(){
$(document).ready(function(){
  $('.anticlicker').remove();

var iframe     = $('iframe').filter('[src *="youtube"]').first(),
    srcIframe  = iframe.attr('src'),
    reg        = /embed\/(.*?)\?/,
    videoId    = srcIframe.match(reg)[1],
    iW         = iframe.width()+"",
    iH         = iframe.height()+"",
    player;
// console.log(iframe);

if   ( iframe.is(":only-child" ) ) { iframe.replaceWith("<div id='ytplayer'></div>") }
else { iframe.replaceWith("<div style='position:relative;'><div id='ytplayer'></div></div>")}  


 function onYouTubeIframeAPIReady() {
        player = new YT.Player('ytplayer', {
          width: iW,
          height: iH,
          videoId: videoId,
          playerVars: {
          controls: 1,
          disablekb: 0,
          loop: 1,
          modestbranding: 1,
          rel: 0,
          fs: 0,
          showinfo: 0,
          autoplay: 1,
          playlist: videoId,
          mute:1,
         },
            events: {
              'onStateChange': function(event) {
                  if (event.data == YT.PlayerState.PLAYING) {
                  pauseAudio();
              }
            }
          }
        });
      }

  function pauseAudio() {
     $('#ytplayer').parent().css('position', 'relative');
      $('#ytplayer').parent().prepend('<div class="anticlicker" style="position: absolute; bottom:60px ; top: 0; left: 0; right: 0;z-index: 5;"></div>');
  }
  setTimeout(onYouTubeIframeAPIReady, 200);
     
     })

})();
