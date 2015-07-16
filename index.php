<?php
require(dirname(__FILE__) . '/includes/bootstrap.php');

$userID = buckys_is_logged_in();

/*
$popularImages = BuckysPost::getPostsFromStats('image');
$popularPosts = BuckysPost::getPostsFromStats('text');
$popularVideos = BuckysPost::getPostsFromStats('video');
$popularPages = BuckysPage::getPopularPagesForHomepage();
$recentTopics = BuckysForumTopic::getTopics(1, 'publish', null, 'lastReplyDate DESC, t.createdDate DESC', 5);
$recentTradeItems = BuckysTradeItem::getRecentItems(3);
*/

buckys_enqueue_stylesheet('index.css');

$TNB_GLOBALS['content'] = "home";

$TNB_GLOBALS['title'] = TNB_SITE_NAME . " - Free Educational Video Tutorials on Computer Programming, Web Design, Game Development and More!";

require(DIR_FS_TEMPLATE . $TNB_GLOBALS['template'] . "/" . $TNB_GLOBALS['layout'] . ".php");