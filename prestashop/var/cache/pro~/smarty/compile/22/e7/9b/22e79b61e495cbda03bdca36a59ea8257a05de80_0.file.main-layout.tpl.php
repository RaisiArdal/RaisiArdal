<?php
/* Smarty version 3.1.39, created on 2021-12-24 21:56:26
  from 'C:\xampp\htdocs\prestashop\modules\psf_prestapay\views\admin-panel\templates\_layouts\main-layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c610d23c5073_29606510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22e79b61e495cbda03bdca36a59ea8257a05de80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\psf_prestapay\\views\\admin-panel\\templates\\_layouts\\main-layout.tpl',
      1 => 1640370272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c610d23c5073_29606510 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="col-md-6">
		<div class="prestafa_logo pull-left"></div>
	</div>
	<div class="col-md-6">
		<?php if (!empty($_smarty_tpl->tpl_vars['exist_new_version']->value)) {?>
			<a href="<?php if ((isset($_smarty_tpl->tpl_vars['webservice_info']->value['product_info']['update_link']))) {
echo $_smarty_tpl->tpl_vars['webservice_info']->value['product_info']['update_link'];
} else { ?>#<?php }?>">
				<div class="alert alert-warning pull-right">
						&nbsp;&nbsp; ویرایش جدید این ماژول منتشر شده است!
				</div>
			</a>
		<?php }?>
	</div>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['webservice_info']->value['important_notice']['message'])) {?>
	<div class="row">
		<div class="col-sm-12">
			<div class="alert <?php if ((isset($_smarty_tpl->tpl_vars['webservice_info']->value['important_notice']['css_class']))) {
echo $_smarty_tpl->tpl_vars['webservice_info']->value['important_notice']['css_class'];
} else { ?>alert-info<?php }?>">
				<?php echo $_smarty_tpl->tpl_vars['webservice_info']->value['important_notice']['message'];?>

			</div>
		</div>
	</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['_positions']->value['HEADER']))) {?>
	<?php echo $_smarty_tpl->tpl_vars['_positions']->value['HEADER'];?>

<?php }?>

<div class="panel">

	<?php if ((isset($_smarty_tpl->tpl_vars['_positions']->value['TOP_CONTAINER']))) {?>
		<?php echo $_smarty_tpl->tpl_vars['_positions']->value['TOP_CONTAINER'];?>

	<?php }?>

	<div class="row">
	
		<div class="col-md-3">
			<?php if ((isset($_smarty_tpl->tpl_vars['_positions']->value['SIDEBAR']))) {?>
				<?php echo $_smarty_tpl->tpl_vars['_positions']->value['SIDEBAR'];?>

			<?php }?>
		</div>
		
		<div id="moduleContainer" class="col-md-9">
		
			<?php if ((isset($_smarty_tpl->tpl_vars['_positions']->value['TOP_CONTENT']))) {?>
				<?php echo $_smarty_tpl->tpl_vars['_positions']->value['TOP_CONTENT'];?>

			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['_flash']->value['message'])) && !empty($_smarty_tpl->tpl_vars['_flash']->value['message'])) {?>
				<div class="row">
					<div class="col-sm-12">
						<div class="alert alert-<?php if ((isset($_smarty_tpl->tpl_vars['_flash']->value['type']))) {
echo $_smarty_tpl->tpl_vars['_flash']->value['type'];
} else { ?>info<?php }?> ">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<?php echo $_smarty_tpl->tpl_vars['_flash']->value['message'];?>

						</div>
					</div>
				</div>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['show_native_reports']->value) {?>
				<?php if ((isset($_smarty_tpl->tpl_vars['conf']->value))) {?>
					<div class="bootstrap">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

						</div>
					</div>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['errors']->value) && current($_smarty_tpl->tpl_vars['errors']->value) != '') {?>
					<div class="bootstrap">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php if (count($_smarty_tpl->tpl_vars['errors']->value) == 1) {?>
							<?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl ) );?>

							<br/>
							<ol>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
									<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ol>
						<?php }?>
						</div>
					</div>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['informations']->value)) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
					<div class="bootstrap">
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<ul id="infos_block" class="list-unstyled">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
									<li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					</div>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
					<div class="bootstrap">
						<div class="alert alert-success" style="display:block;">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
								<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
					<div class="bootstrap">
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<?php if (count($_smarty_tpl->tpl_vars['warnings']->value) > 1) {?>
								<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d warnings:','sprintf'=>count($_smarty_tpl->tpl_vars['warnings']->value)),$_smarty_tpl ) );?>
</h4>
							<?php }?>
							<ul class="list-unstyled">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
									<li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					</div>
				<?php }?>
			<?php }?>
			
			<?php echo $_smarty_tpl->tpl_vars['_content']->value;?>

			
			<?php if ((isset($_smarty_tpl->tpl_vars['_positions']->value['BOTTOM_CONTENT']))) {?>
				<?php echo $_smarty_tpl->tpl_vars['_positions']->value['BOTTOM_CONTENT'];?>

			<?php }?>
			
		</div>
	</div>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['_positions']->value['BOTTOM_CONTAINER']))) {?>
		<?php echo $_smarty_tpl->tpl_vars['_positions']->value['BOTTOM_CONTAINER'];?>

	<?php }?>
	
	<div class="panel-footer">
		<div class="row">
			<div class="col-md-1">
				<div class="prestafa_footer_icon"></div>
			</div>
			<div class="col-md-11">
				<br />
				<span>
					تمامی حقوق این ماژول برای <a href="http://www.prestafa.com/">پرستافا</a> ( گروه  <a href="http://www.dbstheme.com/">دی بی اس تم</a> ) محفوظ است و  استفاده غیر مجاز پیگرد قانونی خواهد داشت.
				</span>
			</div>
		</div>					
	</div>

</div>

<?php if ((isset($_smarty_tpl->tpl_vars['_positions']->value['FOOTER']))) {?>
	<?php echo $_smarty_tpl->tpl_vars['_positions']->value['FOOTER'];?>

<?php }
}
}
