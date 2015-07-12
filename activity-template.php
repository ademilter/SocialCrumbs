<?php

function eventTemplateSidebar($eventType, $eventTitle, $eventContent, $eventUrl, $eventTimeStamp, $eventIconStatus, $eventCategory, $eventTag)
{
    echo '' ?>

    <article <?php post_class('post-' . $eventType . ' ' . 'post-' . $eventIconStatus); ?>>


        <div class="post-content">

            <?php if ($eventType == "photo") { ?>
                <img class="post-content_photo"
                     src="<?php echo $eventContent ?>"
                     alt="<?php echo $eventTitle ?>"
                     draggable="false"/>
            <?php } ?>

            <?php if (($eventType == "text" && $eventIconStatus == "favorite") || $eventType == "link") { ?>
                <h3 class="post-content_title">
                    <?php echo $eventTitle; ?>
                </h3>
            <?php } ?>

            <?php if ($eventType == "text") { ?>
                <p class="post-content_summary">
                    <?php echo $eventContent; ?>
                </p>
            <?php } ?>

        </div>


        <footer class="post-footer">

            <a class="post-time" href="<?php echo $eventUrl; ?>" target="_blank">
                <time><?php echo $eventTimeStamp; ?></time>
            </a>

            <div class="post-icons">
                <a class="post_icon post_icon--action" href="">
                    <svg class="icon icon--solid">
                        <use xlink:href="#icon-<?php echo $eventIconStatus; ?>"></use>
                    </svg>
                </a>
                <a class="post_icon post_icon--source" href="">
                    <svg class="icon">
                        <use xlink:href="#icon-<?php echo $eventCategory; ?>"></use>
                    </svg>
                </a>
            </div>

        </footer>


    </article>

    <?php ;
}