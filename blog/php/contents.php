<?php
//
//echo 'hello world!!!!'
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/index.css">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="./js/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/index.js"></script>
</head>
<body>
<div class="container header">
    <h1>hello world!</h1>
</div>
<div id="navigator">
    <div class="navigator_bg">
    </div>
    <div class="navigator" align="right">
        <ul  class="">

            <li  >
                <input id="contents" class="btn btn-default" type="button" value="Contents">
            </li>
            <li>
                <input class="btn btn-default" type="button" value="View">
            </li>
            <li>
                <input class="btn btn-default" type="button" value="Other">
            </li>
            <!--<li>-->
            <!--<div  class="form">-->

            <!--<form action="" method="post" class="form-inline" >-->
            <!--<div class="form-group input">-->
            <!--<input class="form-control" type="text" name="search" placeholder="内容搜索">-->
            <!--</div>-->
            <!--<div class="form-group input">-->
            <!--<button type="submit" class="btn btn-default"><span class=""></span>搜索</button>-->
            <!--</div>-->
            <!--</form>-->
            <!--</div>-->
            <!--</li>-->
        </ul>
    </div>
</div>


<div class="body">
    <div class="pull-left">
        <div class=""><p>left</p></div>
        <div class="info">
            <p>about me</p>
        </div>
        <div class="sea" >
            <div class="panel_head"><span>Content-Search</span></div>
            <div  class="form">

                <form action="" method="post" class="form-inline" >
                    <div class="form-group input">
                        <input class="form-control" type="text" name="search" placeholder="something">
                    </div>
                    <div class="form-group input">
                        <button type="submit" class="btn btn-default"><span class=""></span>search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="message">
            <p>message</p>
        </div>
        <div class="other">
            <p>other</p>
        </div>
    </div>

    <div class="sear pull-right">


    </div>
    <div class="pull-right" id="cont">

        <div class="right"><p>right<br>hello world<br>hello world<br>hello world<br>hello world</p></div>
        <div  ></div>
    </div>
</div>
</body>
</html>
