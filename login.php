<?php
require_once("./twitteroauth-master/autoload.php");
require_once("./twitteroauth-master/src/TwitterOAuth.php");
use Abraham\TwitterOAuth\TwitterOAuth;

/* OAuth認証 */
$consumer_key = "J7PJAlie5VNncUbJ0OVOjDFEE";
$consumer_secret = "YGdJx0r8yViMng59jGhyWmvWVchkNI9hztz1RqhMj0vlATYm6l";
$access_token = "538296791-XXFa1vxTSXaPsUpHvOcxArUCU0xKcniwDx26g6OT";
$access_token_secret = "L6uLLSayKQxQMhWFp1JD0iCI7LOPVDPFKrI7POVHIREFk";

//タイムラインの情報をゲット
$tw = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_secret);
$ret = $tw->get("statuses/home_timeline", array("count" => 10, "exclude_replies" => true));
print_r($ret);
?>