<?php /* Smarty version Smarty-3.1.19, created on 2017-05-17 12:29:57
         compiled from "/home/patsimplon/Documents/Simplon - Développement Web/Prestashop-Init/admin234fvdiba/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1164196066591c2625dbaaa3-79530063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a85fe33b28073825377261e2ce7773e0e0b59d8' => 
    array (
      0 => '/home/patsimplon/Documents/Simplon - Développement Web/Prestashop-Init/admin234fvdiba/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1495009733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1164196066591c2625dbaaa3-79530063',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591c2625dbd502_60296426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c2625dbd502_60296426')) {function content_591c2625dbd502_60296426($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
