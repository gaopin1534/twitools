<?php
require_once("./common/constants.php");
require_once("./twitteroauth-master/autoload.php");
require_once("./twitteroauth-master/src/TwitterOAuth.php");
require_once("./logic/retweeted_l.php");
use Abraham\TwitterOAuth\TwitterOAuth;
$logic = new retweeted_l();
session_start();
if($_SESSION["user_id"]){
    $tw = new TwitterOAuth(API_KEY, API_SECRET, $_SESSION["access_token"], $_SESSION["access_token_secret"]);
    $ret = $tw->get("users/lookup", array("user_id" => $_SESSION["user_id"]));
    $user = $ret[0];
    $login_info = '<a href="logout.php">'.$_SESSION["screen_name"]."</a>";
    $account_img = '<img src="'.$user->profile_image_url.'">';
    if($_REQUEST["del_id"]){
               $_SESSION["id_stuck"] = array_merge($_SESSION["id_stuck"],$_REQUEST["del_id"]);
        }
    $tmp = array_unique($_SESSION["id_stuck"]);
    $_SESSION["id_stuck"] = $tmp;

    if($_REQUEST["action"] == "submit"){
        if ($logic->bulkDelete($_SESSION["id_stuck"],$tw)){
            $result_message = count($_SESSION["id_stuck"])."件のツイートを削除しました！";
        } else {
            $message_flg = "状況を取得できませんでした";
        }
    }else{
        $tweet_list = $logic->getTweets($tw,$_REQUEST["max_id"]);
        if($tweet_list == LIMIT_ERROR){
            $message_flg = "twitterAPIの制限に引っかかりました。15分間待ってください";
        }
        $last = end($tweet_list);
        $next_id = $last->id_str;
        if(empty($_REQUEST["page"])){
            $page = 1;
            $page_id = array();
            $_SESSION["page_stuck"] = array();
            $_SESSION["id_stuck"] = array();
        }else{
            $page = $_REQUEST["page"];
        }
        $pre_page = $page - 1;
        $next_page = $page + 1;
        $first = reset($tweet_list);
        $page_id[$page] = $first->id_str;
        $page_id = $page_id + $_SESSION["page_stuck"];
        $_SESSION["page_stuck"] = $page_id;
    }
}else{
    $login_info = '<a id="login_link" href="login.php">login</a>';
}
require_once("./view/retweeted_v.php");
?>
