
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>twitools</title>
        <script type="text/javascript">
        </script>
        <style type="text/css">
        #header_line{
            width: 100%;
            height:100px;
            background-color: #87CEEB;
            min-width: 1030px;
        }
        .contents{
            width: 1030px;
            margin: 0 auto;
        }
        #header_contents div{
            color:white;
        }
        #title{
            float:left;
            font-size: 70px;
        }
        #login{
            float;right;
            font-size:30px;
            margin-top:30px;
        }
        #right_elements{
            position:relative;
            display:block;
            float:right;
        }
        #right_elements ul{
            display: inline-block;
        }
        #right_elements li{
            display: inline-block;
        }
        .clearfix{
            clear:both;
        }
        a{
            text-decoration: none;
            color:white;
        }
        #login_link:hover{
            color:#F7F7FF;
        }
        #tool_area{
            width:780px;
            float:left;
        }
        #ad_area{
            width: 250px;
            float:left;
        }
        .contentBox{
            width:250px;
            margin:0px 2px;
            float:left;
            border-radius:15px;
            height:230px;
            position:relative;
            border:solid;
            color:white;
        }
        .tools{
            background-color:#87CEEB;
            border-color:#87CEEB;
        }
        .toolImg{
            height:180px;
            width:250px;
            border-radius: 15px 15px 0px 0px;
        }
        .ad{
            background-color:red;
            border-color:red;
        }
        #message{
            width:1030px;
            margin:0 auto;
        }
        .content_link{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            text-indent:-999px;
        }
        </style>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- <link href="./common/common.css" rel="stylesheet" type="text/css"> -->
    </head>
    <body>
        <div id="header_line">
            <div id="header_contents" class="contents">
                <div id="title"><a href="index.php">twitools</a></div>
                <div id="right_elements">
                    <ul>
                        <li id="account_img"></li>
                        <li id="login" class="rightElm"><a id="login_link" href="#">login</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div id="main_content" class="contents">
        <div id="message">twitterで使える気の利くツール集</div>
            <div id="tool_area">
                <div class="tools contentBox">
                    <a href="" class="content_link"></a>
                    <img src="./img/neko.png" alt="テストコンテント" class="toolImg">
                    テストコンテント
                </div>
                <div class="tools contentBox">
                    <a href="" class="content_link"></a>
                    <img src="./img/neko.png" alt="テストコンテント" class="toolImg">
                    テストコンテント
                </div>

                <div class="tools contentBox">
                    <a href="" class="content_link"></a>
                    <img src="./img/neko.png" alt="テストコンテント" class="toolImg">
                    テストコンテント
                </div>
            </div>
            <div id="ad_area">
                <div class="ad contentBox">
                    <a href="" class="content_link"></a>
                    <img src="./img/neko.png" alt="テストコンテント" class="toolImg">
                    テストコンテント
                </div>
            </div>
        </div>
        <div id="footer"></div>
    </body>
</html>
