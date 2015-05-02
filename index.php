<?
require_once("./common/constants.php");
require_once("./twitteroauth-master/autoload.php");
require_once("./twitteroauth-master/src/TwitterOAuth.php");
use Abraham\TwitterOAuth\TwitterOAuth;
session_start();
if($_SESSION["user_id"]){
    //タイムラインの情報をゲットだ
    $tw = new TwitterOAuth(API_KEY, API_SECRET, $_SESSION["access_token"], $_SESSION["access_token_secret"]);
    $ret = $tw->get("users/lookup", array("user_id" => $_SESSION["user_id"]));
    // = json_decode(,true);
    $user = $ret[0];
    $login_info = '<a href="logout.php">'.$_SESSION["screen_name"]."</a>";
    $account_img = '<img src="'.$user->profile_image_url.'">';
}else{
    $login_info = '<a id="login_link" href="login.php">login</a>';
}
require_once("./view/index_v.php");
?>
