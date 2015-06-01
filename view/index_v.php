<!DOCTYPE html>
<html lang="ja">
    <head>
        <link rel="shortcut icon" href="../img/twitter.png">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>twitools</title>
        <meta name="keywords" content="twitter,フォローチェック,一括削除,選択削除,便利,retweet,リツイート,ツール,twitools,ツイツールズ,ツイート,片思いフォロー">
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
            <div id="message">twitterで使える気の利くツール集</div>
                <div class="tools contentBox">
                    <a href="./follow_chk.php" class="content_link"></a>
                    <img src="./img/fallow_chk.jpg" alt="フォローチェック" class="toolImg">
                    <div class="toolName">フォローチェック</div>
                </div>
                <div class="tools contentBox">
                    <a href="./bulk_delete.php" class="content_link"></a>
                    <img src="./img/bulk_delete.jpg" alt="一括削除" class="toolImg">
                    <div class="toolName">一括削除</div>
                </div>
                <div class="tools contentBox">
                    <a href="./retweeted.php" class="content_link"></a>
                    <img src="./img/retweeted.jpg" alt="リツイートされたツイート一覧" class="toolImg">
                    <div class="toolName">リツイートされたツイート一覧</div>
                </div>
                <div class="tools contentBox">
                    <a href="./oneside_to_me.php" class="content_link"></a>
                    <img src="./img/oneside_to_me.jpg" alt="片思いフォローされてる人々" class="toolImg">
                    <div class="toolName">片思いフォローされてる人々</div>
                </div>
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
