<?php
require_once("./common/constants.php");
require_once("./twitteroauth-master/autoload.php");
require_once("./twitteroauth-master/src/TwitterOAuth.php");
require_once("./logic/follow_chk_l.php");
use Abraham\TwitterOAuth\TwitterOAuth;
$logic = new follow_chk_l();
session_start();
if($_SESSION["user_id"]){
    $tw = new TwitterOAuth(API_KEY, API_SECRET, $_SESSION["access_token"], $_SESSION["access_token_secret"]);
    $ret = $tw->get("users/lookup", array("user_id" => $_SESSION["user_id"]));
    $user = $ret[0];
    $login_info = '<a href="logout.php">'.$_SESSION["screen_name"]."</a>";
    $account_img = '<img src="'.$user->profile_image_url.'">';
    if($_REQUEST["action"] == "submit"){
        if(!$_REQUEST["source"] || !$_REQUEST["target"]){
            $message_flg = 両方の入力フォームを埋めてください;
        }else{
            $result = $logic->follow_chk($tw,htmlspecialchars($_REQUEST["source"]),htmlspecialchars($_REQUEST["target"]));
            if ($tw->getLastHttpCode() == 200){
                if($result["source_to_target"]){
                    if($result["target_to_source"]){
                        $result_message = "@".htmlspecialchars($_REQUEST["source"])."さんと@".htmlspecialchars($_REQUEST["target"])."さんは、フォローしあってます！";
                    }else{
                        $result_message = "@".htmlspecialchars($_REQUEST["source"])."さんが@".htmlspecialchars($_REQUEST["target"])."さんに、片思いフォローしてます！";
                    }
                }else{
                    if($result["target_to_source"]){
                        $result_message = "@".htmlspecialchars($_REQUEST["target"])."さんが@".htmlspecialchars($_REQUEST["source"])."さんに、片思いフォローしてます！";
                    }else{
                        $result_message = "@".htmlspecialchars($_REQUEST["source"])."さんと@".htmlspecialchars($_REQUEST["target"])."さんは、お互いにフォローしてません！";
                    }
                }
            } else {
                $message_flg = "状況を取得できませんでした";
            }

        }
    }else{

    }
}else{
    $login_info = '<a id="login_link" href="login.php">login</a>';
}
require_once("./view/follow_chk_v.php");
?>
