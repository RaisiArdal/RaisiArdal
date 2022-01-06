<?php
/* Smarty version 3.1.39, created on 2021-12-24 21:56:24
  from 'C:\xampp\htdocs\prestashop\modules\psf_prestapay\views\admin-panel\templates\_partials\menu-sidebar-plus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c610d0dbe0f7_01172113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef6e1452f55a0e0e14c04d8e17b751d57db07d0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\psf_prestapay\\views\\admin-panel\\templates\\_partials\\menu-sidebar-plus.tpl',
      1 => 1640370272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c610d0dbe0f7_01172113 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sidebar_array']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar_array']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
	
		<?php if (!(isset($_smarty_tpl->tpl_vars['menu']->value['is_show'])) || ((isset($_smarty_tpl->tpl_vars['menu']->value['is_show'])) && $_smarty_tpl->tpl_vars['menu']->value['is_show'])) {?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['before']))) {?> <?php echo $_smarty_tpl->tpl_vars['menu']->value['before'];?>
 <?php }?>
			
			<div class="list-group psf_pp_panel">
			
				<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['title']))) {?>
					<div class="list-group-item disabled" href="#">
					
						<i class="<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['icon']))) {
echo $_smarty_tpl->tpl_vars['menu']->value['icon'];
} else { ?>icon-caret-right<?php }?>"></i>&nbsp;
						
						<?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>

						
						<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['badge'])) && !empty($_smarty_tpl->tpl_vars['menu']->value['badge'])) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['menu']->value['badge'];?>
</span><?php }?>
						
						<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['label']['content'])) && !empty($_smarty_tpl->tpl_vars['menu']->value['label']['content'])) {?>
							<span class="label <?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['label']['class']))) {
echo $_smarty_tpl->tpl_vars['menu']->value['label']['class'];
} else { ?>label-default<?php }?>">
								<?php echo $_smarty_tpl->tpl_vars['menu']->value['label']['content'];?>

							</span>
						<?php }?>
						
					</div>
				<?php }?>
				
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['items'], 'item', false, 'item_key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
					<?php if (!(isset($_smarty_tpl->tpl_vars['item']->value['is_show'])) || ((isset($_smarty_tpl->tpl_vars['item']->value['is_show'])) && $_smarty_tpl->tpl_vars['item']->value['is_show'])) {?>
						<div class="list-group-item">
							<a class="<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['active']) || ($_smarty_tpl->tpl_vars['item_key']->value == $_smarty_tpl->tpl_vars['active_section']->value && $_smarty_tpl->tpl_vars['controller']->value != $_smarty_tpl->tpl_vars['module']->value->pluginsAdminController)) {?>active<?php }?>
							<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['plugin'])) && !empty($_smarty_tpl->tpl_vars['item']->value['sub_menus'])) {?>psf-plugin-has-submenu<?php }?>" href="<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['link']))) {
echo $_smarty_tpl->tpl_vars['item']->value['link'];
} else { ?>#<?php }?>">
								<i class="<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['icon']))) {
echo $_smarty_tpl->tpl_vars['item']->value['icon'];
} else { ?>icon-caret-right<?php }?>"></i>&nbsp;
								<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>



								
								<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['badges']) && is_array($_smarty_tpl->tpl_vars['item']->value['badges'])) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['badges'], 'badge');
$_smarty_tpl->tpl_vars['badge']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['badge']->value) {
$_smarty_tpl->tpl_vars['badge']->do_else = false;
?>
										<?php if (is_array($_smarty_tpl->tpl_vars['badge']->value) && !empty($_smarty_tpl->tpl_vars['badge']->value['value'])) {?>
											<span class="badge psf-plugin-badge <?php if ((isset($_smarty_tpl->tpl_vars['badge']->value['type']))) {?>badge-<?php echo $_smarty_tpl->tpl_vars['badge']->value['type'];
} else { ?>badge-success<?php }?>">
												<?php echo $_smarty_tpl->tpl_vars['badge']->value['value'];?>

											</span>
										<?php } elseif (!is_array($_smarty_tpl->tpl_vars['badge']->value) && !empty($_smarty_tpl->tpl_vars['badge']->value)) {?>
											<span class="badge psf-plugin-badge badge-plus"><?php echo $_smarty_tpl->tpl_vars['badge']->value;?>
</span>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } elseif (!empty($_smarty_tpl->tpl_vars['item']->value['badges']) && !is_array($_smarty_tpl->tpl_vars['item']->value['badges'])) {?>
									<span class="badge psf-plugin-badge badge-plus"><?php echo $_smarty_tpl->tpl_vars['item']->value['badges'];?>
</span>
								<?php }?>

								<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['label']['content'])) && !empty($_smarty_tpl->tpl_vars['item']->value['label']['content'])) {?>
									<span class="label <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['label']['class']))) {
echo $_smarty_tpl->tpl_vars['item']->value['label']['class'];
} else { ?>label-default<?php }?>">
										<?php echo $_smarty_tpl->tpl_vars['item']->value['label']['content'];?>

									</span>
								<?php }?>
							</a>
							<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['plugin'])) && (isset($_smarty_tpl->tpl_vars['item']->value['sub_menus'])) && !empty($_smarty_tpl->tpl_vars['item']->value['sub_menus'])) {?>
								<span class="grower 
								<?php if ($_smarty_tpl->tpl_vars['item']->value['plugin'] == $_smarty_tpl->tpl_vars['plugin']->value && empty($_smarty_tpl->tpl_vars['class']->value)) {?>active<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['item']->value['plugin'] == $_smarty_tpl->tpl_vars['plugin']->value && !empty($_smarty_tpl->tpl_vars['class']->value)) {?>open<?php } else { ?>close<?php }?>"></span>
								<ul <?php if ($_smarty_tpl->tpl_vars['item']->value['plugin'] == $_smarty_tpl->tpl_vars['plugin']->value && !empty($_smarty_tpl->tpl_vars['class']->value)) {?>class="open"<?php }?>>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['sub_menus'], 'sub_menu', false, 'sub_key');
$_smarty_tpl->tpl_vars['sub_menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_key']->value => $_smarty_tpl->tpl_vars['sub_menu']->value) {
$_smarty_tpl->tpl_vars['sub_menu']->do_else = false;
?>
										<li>
											<a class="<?php if ((isset($_smarty_tpl->tpl_vars['sub_menu']->value['active']))) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['sub_menu']->value['link'];?>
">

												<?php if ((isset($_smarty_tpl->tpl_vars['sub_menu']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['sub_menu']->value['icon'];?>
"></i><?php }?>&nbsp; 
												<?php echo $_smarty_tpl->tpl_vars['sub_menu']->value['title'];?>

												<?php if ((isset($_smarty_tpl->tpl_vars['sub_menu']->value['badge']))) {?><span class="badge psf-plugin-badge badge-plus"><?php echo $_smarty_tpl->tpl_vars['sub_menu']->value['badge'];?>
</span><?php }?>
											</a>
										</li>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							<?php }?>
						</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				
			</div>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value['after']))) {?> <?php echo $_smarty_tpl->tpl_vars['menu']->value['after'];?>
 <?php }?>
		
		<?php }?>
		
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>


	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function(){
			$(".grower").click(function(){
				var element = $(this);
				if(element.hasClass('open')){
					element.addClass('close').removeClass('open');
					element.parent().find('ul:first').slideUp();
				}
				else{
					$('.grower').not(element).addClass('close').removeClass('open');
					var elementUL = element.parent().find('ul:first');
					$('.list-group-item ul').not(elementUL).slideUp();

					element.addClass('open').removeClass('close');
					element.parent().find('ul:first').slideDown();
				}
			});
		});
	<?php echo '</script'; ?>
>
<?php }
}
