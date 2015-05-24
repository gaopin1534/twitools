<!DOCTYPE html>
<html lang="ja">
    <head>
        <link rel="shortcut icon" href="../img/twitter.png">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>twitools</title>
        <script type="text/javascript">
        </script>
        <style type="text/css">

        </style>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="./css/common.css" rel="stylesheet" type="text/css">
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
