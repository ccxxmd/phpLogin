<?php /* Smarty version 3.1.27, created on 2016-11-27 11:59:56
         compiled from "F:\wamp\www\test\templates\insert.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21470583abcac6bc786_30153785%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3631db379e075e79597faac96ffcb2c4336c9459' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\insert.tpl',
      1 => 1480244363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21470583abcac6bc786_30153785',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583abcac704566_33993708',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583abcac704566_33993708')) {
function content_583abcac704566_33993708 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21470583abcac6bc786_30153785';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示学生信息</title>
<style>
a{text-decoration:none;}
.cla{width: 30%;
	margin:7em auto 0;
	position:relative;
	background: #fff;
	padding: 2em 2em;
	border:1;
	border-radius: 0.3em;
	-webkit-border-radius: 0.3em;
	-o-border-radius: 0.3em;
	-moz-border-radius: 0.3em;
}

</style>
</head>
<body style="background-image:url(../../project/images/bg.jpg)">
<div class="cla">
<h1 align="center">增添学生信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="insertdo.php" method="post" >
     <input type="hidden" name="oldxh"/>
	学号:<input type="text"  name="xh" /><br/>
    姓名:<input type="text" name="xm" /><br/>
    性别:<input type="radio" value="0" name="sex"  />男&nbsp;
        <input type="radio" value="1" name="sex"  />女 <br/>
    班级:<input type="text" name="bj" /><br/>
    <input type="submit" name="sub" value="确定"/>
    <input type="button" name="back" value="返回" onclick="location.href='index.php'"/>
</form>
</div>
</div>
</body>
</html>
<?php }
}
?>