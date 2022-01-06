<?php
/* Smarty version 3.1.39, created on 2021-12-24 22:01:10
  from 'C:\xampp\htdocs\prestashop\modules\psf_prestaplus\views\admin-panel\templates\_partials\index-section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c611eebc4fb4_30757086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dbabecbfafd5576a861083d80698464878d824b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\psf_prestaplus\\views\\admin-panel\\templates\\_partials\\index-section.tpl',
      1 => 1640370172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c611eebc4fb4_30757086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="panel">
	<div class="panel-heading">
		<i class="icon-rocket"></i>&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value->version;?>

	</div>
	<div class="row">
		<div style="font-size: 13px;text-align: justify;">
			<?php echo $_smarty_tpl->tpl_vars['module']->value->description;?>

			<br><br>
			<?php echo $_smarty_tpl->tpl_vars['module']->value->description_full;?>

		</div>
		
		<hr>
			
		<?php if (!empty($_smarty_tpl->tpl_vars['wsData']->value['product_info']['intro_link'])) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['wsData']->value['product_info']['intro_link'];?>
" class="btn btn-default">
				<i class="icon-info-circle"></i>&nbsp;
				توضیحات و معرفی ماژول
			</a>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['wsData']->value['product_info']['help_link'])) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['wsData']->value['product_info']['help_link'];?>
" class="btn btn-default">
				<i class="icon-life-ring"></i>&nbsp;
				آموزش و راهنمایی
			</a>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['wsData']->value['product_info']['qa_link'])) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['wsData']->value['product_info']['qa_link'];?>
" class="btn btn-default">
				<i class="icon-question-circle"></i>&nbsp;
				پرسش و پاسخ
			</a>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['wsData']->value['product_info']['update_link']) && $_smarty_tpl->tpl_vars['hasNewVersion']->value) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['wsData']->value['product_info']['update_link'];?>
" class="btn btn-warning pull-right">
				<i class="icon-refresh"></i>&nbsp;
				به روز رسانی
			</a>
		<?php }?>
	</div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['wsData']->value['product_info']['special_offer'])) && !empty($_smarty_tpl->tpl_vars['wsData']->value['product_info']['special_offer'])) {?>
	<div class="panel">		
		<div class="panel-heading">
			<i class="icon-bolt"></i> پیشنهاد ویژه <b><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</b>
		</div>
		<div class="row">
			<?php echo $_smarty_tpl->tpl_vars['wsData']->value['product_info']['special_offer'];?>

		</div>
	</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['wsData']->value['offer'])) && !empty($_smarty_tpl->tpl_vars['wsData']->value['offer'])) {?>
	<div class="panel">		
		<div class="panel-heading">
			<i class="icon-check-circle"></i> پیشنهاد ویژه پرستافا
		</div>
		<div class="row">
			<?php echo $_smarty_tpl->tpl_vars['wsData']->value['offer'];?>

		</div>
	</div>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['wsData']->value['links'])) && count($_smarty_tpl->tpl_vars['wsData']->value['links'])) {?>
	<div class="panel">
		<div class="panel-heading">
			<i class="icon-link"></i>
			&nbsp;&nbsp; لینک های پیشنهادی
		</div>

		<div class="row">
			<table class="table">
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wsData']->value['links'], 'link_url', false, 'link_title');
$_smarty_tpl->tpl_vars['link_url']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link_title']->value => $_smarty_tpl->tpl_vars['link_url']->value) {
$_smarty_tpl->tpl_vars['link_url']->do_else = false;
?>
						<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">		
							<td class="pointer">
								<i class="icon-caret-right"></i>
								<a class="active" href="<?php echo $_smarty_tpl->tpl_vars['link_url']->value;?>
">
									<?php echo $_smarty_tpl->tpl_vars['link_title']->value;?>

								</a>
							</td>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</div>
	</div>
<?php }
}
}
