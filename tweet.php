<?php
require_once("./common/constants.php");
require_once("./twitteroauth-master/autoload.php");
require_once("./twitteroauth-master/src/TwitterOAuth.php");
require_once("./logic/tweet_l.php");
use Abraham\TwitterOAuth\TwitterOAuth;
$logic = new tweet_l();
session_start();
if($_SESSION["user_id"]){
    $tw = new TwitterOAuth(API_KEY, API_SECRET, $_SESSION["access_token"], $_SESSION["access_token_secret"]);
    $ret = $tw->get("users/lookup", array("user_id" => $_SESSION["user_id"]));
    $user = $ret[0];
    $login_info = '<a href="logout.php">'.$_SESSION["screen_name"]."</a>";
    $account_img = '<img src="'.$user->profile_image_url.'">';
    if($_REQUEST["result_tweet"]){
        if($logic->tweet($tw,$_REQUEST["result_tweet"])){
            $result_message = "ツイートしました！";
        }else{
            $result_message = "ツイートに失敗しました……";
        }

    }else{
            $result_message = "トップページに戻ります";
    }
}else{
    $login_info = '<a id="login_link" href="login.php">login</a>';
}
require_once("./view/tweet_v.php");
?>
