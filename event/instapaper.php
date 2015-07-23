<?php if ($eventCategory == 'instapaper') {

    if ($eventTag == 'like') {

        // Data [Title, Description, URL, CreatedAt]

        $eventType = "link";
        $eventIconStatus = "like";
        $eventTitle = '<span>I liked;</span>' . $content["Title"];
        $eventUrl = $content["URL"];
        $eventContent = $content["Description"];

    } elseif ($eventTag == 'save') {

        // Data [Title, Description, URL, CreatedAt]

        $eventType = "link";
        $eventIconStatus = "bookmark";
        $eventTitle = '<span>I bookmark it;</span>' . $content["Title"];
        $eventUrl = $content["URL"];
        $eventContent = $content["Description"];

    } elseif ($eventTag == 'highlight') {

        // Data [Text, Title, URL, CreatedAt]

        $eventType = "text";
        $eventIconStatus = "bookmark";
        $eventTitle = '<span>I highlight it;</span>';
        $eventUrl = $content["URL"];
        $eventContent = $content["Text"];

    }

}