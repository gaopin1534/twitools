<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="../img/twitter.png">
        <title>twitools</title>
        <meta name="keywords" content="twitter,フォローチェック,一括削除,選択削除,便利,retweet,リツイート,ツール,twitools,ツイツールズ,ツイート">
        <style type="text/css">

        </style>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <script src="./js/jquery-1.11.2.min.js"></script>
        <script src="./js/common.js"></script>
        <link href="./css/common.css" rel="stylesheet" type="text/css">
        <link href="./css/oneside_to_me.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
            var if_first = <?=($previous_cursor)?"1":"0"?>;
            var if_last = <?=(count($follower_list) == 50)?"1":"0"?>;
            var if_login = <?=($_SESSION["user_id"])?"1":"0"?>;
            $(document).ready(function(){
                if(if_login == 1){
                    $("#submit_button").click(function(){
                        $("#form").attr("action",$(this).attr("data-action"));
                        $("#form").submit();
                    });
                }else{
                    $("#submit_button").click(function(){
                        $("#login_modal").show();
                    });
                    $("#login_modal").click(function(){
                        $("#login_modal").hide();
                    });
                    $("#login_box").click(function(e){
                        e.stopPropagation();
                    });
                }
                if(if_first == 1){
                    $(".previousButton").click(function(){
                            $("#form").attr("action",$(this).attr("data-action"));
                            $("#form").submit();
                    });
                }else{
                    $(".previousButton").addClass("inactive");
                    $(".previousButton").click(function(){
                        return false;
                    })
                }
                if(if_last == 1){
                    $(".nextButton").click(function(){
                            $("#form").attr("action",$(this).attr("data-action"));
                            $("#form").submit();
                    });
                }else{
                    $(".nextButton").addClass("inactive");
                    $(".nextButton").click(function(){
                        return false;
                    })
                }

            });
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-63392274-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body>
        <div id="header_line">
            <div id="header_contents" class="contents">
                <div id="title"><a href="index.php">twitools</a></div>
                <div id="right_elements">
                    <ul>
                        <li id="account_img"><?=$account_img?></li>
                        <li id="login" class="rightElm"><?=$login_info?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div id="main_content" class="contents">
            <div id="tool_area">
            <div id="message">片思いフォローされてる人々</div>
                <form action="oneside_to_me.php" id="form" method="post" accept-charset="utf-8">
                    <input type="hidden" name="pre_max" value="<?=$_REQUEST["max_id"]?>">
                    <div id="forms">
                        <?php if($result_message){?>
                        <div id="result_box">
                            <div id="result_message">
                            <?=$result_message?>
                            </div>
                            結果をtweetしよう！<br>
                            <textarea name="result_tweet" id="result_tweet" class="resultTweet"><?=$result_message?> / twitools http://twitools.com/oneside_to_me.php
                            </textarea>
                            <a href="#" class="button" id="tweet_button" data-action="tweet.php?action=tweet">ツイート！</a>
                        </div>
                        <?php }?>
                        <?php if($follower_list&&empty($message_flg)){?>
                        <?php foreach ($follower_list as $value) {
                        if(!$value->following){?>
                        <div class="userBox">
                            <div class="tweetChk">
                            </div>
                            <div class="userImgBox">
                                <img class="userImg" src="<?=$value->profile_image_url?>">
                            </div>
                            <div class="userContent">
                                <div class="userName">
                                <a target=”_blank” href="https://twitter.com/<?=$value->screen_name?>"><?=$value->name?></a>
                                </div>
                                <div class="screenName">
                                    @<?=$value->screen_name?>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        } ?>
                        <?php }else if(!$_SESSION["user_id"]){ ?>
                            <div class="err">ログインしてください！</div>
                        <?php }?>
                        <?php if($message_flg){?><div class="err"><?=$message_flg?></div><?php } ?>
                    </div>
                </form>
            </div>
            <div id="ad_area">
                <div class="adbox">
                    <div id="outline">
                        twitterをより便利に！<br>
                        twitterでやりたい色々なことを実現できるツール集です。
                    </div>
                </div>
                <div class="adbox">
                    <?=AD_1?>
                </div>

            </div>
        </div>
        <div id="footer_line">
            <div class="contents">
                <div id="copyright">
                    &copy; 2015 gaopin1534
                </div>
            </div>
        </div>
        <div id="login_modal">
            <div id="login_box">
                <div id="login_message">
                    機能を使うには、ログインをしてください！
                    <br>
                    <br>
                    <a href="login.php" class="button" id="login_button">login</a>
                </div>
            </div>
        </div>
    </body>
</html>
