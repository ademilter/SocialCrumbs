<?php if ($eventCategory == 'twitter') {

    if ($eventTag == 'tweet') {

        // Data [Text, UserName, LinkToTweet, CreatedAt, TweetEmbedCode]

        $eventType = "text";
        $eventIconStatus = "write";
        $eventTitle = $content["UserName"];
        $eventUrl = $content["LinkToTweet"];
        $eventContent = $content["Text"];

    } elseif ($eventTag == 'favorite') {

        // Data [Text, UserName, LinkToTweet, FirstLinkUrl, CreatedAt, TweetEmbedCode]

        $eventType = "text";
        $eventIconStatus = "favorite";
        $eventTitle = '<span>I faved tweet;</span>';
        $eventUrl = $content["LinkToTweet"];
        $eventContent = $content["Text"];

    }

}