<?php if ($eventCategory == 'calendar') {


    if ($eventTag == 'new') {

        // Data [Title, Description, Where, Starts, Ends, EventUrl, CreatedAt]

        $eventIconStatus = "calendar";
        $eventTitle = sprintf(__('Added event', 's-report'));

        ob_start(); ?>
        <a href="<?php echo $content["EventUrl"] ?>"><?php echo $content["Title"] ?></a>
        <p><?php echo $content["Starts"] . " - " . $content["Ends"] ?></p>
        <p><?php echo $content["Where"] ?></p>

        <?php
        $eventContent = ob_get_clean();

    }


}