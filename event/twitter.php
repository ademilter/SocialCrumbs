<?php if ($eventCategory == 'twitter') {

    $eventType = "text";


    if ($eventTag == 'tweet') {

        // Data [Text, UserName, LinkToTweet, CreatedAt, TweetEmbedCode]

        $eventIconStatus = "write";
        $eventTitle = sprintf(__('Tweeted', 's-report'));
        $eventUrl = $content["LinkToTweet"];
        $eventContent = $content["Text"];

    } elseif ($eventTag == 'favorite') {

        // Data [Text, UserName, LinkToTweet, FirstLinkUrl, CreatedAt, TweetEmbedCode]

        $eventIconStatus = "favorite";
        $eventTitle = sprintf(__('Faved <strong>%s</strong>\'s tweet', 's-report'), $content["UserName"]);
        $eventUrl = $content["LinkToTweet"];
        $eventContent = $content["Text"];

    }


}