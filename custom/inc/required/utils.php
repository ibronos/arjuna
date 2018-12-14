<?php

function youTubeEmbed($id, $autoplay = false) {
	return "http://www.youtube.com/embed/" . $id . "?rel=0&color=white&modestbranding=1&showinfo=0&autohide=1&theme=light&html5=1" . ($autoplay ? "&autoplay=1" : "");
}

function vimeoEmbed($id, $autoplay = false) {
	return "http://player.vimeo.com/video/" . $id . "?color=ffffff&byline=0&portrait=0&title=0" . ($autoplay ? "&autoplay=1" : "");
}

?>