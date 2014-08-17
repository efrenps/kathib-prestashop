<?php /*%%SmartyHeaderCode:1434953f0d5a91cb269-79706851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34ebc07bdf526c1d62ebb0db2d8738bc03ed1c6d' => 
    array (
      0 => 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\themes\\default\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1434953f0d5a91cb269-79706851',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0d5a924fca5_10757830',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0d5a924fca5_10757830')) {function content_53f0d5a924fca5_10757830($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?controller=my-account" title="Administrar mi cuenta de cliente" rel="nofollow">Mi cuenta</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?controller=history" title="Listado de mis pedidos" rel="nofollow">Mis pedidos</a></li>
						<li><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?controller=order-slip" title="Listado de mis vales de compra" rel="nofollow">Mis vales descuento</a></li>
			<li><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?controller=addresses" title="Listado de mis direcciones" rel="nofollow">Mis direcciones</a></li>
			<li><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?controller=identity" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a></li>
						
		</ul>
		<p class="logout"><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?mylogout" title="Cerrar sesión" rel="nofollow">Cerrar sesión</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>