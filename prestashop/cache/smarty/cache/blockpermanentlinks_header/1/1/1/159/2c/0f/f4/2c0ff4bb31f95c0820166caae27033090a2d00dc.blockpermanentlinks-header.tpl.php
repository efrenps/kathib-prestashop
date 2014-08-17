<?php /*%%SmartyHeaderCode:1487453f0d4f3d884d4-99033962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c0ff4bb31f95c0820166caae27033090a2d00dc' => 
    array (
      0 => 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487453f0d4f3d884d4-99033962',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0d4f3e0f606_26958394',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0d4f3e0f606_26958394')) {function content_53f0d4f3e0f606_26958394($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?controller=contact" title="contacto">contacto</a></li>
	<li id="header_link_sitemap"><a href="http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php?controller=sitemap" title="mapa sitio">mapa sitio</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://servidordesarrollo:8080/kathib-prestashop/prestashop/index.php', 'Grupo Kathib', 'Favoritos');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>