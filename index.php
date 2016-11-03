<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>PHP 测试sdsd</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
<!--    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!--    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<!--    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.js"></script>-->
    <script src="js/bootstrap.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

    </style>
</head>
<body>

<div class="container">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li ><a href="#" class="sf-with-li">首页</a></li>
                    <li class="dropdown" role="presentation">
                        <a href="javascript:;" class="sf-with-ul">产品</a>
                        <ul class="nav nav-pills nav-stacked dropdown-menu" role="menu" style="display: none;">
                            <li>
                                <a href="./zm.html">产1</a>
                            </li>
                            <li>
                                <a href="./tq.html">产2</a>
                            </li>
                            <li>
                                <a href="./s.html">产3</a>
                            </li>
                            <li>
                                <a href="./xt.html">产4</a>
                            </li>
                            <li>
                                <a href="./dxzm.html">产5</a>
                            </li>
                            <li>
                                <a href="./launcher.html">产6</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="sf-with-ul">产品2</a>
                        <ul class="nav nav-pills nav-stacked dropdown-menu" style="display: none;">
                            <li>
                                <a href="./zm.html">哈哈</a>
                            </li>
                            <li>
                                <a href="./tq.html">嘿嘿</a>
                            </li>
                            <li>
                                <a href="./s.html">喔喔</a>
                            </li>
                            <li>
                                <a href="./xt.html">塔塔</a>
                            </li>
                            <li>
                                <a href="./dxzm.html">卡卡</a>
                            </li>
                            <li>
                                <a href="./launcher.html">噜噜噜</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#about" class="sf-with-li">关于</a></li>
                    <li><a href="#contact" class="sf-with-li">联系我们</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>


</div>
<div class="container" style="padding-top: 50px;">
    <h1>

        <?php
        $servername = "115.28.17.174";
        $username = "root";
        $password = "liyuxin";

        // 创建连接
        $conn = new mysqli($servername, $username, $password);

        // 检测连接
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        }
        echo "连接成功";
        ?>
    </h1>
</div>

</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->



<script>
    $(function () {
        $(".sf-with-li").mouseover(function (){
            $(".dropdown-menu").css("display", "none");
        });

        $(".sf-with-ul").mouseover(function () {
            $(".dropdown-menu").css("display", "none");

            $(this).parent().find(".dropdown-menu").css("display", "block");
        });



        $(".dropdown-menu").mouseleave(function () {
            $(".dropdown-menu").css("display", "none");
        });


    });


</script>


</html>
