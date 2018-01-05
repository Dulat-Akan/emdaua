<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <title>videotranslationversion 1</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/webrtc/connect.js"></script>
<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/webrtc/socket.io.js"></script>


<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/webrtc/media.css"></script>
<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/webrtc/media.js"></script>
</head>
<body>

    <div style="width: 100%;"  id="videos-container"></div>

   

<script>
window.enableAdapter = true; // enable adapter.js
// ......................................................
// .......................UI Code........................
// ......................................................

setTimeout(function(){

    // disableInputButtons();
    connection.join(1);

},5000);
  

// ......................................................
// ..................RTCMultiConnection Code.............
// ......................................................
var connection = new RTCMultiConnection();
// by default, socket.io server is assumed to be deployed on your own URL
connection.socketURL = 'https://ls.kz:9001/';

// comment-out below line if you do not have your own socket.io server
// connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';
connection.socketMessageEvent = 'video-conference-demo';
connection.session = {
    audio: true,
    video: true,
    oneway: true
};
connection.sdpConstraints.mandatory = {
    OfferToReceiveAudio: true,
    OfferToReceiveVideo: true
};
connection.videosContainer = document.getElementById('videos-container');

connection.onstream = function(event) {
    event.mediaElement.removeAttribute('src');
    event.mediaElement.removeAttribute('srcObject');
    var video = document.createElement('video');
    video.controls = true;
    if(event.type === 'local') {
        video.muted = true;
    }
    video.srcObject = event.stream;
    var width = parseInt(connection.videosContainer.clientWidth);
    var mediaElement = getHTMLMediaElement(video, {
        title: event.userid,
        buttons: ['full-screen'],
        width: width,
        showOnMouseEnter: false
    });
    connection.videosContainer.appendChild(mediaElement);
    setTimeout(function() {
        mediaElement.media.play();
    }, 5000);
    mediaElement.id = event.streamid;
};
connection.onstreamended = function(event) {
    // var mediaElement = document.getElementById(event.streamid);
    // if (mediaElement) {
    //     mediaElement.parentNode.removeChild(mediaElement);
    // }

    window.location.reload();
};

connection.onMediaError = function(error) {
    //alert( 'onMediaError соединение разорвано:\n' + JSON.stringify(error) );
    window.location.reload();
};



</script>

 
  <script src="/dist/common.js"></script>
</body>
</html>