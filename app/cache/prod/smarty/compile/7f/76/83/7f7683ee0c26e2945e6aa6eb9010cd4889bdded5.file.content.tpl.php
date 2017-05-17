<?php /* Smarty version Smarty-3.1.19, created on 2017-05-17 12:29:57
         compiled from "/home/patsimplon/Documents/Simplon - Développement Web/Prestashop-Init/admin234fvdiba/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46078294591c2625d467e5-94525417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f7683ee0c26e2945e6aa6eb9010cd4889bdded5' => 
    array (
      0 => '/home/patsimplon/Documents/Simplon - Développement Web/Prestashop-Init/admin234fvdiba/themes/default/template/content.tpl',
      1 => 1495009733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46078294591c2625d467e5-94525417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591c2625d4a1e7_56293604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c2625d4a1e7_56293604')) {function content_591c2625d4a1e7_56293604($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
