<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>正在进入支付页面</title>
<style type="text/css">

body{ font-family:'宋体',Arial; font-size:12px; color:#333; text-align:center;}
a,a:link,a:visited {color:#0099FF; text-decoration:underline;}
.top{ margin:0 auto; width:100%; height:180px;}
.wait1{ margin:0 auto; width:800px; height:36px;}
.w1_1{float:left; width:50px; padding-left:300px;}
.w1_3{float:left; width:150px; padding-top:15px;}
.w1_8{ margin-top:10px; color:#A8A8A8;}

</style>

</head>
<body>
<div class="top"></div>
<div class="wait1">
  <div class="w1_1"><img src="__PUBLIC__/wancms3/images/loading.gif" /></div>
  <div class="w1_3">正在转向中，请稍候…</div>
</div>
<div class="wait1">
  <div class="w1_8">如果系统长时间无响应，请<a href="javascript:document.getElementsByName('alipaysubmit')[0].submit();">单击此处</a>提交本页面</div>
</div> 
<!-- 
<br />
<center>正在进入支付页面，请不要关闭和刷新浏览器</center> 
 -->
 
 
<?php echo ($data); ?>

</body>
</html>