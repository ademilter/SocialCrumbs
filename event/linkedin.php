<?php if ($eventCategory == 'linkedin') {


    if ($eventTag == 'connect') {

        // Data [FirstName, LastName, Headline, Industry, LocationCountryCode, LocationName, ProfileURL, ProfileImageURL, DateAdded]

        $eventIconStatus = "connect";
        $eventTitle = sprintf(__('profesyonel iş ağına yeni birini ekledi', 's-report'));

        ob_start(); ?>
        <img src="<?php echo $content["ProfileImageURL"] ?>" alt=""/>
        <figcaption><?php echo $content["Headline"] ?></figcaption>
        <p><?php echo $content["FirstName"] . $content["LastName"] ?></p>

        <?php
        $eventContent = ob_get_clean();


    }


}