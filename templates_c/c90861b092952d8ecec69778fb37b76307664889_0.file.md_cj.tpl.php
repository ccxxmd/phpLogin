<?php /* Smarty version 3.1.27, created on 2016-11-27 11:58:33
         compiled from "F:\wamp\www\test\templates\md_cj.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26208583abc594e16e0_02907792%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c90861b092952d8ecec69778fb37b76307664889' => 
    array (
      0 => 'F:\\wamp\\www\\test\\templates\\md_cj.tpl',
      1 => 1480244309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26208583abc594e16e0_02907792',
  'variables' => 
  array (
    'cj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_583abc5952ee30_01983835',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583abc5952ee30_01983835')) {
function content_583abc5952ee30_01983835 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26208583abc594e16e0_02907792';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改成绩信息</title>
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


<h1 align="center">修改成绩信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="md_cjdo.php" method="post" >
     <input type="hidden" name="oldxh" value="<?php echo $_smarty_tpl->tpl_vars['cj']->value['xh'];?>
"/>
	学号:<input type="text"  name="xh" value="<?php echo $_smarty_tpl->tpl_vars['cj']->value['xh'];?>
"/><br/>
    科目:<input type="text" name="km" value="<?php echo $_smarty_tpl->tpl_vars['cj']->value['km'];?>
"/><br/>
    成绩:<input type="text" name="cj" value="<?php echo $_smarty_tpl->tpl_vars['cj']->value['cj'];?>
"/><br/>
    <input type="submit" name="sub" value="确定"/>
     <input type="button" name="back" value="返回" onclick="location.href='chengji.php'"/>
</form>
</div>
</div>
</body>
</html>
<?php }
}
?>