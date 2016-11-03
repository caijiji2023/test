<?php
/**
 * Created by PhpStorm.
 * User: lyx
 * Date: 2016/11/3
 * Time: 下午2:44
 */

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>管理新闻</title>
    <meta http-equiv="Content-Type" content="text/html;charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <!--    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
    <script src="../jquery-easyui-1.5/jquery.min.js"></script>
    <!--    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
    <!--    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.js"></script>-->
    <script src="../js/bootstrap.js"></script>


    <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.5/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../jquery-easyui-1.5/themes/icon.css">
    <script type="text/javascript" src="../jquery-easyui-1.5/jquery.min.js"></script>
    <script type="text/javascript" src="../jquery-easyui-1.5/jquery.easyui.min.js"></script>


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



<div style="margin:0 auto;;text-align: center;background-color: #00bbee">


    <h2>新闻管理</h2>
    <p>编辑修改您要发布的新闻</p>

    <div id="searchCondtion" class="easyui-panel ms-panel-outer" title="查询条件" data-options="collapsible:true">
        <table width="100%" border="0" cellpadding="3">
            <tr>
                <td>
                    ID:
                    <input name="id" id="id" class="input_normal"/>
                    缓存key:
                    <input name="cacheKey" id="cacheKey" class="input_normal"/>
                    处理状态:
                    <select id="state" name="state" class="easyui-combobox"
                            data-options="editable:false,panelHeight:'auto'">
                        <option value="" selected="selected">全部</option>
                        <option value="0">处理成功</option>
                        <option value="1">处理失败</option>
                    </select>
                    所属系统消息:
                    <select id="otherModule" name="otherModule" class="easyui-combobox"
                            data-options="editable:false,panelHeight:'auto'">
                        <option value="" selected="selected">全部</option>
                        <option value="1">VRS</option>
                        <option value="2">用户中心</option>
                        <option value="3">CMS</option>
                    </select>
                    处理时间:
                    <input id="startTime"  name="startTime"
                           class="easyui-datebox"
                    />
                    -
                    <input id="endTime" name="endTime"
                           class="easyui-datebox"
                    />
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <a href="javascript:void(0)" class="easyui-linkbutton" id="search"
                       data-options="iconCls:'icon-search'">搜索</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="javascript:void(0)" class="easyui-linkbutton" id="remove"
                       data-options="iconCls:'icon-remove'">删除</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="javascript:void(0)" class="easyui-linkbutton" id="reset"
                       data-options="iconCls:'icon-reset'">重置</a>
                </td>
            </tr>
        </table>
    </div>

<table id="list_table" class="easyui-datagrid" title="新闻内容" style="width:700px;height:250px;"
       data-options="singleSelect:true,collapsible:true">
    <thead>
    <?php
    $host = '115.28.17.174';
    $database = 'mywebsite';
    $username = 'root';
    $password = 'liyuxin';


    // 创建对象并打开连接，最后一个参数是选择的数据库名称
    $mysqli = new mysqli($host, $username, $password, $database);
    $mysqli->set_charset("utf8");


    if (mysqli_connect_errno()) {
        // 诊断连接错误
        die("could not connect to the database.\n" . mysqli_connect_error());
    }

    $selectedDb = $mysqli->select_db($database);//选择数据库
    if (!$selectedDb) {
        die("could not to the database\n" . mysql_error());
    }

    if ($stmt = $mysqli->prepare("select * from news")) {
        $stmt->execute();
        $stmt->bind_result($id, $title,$content,$createtime,$updatetime);

        while ($stmt->fetch()) {
            echo "<tr>
                    <th data-options=\"field:'id',width:80\">$id</th>
                    <th data-options=\"field:'新闻标题',width:100\">$title</th>
                    <th data-options=\"field:'新闻内容',width:80,align:'right'\">$content</th>
                    <th data-options=\"field:'创建时间',width:130,align:'right'\">$createtime</th>
                    <th data-options=\"field:'修改时间',width:130\">$updatetime</th>
                  </tr>";
//            echo "标题 <input value='$title'style='width: 100px;'>  内容 <input value='$content'> \n <br>";
        }
        /* close statement */
        $stmt->close();
    }


    $mysqli->close();//关闭连接

    ?>

    </thead>
</table>


</div>


</body>
<script type="text/javascript">
    $.ready(function(){


        $('#list_table').datagrid({
            toolbar : [
            {
            id : 'todo',
            text : '处理缓存',
            iconCls : 'icon-add',
            handler : function() {
                });
            ]
    };
</script>

</html>
