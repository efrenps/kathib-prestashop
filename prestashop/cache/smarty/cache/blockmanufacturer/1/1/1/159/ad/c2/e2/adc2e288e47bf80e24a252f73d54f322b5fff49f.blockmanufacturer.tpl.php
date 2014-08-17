<?php /*%%SmartyHeaderCode:2929853f0d4f7e757e4-61799581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc2e288e47bf80e24a252f73d54f322b5fff49f' => 
    array (
      0 => 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\themes\\default\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2929853f0d4f7e757e4-61799581',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0d4f7f027f2_82999197',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0d4f7f027f2_82999197')) {function content_53f0d4f7f027f2_82999197($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?controller=manufacturer" title="Marcas">Marcas</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="más sobre Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1" title="más sobre Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/kathib-prestashop/prestashop/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Todas las marcas</option>
									<option value="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">Apple Computer, Inc</option>
									<option value="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>