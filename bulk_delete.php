<?php
require_once("./common/constants.php");
require_once("./twitteroauth-master/autoload.php");
require_once("./twitteroauth-master/src/TwitterOAuth.php");
require_once("./logic/bulk_delete_l.php");
use Abraham\TwitterOAuth\TwitterOAuth;
$logic = new bulk_delete_l();
session_start();
if($_SESSION["user_id"]){
    $tw = new TwitterOAuth(API_KEY, API_SECRET, $_SESSION["access_token"], $_SESSION["access_token_secret"]);
    $ret = $tw->get("users/lookup", array("user_id" => $_SESSION["user_id"]));
    $user = $ret[0];
    $login_info = '<a href="logout.php">'.$_SESSION["screen_name"]."</a>";
    $account_img = '<img src="'.$user->profile_image_url.'">';
    if($_REQUEST["action"] == "submit"){
        if ($logic->bulk_delete($tweets,$tw)){
            $result_message = count($tweets)."件のツイートを削除しました！";
        } else {
            $message_flg = "状況を取得できませんでした";
        }
    }else{
        $tweet_list = $logic->getTweets($tw);
    }
}else{
    $login_info = '<a id="login_link" href="login.php">login</a>';
}
require_once("./view/bulk_delete_v.php");
?>
