<?php
require_once("./common/constants.php");
require_once("./twitteroauth-master/autoload.php");
require_once("./twitteroauth-master/src/TwitterOAuth.php");
require_once("./logic/oneside_to_me_l.php");
use Abraham\TwitterOAuth\TwitterOAuth;
$logic = new oneside_to_me_l();
session_start();
if($_SESSION["user_id"]){
    $tw = new TwitterOAuth(API_KEY, API_SECRET, $_SESSION["access_token"], $_SESSION["access_token_secret"]);
    $ret = $tw->get("users/lookup", array("user_id" => $_SESSION["user_id"]));
    $user = $ret[0];
    $login_info = '<a href="logout.php">'.$_SESSION["screen_name"]."</a>";
    $account_img = '<img src="'.$user->profile_image_url.'">';
    $cursor = -1;
    $follower_list = array();

    $i = 0;
    do{$i++;
        $tmp = $logic->getFollowers($tw,$cursor);
        $follower_list = array_merge($follower_list,$tmp->users);
        $cursor = $tmp->next_cursor;
    }while($tmp->next_cursor != 0 && $tmp != LIMIT_ERROR);
    if($tmp == LIMIT_ERROR && empty($_SESSION["oneside_to_me"])){
            $message_flg = "twitterAPIの制限に引っかかりました。15分間待ってください";
        }
    if( $i < 15 && $tmp == LIMIT_ERROR){
        $follower_list = $_SESSION["oneside_to_me"];
    }else{
        $_SESSION["oneside_to_me"] = $follower_list;
    }
}else{
    $login_info = '<a id="login_link" href="login.php">login</a>';
}
require_once("./view/oneside_to_me_v.php");
?>
