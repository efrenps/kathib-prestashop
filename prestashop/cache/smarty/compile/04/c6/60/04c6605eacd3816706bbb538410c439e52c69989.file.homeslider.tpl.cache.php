<?php /* Smarty version Smarty-3.1.14, created on 2014-08-17 10:15:05
         compiled from "E:\AlmacenSoftwareInstalados\xampp\htdocs\Kathib-prestashop\prestashop\modules\homeslider\homeslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2401053f0d509f3d8d9-55276472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04c6605eacd3816706bbb538410c439e52c69989' => 
    array (
      0 => 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\modules\\homeslider\\homeslider.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2401053f0d509f3d8d9-55276472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0d50a07a4d6_18279712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0d50a07a4d6_18279712')) {function content_53f0d50a07a4d6_18279712($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Module HomeSlider -->
<?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)){?>
<script type="text/javascript">
<?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)&&count($_smarty_tpl->tpl_vars['homeslider_slides']->value)>1){?>
	<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['loop']==1){?>
		var homeslider_loop = true;
	<?php }else{ ?>
		var homeslider_loop = false;
	<?php }?>
<?php }else{ ?>
	var homeslider_loop = false;
<?php }?>
var homeslider_speed = <?php echo $_smarty_tpl->tpl_vars['homeslider']->value['speed'];?>
;
var homeslider_pause = <?php echo $_smarty_tpl->tpl_vars['homeslider']->value['pause'];?>
;
</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)){?>
<ul id="homeslider">
<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']){?>
		<li>
			<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['url'], 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['description'], 'htmlall', 'UTF-8');?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."images/".((string)smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['image'], 'htmlall', 'UTF-8')));?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slide']->value['legend'], 'htmlall', 'UTF-8');?>
" height="<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['height']);?>
" width="<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['width']);?>
" />
			</a>
		</li>
	<?php }?>
<?php } ?>
</ul>
<?php }?>
<!-- /Module HomeSlider -->
<?php }} ?>