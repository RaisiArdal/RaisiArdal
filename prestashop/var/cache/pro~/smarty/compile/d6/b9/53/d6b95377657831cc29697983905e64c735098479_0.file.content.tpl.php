<?php
/* Smarty version 3.1.39, created on 2021-12-24 21:56:26
  from 'C:\xampp\htdocs\prestashop\admin096vm4ztc\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c610d23e92d0_49206193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b95377657831cc29697983905e64c735098479' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin096vm4ztc\\themes\\default\\template\\content.tpl',
      1 => 1638617484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c610d23e92d0_49206193 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
