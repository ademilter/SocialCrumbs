<?php if ($eventCategory == 'etsy') {


    if ($eventTag == 'favorite') {

        // Data [Title, EtsyUrl, ImageUrl, Tags, Price, ShopName, ShopUrl, CreatedAt]

        $eventIconStatus = "favorite";
        $eventTitle = sprintf(__('Faved a product from <strong>%s</strong>\'s shop', 's-report'), $content["ShopName"]);

        ob_start(); ?>
        <img src="<?php echo $content["ImageUrl"] ?>" alt="<?php echo $content["ShopName"] ?>"/>
        <figcaption><?php echo $content["ShopName"] ?></figcaption>

        <?php
        $eventContent = ob_get_clean();


    } elseif ($eventTag == 'purchase') {

        // Data [Title, EtsyUrl, ImageUrl, Tags, Price, ShopName, ShopUrl, CreatedAt]

        $eventIconStatus = "purchase";
        $eventTitle = sprintf(__('Purchase a product from <strong>%s</strong>\'s shop', 's-report'), $content["ShopName"]);

        ob_start(); ?>
        <img src="<?php echo $content["ImageUrl"] ?>" alt="<?php echo $content["ShopName"] ?>"/>
        <figcaption><?php echo $content["ShopName"] ?></figcaption>

        <?php
        $eventContent = ob_get_clean();

    }


}