<?php /* Smarty version Smarty-3.1.14, created on 2014-08-17 09:46:58
         compiled from "E:\AlmacenSoftwareInstalados\xampp\htdocs\Kathib-prestashop\prestashop\admin\themes\default\template\controllers\referrers\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184753f0ce72e1d907-12812916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d95da2fcb0341f4b836a9c82ef54626837a506' => 
    array (
      0 => 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\admin\\themes\\default\\template\\controllers\\referrers\\calendar.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184753f0ce72e1d907-12812916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'token' => 0,
    'action' => 0,
    'table' => 0,
    'identifier' => 0,
    'id' => 0,
    'translations' => 0,
    'datepickerFrom' => 0,
    'datepickerTo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0ce72e74b21_99649278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0ce72e74b21_99649278')) {function content_53f0ce72e74b21_99649278($_smarty_tpl) {?>

<div id="referrersContainer">
	<div id="calendar">
				<form action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
<?php if ($_smarty_tpl->tpl_vars['action']->value&&$_smarty_tpl->tpl_vars['table']->value){?>&<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['identifier']->value&&$_smarty_tpl->tpl_vars['id']->value){?>&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php }?>" method="post" id="calendar_form" name="calendar_form">
					<input type="submit" name="submitDateDay" class="button submitDateDay" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
">
					<input type="submit" name="submitDateMonth" class="button submitDateMonth" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
">
					<input type="submit" name="submitDateYear" class="button submitDateYear" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
">
					<input type="submit" name="submitDateDayPrev" class="button submitDateDayPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Day'];?>
-1">
					<input type="submit" name="submitDateMonthPrev" class="button submitDateMonthPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Month'];?>
-1">
					<input type="submit" name="submitDateYearPrev" class="button submitDateYearPrev" value="<?php echo $_smarty_tpl->tpl_vars['translations']->value['Year'];?>
-1">
					<p><span><?php if (isset($_smarty_tpl->tpl_vars['translations']->value['From'])){?><?php echo $_smarty_tpl->tpl_vars['translations']->value['From'];?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'From:'),$_smarty_tpl);?>
<?php }?></span>
						<input type="text" name="datepickerFrom" id="datepickerFrom" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datepickerFrom']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="datepicker">
					</p>
					<p><span><?php if (isset($_smarty_tpl->tpl_vars['translations']->value['To'])){?><?php echo $_smarty_tpl->tpl_vars['translations']->value['To'];?>
<?php }else{ ?><span><?php echo smartyTranslate(array('s'=>'From:'),$_smarty_tpl);?>
</span><?php }?></span>
						<input type="text" name="datepickerTo" id="datepickerTo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datepickerTo']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="datepicker">
					</p>
					<input type="submit" name="submitDatePicker" id="submitDatePicker" class="button" value="<?php if (isset($_smarty_tpl->tpl_vars['translations']->value['Save'])){?><?php echo $_smarty_tpl->tpl_vars['translations']->value['Save'];?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'   Save   '),$_smarty_tpl);?>
<?php }?>" />
				</form>

				<script type="text/javascript">
					$(document).ready(function() {
						if ($("form#calendar_form .datepicker").length > 0)
							$("form#calendar_form .datepicker").datepicker({
								prevText: '',
								nextText: '',
								dateFormat: 'yy-mm-dd'
							});
					});
				</script>
	</div><?php }} ?>