<?php if ($eventCategory == 'facebook') {


    if ($eventTag == 'status') {

        // Data [From, Message, UpdatedAt]

        $eventIconStatus = "write";
        $eventTitle = sprintf(__('Shared status', 's-report'));

        ob_start(); ?>
        <p><?php echo $content["Message"] ?></p>

        <?php
        $eventContent = ob_get_clean();


    } elseif ($eventTag == 'link') {

        // Data [From, Link, Title, Message, Description, CreatedAt]

        $eventIconStatus = "link";
        $eventTitle = sprintf(__('Shared link', 's-report'));

        ob_start(); ?>
        <a href="<?php echo $content["Link"] ?>"><?php echo $content["Title"] ?></a>

        <?php
        $eventContent = ob_get_clean();


    } elseif ($eventTag == 'photo') {

        // Data [From, Link, ImageSm, ImageSource, Caption, CreatedAt]

        $eventIconStatus = "add";
        $eventTitle = sprintf(__('Shared link', 's-report'));

        ob_start(); ?>
        <a href="<?php echo $content["Link"] ?>"><?php echo $content["Title"] ?></a>

        <?php
        $eventContent = ob_get_clean();


    }


}