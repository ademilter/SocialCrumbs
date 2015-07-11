<?php

$format = "";
$eventTitle = "";
$eventContent = "";
$eventUrl = "";
$eventTimeStamp = sprintf(__('%s ago', 's-report'), human_time_diff(get_post_time('U'), current_time('timestamp')));
// connect, purchase, link, calendar, like, favorite, bookmark, watch, listen, add, write, checkin
$eventIconStatus = "";
$postCategories = get_the_category();
$eventCategory = '';
if ( !empty( $postCategories[0] ) ) {
    $eventCategory = $postCategories[0]->slug;
}
$postTags = get_the_tags();
$tags = array();
if ( is_array( $postTags ) ) {
    $tags = array_values($postTags);
}
$eventTag = '';
if ( !empty( $tags ) ) {
    $eventTag = $tags[0]->slug;
}
$content = tokenText( get_the_content() );

// Event Recipes
include "event/codepen.php";
include "event/delicious.php";
include "event/dribbble.php";
include "event/foursquare.php";
include "event/github.php";
include "event/instagram.php";
include "event/instapaper.php";
include "event/lastfm.php";
include "event/soundcloud.php";
include "event/twitter.php";
include "event/vimeo.php";
include "event/youtube.php";

?>
<article <?php post_class( 'post-' . $format . ' ' . 'post-' . $eventIconStatus ); ?>>
	<?php
	// Event Template
	eventTemplateSidebar( $format, $eventTitle, $eventContent, $eventUrl, $eventTimeStamp, $eventIconStatus, $eventCategory, $eventTag );
	?>
</article>