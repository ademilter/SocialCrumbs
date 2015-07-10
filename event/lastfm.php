<?php if ($eventCategory == 'lastfm') {


    if ($eventTag == 'scrobbled') {

        // Data [Artist, TrackName, AlbumName, TrackUrl, AlbumImageUrl, PlayedDate]

        $eventIconStatus = "listen";
        $eventTitle = sprintf(__('Listen a new music', 's-report'));

        ob_start(); ?>
        <img src="<?php echo $content["AlbumImageUrl"] ?>" alt=""/>
        <figcaption><?php echo $content["Artist"] . $content["TrackName"] ?></figcaption>

        <?php
        $eventContent = ob_get_clean();


    }


}