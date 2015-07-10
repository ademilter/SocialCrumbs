<?php if ($eventCategory == 'tumblr') {


    if ($eventTag == 'like') {

        // Data [Url, Time, BlogName]

        $eventIconStatus = "like";
        $eventTitle = sprintf(__('Liked <strong>%s</strong>\'s post', 's-report'), $content["BlogName"]);

        ob_start(); ?>
        <a href="<?php echo $content["Url"] ?>"><?php echo $content["BlogName"] ?></a>

        <?php
        $eventContent = ob_get_clean();


    }


}