<?php if ($eventCategory == 'flickr') {


    if ($eventTag == 'add') {

        // Data [Title, Description, FlickrUrl, FlickrUrlShort, SourceUrl, OriginalSourceUrl, UploadedDate, TakenDate, Tags]

        $eventIconStatus = "add";
        $eventTitle = sprintf(__('flickr new photo uploaded', 's-report'));

        ob_start(); ?>
        <img src="<?php echo $content["OriginalSourceUrl"] ?>" alt="<?php echo $content["Title"] ?>"/>
        <figcaption><?php echo $content["Title"] ?></figcaption>

        <?php
        $eventContent = ob_get_clean();


    } elseif ($eventTag == 'favorite') {

        // Data [Title, Description, FlickrUrlShort, SourceUrl, OriginalSourceUrl, OwnerName, UploadedDate, Tags]

        $eventIconStatus = "favorite";
        $eventTitle = sprintf(__('Favorited <strong>%s</strong> photo', 's-report'), $content["OwnerName"]);

        ob_start(); ?>
        <img src="<?php echo $content["OriginalSourceUrl"] ?>" alt="<?php echo $content["Title"] ?>"/>
        <figcaption><?php echo $content["Title"] ?></figcaption>

        <?php
        $eventContent = ob_get_clean();

    }


}