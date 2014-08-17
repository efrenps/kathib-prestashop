<?php /*%%SmartyHeaderCode:2956553f0d4f7b07658-19741288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1978b0705ef5d8102865a0300427928d949a8ee' => 
    array (
      0 => 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\themes\\default\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2956553f0d4f7b07658-19741288',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0d4f7becd64_67259010',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0d4f7becd64_67259010')) {function content_53f0d4f7becd64_67259010($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?controller=supplier" title="Proveedores">Proveedores</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1" title="Más sobre AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1" title="Más sobre Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/kathib-prestashop/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Todos los proveedores</option>
									<option value="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1">AppleStore</option>
									<option value="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>