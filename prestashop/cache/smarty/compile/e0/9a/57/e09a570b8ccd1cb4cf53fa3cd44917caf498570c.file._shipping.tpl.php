<?php /* Smarty version Smarty-3.1.14, created on 2014-08-17 09:46:56
         compiled from "E:\AlmacenSoftwareInstalados\xampp\htdocs\Kathib-prestashop\prestashop\admin\themes\default\template\controllers\orders\_shipping.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234953f0ce70e30828-99819857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e09a570b8ccd1cb4cf53fa3cd44917caf498570c' => 
    array (
      0 => 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\admin\\themes\\default\\template\\controllers\\orders\\_shipping.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234953f0ce70e30828-99819857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'line' => 0,
    'currency' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0ce70eaa865_35892898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0ce70eaa865_35892898')) {function content_53f0ce70eaa865_35892898($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_escape')) include 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<table class="table" width="100%" cellspacing="0" cellpadding="0" id="shipping_table">
<colgroup>
	<col width="15%"/>
	<col width="15%"/>
	<col width=""/>
	<col width="10%"/>
	<col width="20%"/>
</colgroup>
	<thead>
	<tr>
		<th><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Type'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Carrier'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Weight'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Shipping cost'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Tracking number'),$_smarty_tpl);?>
</th>
	</tr>
	</thead>
	<tbody>
	<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value->getShipping(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
	<tr>
		<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['line']->value['date_add'],'full'=>true),$_smarty_tpl);?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['line']->value['type'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['line']->value['carrier_name'];?>
</td>
		<td class="weight"><?php echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);?>
 <?php echo Configuration::get('PS_WEIGHT_UNIT');?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod()==@constant('PS_TAX_INC')){?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>

			<?php }?>
		</td>
		<td>
			<span id="shipping_number_show"><?php if ($_smarty_tpl->tpl_vars['line']->value['url']&&$_smarty_tpl->tpl_vars['line']->value['tracking_number']){?><a target="_blank" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['line']->value['url'],'@',$_smarty_tpl->tpl_vars['line']->value['tracking_number']);?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
<?php }?></span>
			<?php if ($_smarty_tpl->tpl_vars['line']->value['can_edit']){?>
				<form style="display: inline;" method="post" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), 'htmlall', 'UTF-8');?>
&vieworder&id_order=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order']->value->id, 'htmlall', 'UTF-8');?>
">
					<span class="shipping_number_edit" style="display:none;">
						<input type="hidden" name="id_order_carrier" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['line']->value['id_order_carrier']);?>
" />
						<input type="text" name="tracking_number" value="<?php echo htmlentities($_smarty_tpl->tpl_vars['line']->value['tracking_number']);?>
" />
						<input type="submit" class="button" name="submitShippingNumber" value="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
" />
					</span>
					<a href="#" class="edit_shipping_number_link"><img src="../img/admin/edit.gif" alt="<?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>
" /></a>
					<a href="#" class="cancel_shipping_number_link" style="display: none;"><img src="../img/admin/disabled.gif" alt="<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
" /></a>
				</form>
			<?php }?>
		</td>
	</tr>
	<?php } ?>
	</tbody>
</table>
<?php }} ?>