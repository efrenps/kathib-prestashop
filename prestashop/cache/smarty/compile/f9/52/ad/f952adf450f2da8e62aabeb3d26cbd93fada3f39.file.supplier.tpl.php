<?php /* Smarty version Smarty-3.1.14, created on 2014-08-17 09:46:53
         compiled from "E:\AlmacenSoftwareInstalados\xampp\htdocs\Kathib-prestashop\prestashop\themes\default\supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1892753f0ce6dd65755-43260285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f952adf450f2da8e62aabeb3d26cbd93fada3f39' => 
    array (
      0 => 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\themes\\default\\supplier.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1892753f0ce6dd65755-43260285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'supplier' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0ce6ddae5d8_24923895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0ce6ddae5d8_24923895')) {function content_53f0ce6ddae5d8_24923895($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)){?>
	<h1><?php echo smartyTranslate(array('s'=>'List of products by supplier:'),$_smarty_tpl);?>
&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['supplier']->value->name, 'htmlall', 'UTF-8');?>
</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['supplier']->value->description)){?>
		<div class="description_box">
			<p><?php echo $_smarty_tpl->tpl_vars['supplier']->value->description;?>
</p>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
	<div class="content_sortPagiBar">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="sortPagiBar clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>


	<div class="content_sortPagiBar">
		<div class="sortPagiBar clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

	</div>
	<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No products for this supplier.'),$_smarty_tpl);?>
</p>
	<?php }?> 
<?php }?>
<?php }} ?>