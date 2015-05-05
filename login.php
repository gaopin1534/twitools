<?php
require_once("common/constants.php");
require_once("./twitteroauth-master/autoload.php");
require_once("./twitteroauth-master/src/TwitterOAuth.php");
use Abraham\TwitterOAuth\TwitterOAuth;
session_start();
if($_SESSION['oauth_token']){
    $tw = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
    $access_token = $tw->oauth("oauth/access_token", array("oauth_verifier" => $_REQUEST['oauth_verifier']));
    $_SESSION['access_token'] = $access_token["oauth_token"];
    $_SESSION['access_token_secret'] = $access_token["oauth_token_secret"];
    $_SESSION['user_id'] = $access_token["user_id"];
    $_SESSION['screen_name'] = $access_token["screen_name"];
    header("location:".$_SESSION["call_back_url"]);
}else{
    $_SESSION["call_back_url"] = $_SERVER["HTTP_REFERER"];
    $call_back = "http://twitools.com/login.php";
    $tw = new TwitterOAuth(API_KEY, API_SECRET);
    $request_token = $tw->oauth('oauth/request_token',array('oauth_callback' => $call_back));
    $url = $tw->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
    $_SESSION['oauth_token'] = $request_token['oauth_token'];
    $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
    header('Location: ' . $url);

}
include_once("./view/login_v.php");
?>