<?php /* Smarty version Smarty-3.1.19, created on 2017-05-17 12:30:07
         compiled from "module:ps_contactinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1530620086591c262f7bd718-73287617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfo/nav.tpl',
      1 => 1495009738,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1530620086591c262f7bd718-73287617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591c262f7c3067_99750872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591c262f7c3067_99750872')) {function content_591c262f7c3067_99750872($_smarty_tpl) {?>
<div id="_desktop_contact_link">
  <div id="contact-link">
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      
      <?php echo smartyTranslate(array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme'),$_smarty_tpl);?>

    <?php } else { ?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme'),$_smarty_tpl);?>
</a>
    <?php }?>
  </div>
</div>
<?php }} ?>
