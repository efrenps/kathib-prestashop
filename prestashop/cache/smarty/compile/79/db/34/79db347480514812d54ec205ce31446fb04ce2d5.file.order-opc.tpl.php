<?php /* Smarty version Smarty-3.1.14, created on 2014-08-17 09:46:46
         compiled from "E:\AlmacenSoftwareInstalados\xampp\htdocs\Kathib-prestashop\prestashop\themes\default\mobile\order-opc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2659553f0ce66d9ad82-20710345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79db347480514812d54ec205ce31446fb04ce2d5' => 
    array (
      0 => 'E:\\AlmacenSoftwareInstalados\\xampp\\htdocs\\Kathib-prestashop\\prestashop\\themes\\default\\mobile\\order-opc.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2659553f0ce66d9ad82-20710345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_CATALOG_MODE' => 0,
    'img_dir' => 0,
    'link' => 0,
    'PS_GUEST_CHECKOUT_ENABLED' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
    'priceDisplay' => 0,
    'use_taxes' => 0,
    'conditions' => 0,
    'vat_management' => 0,
    'errorCarrier' => 0,
    'errorTOS' => 0,
    'checked' => 0,
    'isLogged' => 0,
    'isGuest' => 0,
    'isVirtualCart' => 0,
    'isPaymentStep' => 0,
    'productNumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53f0ce66e57982_13125637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0ce66e57982_13125637')) {function content_53f0ce66e57982_13125637($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Order'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'This store does not accept orders.'),$_smarty_tpl);?>
</p>
<?php }else{ ?>

<script type="text/javascript">
	// <![CDATA[
	var imgDir = '<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
';
	var authenticationUrl = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("authentication",true));?>
';
	var orderOpcUrl = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("order-opc",true));?>
';
	var historyUrl = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("history",true));?>
';
	var guestTrackingUrl = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("guest-tracking",true));?>
';
	var addressUrl = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("address",true));?>
';
	var orderProcess = 'order-opc';
	var guestCheckoutEnabled = <?php echo intval($_smarty_tpl->tpl_vars['PS_GUEST_CHECKOUT_ENABLED']->value);?>
;
	var currencySign = '<?php echo html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8");?>
';
	var currencyRate = '<?php echo floatval($_smarty_tpl->tpl_vars['currencyRate']->value);?>
';
	var currencyFormat = '<?php echo intval($_smarty_tpl->tpl_vars['currencyFormat']->value);?>
';
	var currencyBlank = '<?php echo intval($_smarty_tpl->tpl_vars['currencyBlank']->value);?>
';
	var displayPrice = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;
	var taxEnabled = <?php echo $_smarty_tpl->tpl_vars['use_taxes']->value;?>
;
	var conditionEnabled = <?php echo intval($_smarty_tpl->tpl_vars['conditions']->value);?>
;
	var countries = new Array();
	var countriesNeedIDNumber = new Array();
	var countriesNeedZipCode = new Array();
	var vat_management = <?php echo intval($_smarty_tpl->tpl_vars['vat_management']->value);?>
;
	
	var txtWithTax = "<?php echo smartyTranslate(array('s'=>'(tax incl.)','js'=>1),$_smarty_tpl);?>
";
	var txtWithoutTax = "<?php echo smartyTranslate(array('s'=>'(tax excl.)','js'=>1),$_smarty_tpl);?>
";
	var txtHasBeenSelected = "<?php echo smartyTranslate(array('s'=>'has been selected','js'=>1),$_smarty_tpl);?>
";
	var txtNoCarrierIsSelected = "<?php echo smartyTranslate(array('s'=>'No carrier has been selected','js'=>1),$_smarty_tpl);?>
";
	var txtNoCarrierIsNeeded = "<?php echo smartyTranslate(array('s'=>'No carrier is needed for this order','js'=>1),$_smarty_tpl);?>
";
	var txtConditionsIsNotNeeded = "<?php echo smartyTranslate(array('s'=>'You do not need to accept the Terms of Service for this order.','js'=>1),$_smarty_tpl);?>
";
	var txtTOSIsAccepted = "<?php echo smartyTranslate(array('s'=>'The service terms have been accepted','js'=>1),$_smarty_tpl);?>
";
	var txtTOSIsNotAccepted = "<?php echo smartyTranslate(array('s'=>'The service terms have not been accepted','js'=>1),$_smarty_tpl);?>
";
	var txtThereis = "<?php echo smartyTranslate(array('s'=>'There is','js'=>1),$_smarty_tpl);?>
";
	var txtErrors = "<?php echo smartyTranslate(array('s'=>'Error(s)','js'=>1),$_smarty_tpl);?>
";
	var txtDeliveryAddress = "<?php echo smartyTranslate(array('s'=>'Delivery address','js'=>1),$_smarty_tpl);?>
";
	var txtInvoiceAddress = "<?php echo smartyTranslate(array('s'=>'Invoice address','js'=>1),$_smarty_tpl);?>
";
	var txtModifyMyAddress = "<?php echo smartyTranslate(array('s'=>'Modify my address','js'=>1),$_smarty_tpl);?>
";
	var txtInstantCheckout = "<?php echo smartyTranslate(array('s'=>'Instant checkout','js'=>1),$_smarty_tpl);?>
";
	var errorCarrier = "<?php echo $_smarty_tpl->tpl_vars['errorCarrier']->value;?>
";
	var errorTOS = "<?php echo $_smarty_tpl->tpl_vars['errorTOS']->value;?>
";
	var checkedCarrier = "<?php if (isset($_smarty_tpl->tpl_vars['checked']->value)){?><?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
<?php }else{ ?>0<?php }?>";
	var freeShippingTranslation = "<?php echo smartyTranslate(array('s'=>'Free shipping!','js'=>1),$_smarty_tpl);?>
";

	var addresses = new Array();
	var isLogged = <?php echo intval($_smarty_tpl->tpl_vars['isLogged']->value);?>
;
	var isGuest = <?php echo intval($_smarty_tpl->tpl_vars['isGuest']->value);?>
;
	var isVirtualCart = <?php echo intval($_smarty_tpl->tpl_vars['isVirtualCart']->value);?>
;
	var isPaymentStep = <?php echo intval($_smarty_tpl->tpl_vars['isPaymentStep']->value);?>
;
	//]]>
</script>

	
	<?php if ($_smarty_tpl->tpl_vars['productNumber']->value){?>
	
		<!-- Shopping Cart -->
		<?php echo $_smarty_tpl->getSubTemplate ("./shopping-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- End Shopping Cart -->

		<?php if ($_smarty_tpl->tpl_vars['isLogged']->value&&!$_smarty_tpl->tpl_vars['isGuest']->value){?>
			<!--  Address block -->
			<?php echo $_smarty_tpl->getSubTemplate ("./order-opc-address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!--  END Address block -->
			<!-- Carrier -->
			<?php echo $_smarty_tpl->getSubTemplate ("./order-opc-carrier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- END Carrier -->
			<!-- Payment -->
			<?php echo $_smarty_tpl->getSubTemplate ("./order-opc-payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- END Payment -->
		<?php }?>
		
	
	<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'Your shopping cart is empty.'),$_smarty_tpl);?>
</p>
	<?php }?>
	
<?php }?>
<?php }} ?>