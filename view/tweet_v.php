<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="refresh" content="3; URL=./index.php">
        <link rel="shortcut icon" href="../img/twitter.png">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>twitools</title>
        <meta name="keywords" content="twitter,フォローチェック,一括削除,選択削除,便利,retweet,リツイート,ツール,twitools,ツイツールズ,ツイート">
        <script type="text/javascript">
        </script>
        <style type="text/css">

        </style>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="./css/common.css" rel="stylesheet" type="text/css">
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
            <div id="message"></div>
                <?=$result_message?>
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
    </body>
</html>