<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>管理系统</title>
<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min1.css">
<link rel="stylesheet" type="text/css" href="public/css/style1.css">
<link rel="stylesheet" type="text/css" href="public/css/font-awesome.min1.css">
<link rel="apple-touch-icon-precomposed" href="public/images/icon/icon.png">
<link rel="shortcut icon" href="images/icon/favicon.ico">
<script src="public/js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/html5shiv.min.js" type="text/javascript"></script>
  <script src="js/respond.min.js" type="text/javascript"></script>
  <script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<body class="user-select">
<section class="container-fluid">
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="/">吴春芳</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href=""> <span class="badge"></span></a></li>
            <li class="dropdown"> <a class="dropdown-toggle" >吴春芳 <span class="caret"></span></a>
              
            </li>
           <li><a href="index.php?m=admin&a=logout" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
            <li></li>
          </ul>
          <form action="" method="post" class="navbar-form navbar-right" role="search">
            <div class="input-group">
             
              </span> </div>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <div class="row">
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
      <ul class="nav nav-sidebar">
        <li class="active"><a href="index.php?m=admin&a=show">报告</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="index.php?m=adarticle&a=mood">心情</a></li>
        
        <li><a href="index.php?m=adarticle&a=comm">评论</a></li>
        <li><a data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能" href="index.php?m=adarticle&a=word">留言</a></li>
      </ul>
      
      <ul class="nav nav-sidebar">
        <li><a class="dropdown-toggle" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >用户</a>
          <ul class="dropdown-menu" aria-labelledby="userMenu">
            
            <li><a href="index.php?m=admin&a=user">管理用户</a></li>
            
          </ul>
        </li>
        <li><a class="dropdown-toggle" id="settingMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">设置</a>
          <ul class="dropdown-menu" aria-labelledby="settingMenu">
            <li role="separator" class="divider"></li>
            <li><a data-toggle="modal" data-target="#areDeveloping">安全配置</a></li>
            <li role="separator" class="divider"></li>
           
          </ul>
        </li>
      </ul>
    </aside>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
      <h1 class="page-header">信息总览</h1>
      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>文章</h4>
          <span class="text-muted"><?=$total;?> 条</span> </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>评论</h4>
          <span class="text-muted"><?=$totalReply;?>条</span> </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>友链</h4>
          <span class="text-muted">4 条</span> </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <h4>访问量</h4>
          <span class="text-muted"><?=$visit;?></span> </div>
      </div>
      <h1 class="page-header">状态</h1>
      <div class="table-responsive">
      
        <table class="table table-striped table-hover">
          <tbody>
            <tr>
              <td>登录者: <span><?=$username;?></span>，这是您的<span>天下</span> 请修改/查看</td>
            </tr>
            <tr>
              <td>上次登录时间: <?=$time = date('Y-m-d H:i:s',$lasttime);?> , 上次登录IP: <?=$regip = long2ip($ip);?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <h1 class="page-header">系统信息</h1>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr> </tr>
          </thead>
          <tbody>
            <tr>
              <td>管理员个数:</td>
              <td><?=$tn;?>人</td>
              <td>服务器软件:</td>
              <td>Apache/2.4.10 (Win32) OpenSSL/1.0.1i mod_fcgid/2.3.9</td>
            </tr>
            <tr>
              <td>浏览器:</td>
              <td>Chrome47</td>
              <td>PHP版本:</td>
              <td>5.6.1</td>
            </tr>
            <tr>
              <td>操作系统:</td>
              <td>Windows 10</td>
              <td>PHP运行方式:</td>
              <td>CGI-FCGI</td>
            </tr>
            <tr>
              <td>登录者IP:</td>
              <td><?=$regip = long2ip($ip);?></td>
              <td>MYSQL版本:</td>
              <td>5.5.40</td>
            </tr>
            <tr>
              <td>程序版本:</td>
              <td class="version">YlsatCMS 1.0 <font size="-6" color="#BBB">(20160108160215)</font></td>
              <td>上传文件:</td>
              <td>可以 <font size="-6" color="#BBB">(最大文件：2M ，表单：8M )</font></td>
            </tr>
            <tr>
              <td>程序编码:</td>
              <td>UTF-8</td>
              <td>当前时间:</td>
              <td><?=$time = date('Y-m-d H:i:s',time());?></td>
            </tr>
          </tbody>
          <tfoot>
            <tr></tr>
          </tfoot>
        </table>
        
      </div>
      <footer>
        <h1 class="page-header">程序信息</h1>
        <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tbody>
            <tr>
              <td><span style="display:inline-block; width:8em">版权所有</span> POWERED BY WY ALL RIGHTS RESERVED</td>
            </tr>
            <tr>
              <td><span style="display:inline-block;width:8em">页面加载时间</span> PROCESSED IN 1.0835s  SECONDS 更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></td>
            </tr>
          </tbody>
        </table>
        </div>
      </footer>
    </div>
  </div>
</section>
<!--个人信息模态框-->


<!--微信二维码模态框-->
<div class="modal fade user-select" id="WeChat" tabindex="-1" role="dialog" aria-labelledby="WeChatModalLabel">
  <div class="modal-dialog" role="document" style="margin-top:120px;max-width:280px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="WeChatModalLabel" style="cursor:default;">微信扫一扫</h4>
      </div>
      <div class="modal-body" style="text-align:center"> <img src="images/weixin.jpg" alt="" style="cursor:pointer"/> </div>
    </div>
  </div>
</div>
<!--提示模态框-->
<div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog" aria-labelledby="areDevelopingModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">该功能正在日以继夜的开发中…</h4>
      </div>
      <div class="modal-body"> <img src="./public/images/baoman/baoman_01.gif" alt="深思熟虑" />
        <p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">很抱歉，程序猿正在日以继夜的开发此功能，本程序将会在以后的版本中持续完善！</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>
      </div>
    </div>
  </div>
</div>
<!--右键菜单列表-->
<div id="rightClickMenu">
  <ul class="list-group rightClickMenuList">
    <li class="list-group-item disabled">欢迎访问异清轩博客</li>
    <li class="list-group-item"><span>IP：</span>172.16.10.129</li>
    <li class="list-group-item"><span>地址：</span>河南省郑州市</li>
    <li class="list-group-item"><span>系统：</span>Windows10 </li>
    <li class="list-group-item"><span>浏览器：</span>Chrome47</li>
  </ul>
</div>
<script src="public/js/bootstrap.min.js"></script> 
<script src="public/js/admin-scripts.js"></script>
</body>
</html>