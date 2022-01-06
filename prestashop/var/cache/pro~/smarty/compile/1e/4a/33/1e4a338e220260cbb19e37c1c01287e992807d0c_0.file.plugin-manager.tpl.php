<?php
/* Smarty version 3.1.39, created on 2021-12-24 21:59:25
  from 'C:\xampp\htdocs\prestashop\modules\psf_prestapay\psdk\views\templates\admin\plugin-manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c6118532e071_78379884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e4a338e220260cbb19e37c1c01287e992807d0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\psf_prestapay\\psdk\\views\\templates\\admin\\plugin-manager.tpl',
      1 => 1640370272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c6118532e071_78379884 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="list-group">

	<div class="list-group-item disabled">
		<i class="icon-AdminParentModules"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'مدیریت پلاگین های ماژول %s','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>$_smarty_tpl->tpl_vars['module']->value->displayName),$_smarty_tpl ) );?>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['plugins_list']->value) {?>
		<table class="table">
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins_list']->value, 'plugin');
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>
					<tr>
						<td class="<?php if ($_smarty_tpl->tpl_vars['plugin']->value->isEnabled()) {?>module_active<?php } else { ?>module_inactive<?php }?>" style="width: 1%;">
							<img alt="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s ( %s )','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>array($_smarty_tpl->tpl_vars['plugin']->value->authorName,$_smarty_tpl->tpl_vars['plugin']->value->name)),$_smarty_tpl ) );?>
" src="<?php if ($_smarty_tpl->tpl_vars['plugin']->value->logoUrl) {
echo $_smarty_tpl->tpl_vars['plugin']->value->logoUrl;
} else {
echo $_smarty_tpl->tpl_vars['plugins_dir_url']->value;
echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
/logo.png<?php }?>" width="57">
						</td>
						<td>
							<div title="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->displayName;?>
 ( <?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
 )">
								<div class="text-muted">
									<span class="text-warning"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->displayName;?>
</span>
								</div>
								<div class="module_name">
									<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value->authorName)) {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->authorUrl;?>
">
											<small class="text-muted" style="font-size: 9px"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'طراحی و توسعه توسط ','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>
</small><span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['plugin']->value->authorName;?>
</span>
										</a>
									<?php }?>
									<small class="text-primary">
										<?php if ($_smarty_tpl->tpl_vars['plugin']->value->db_version) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(نسخه نصب شده %s)','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>$_smarty_tpl->tpl_vars['plugin']->value->db_version),$_smarty_tpl ) );?>

										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(نسخه %s)','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>$_smarty_tpl->tpl_vars['plugin']->value->version),$_smarty_tpl ) );?>

										<?php }?>
									</small>
								</div>
								<p class="module_description " style="font-size: 10px">
									<?php echo $_smarty_tpl->tpl_vars['plugin']->value->description;?>

									
									<?php if ($_smarty_tpl->tpl_vars['plugin']->value->infoUrl) {?>
										<br><a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->infoUrl;?>
" class="fancybox-quick-view"><i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'توضیحات بیشتر','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>
</a>
									<?php }?>

								</p>
								<?php if ($_smarty_tpl->tpl_vars['plugin']->value->ws_incompatible) {?>
									<small class="bg-warning text-warning" style="font-size: 11px">
										<i class="icon-wrench"></i>&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'یک نسخه جدید برای پلاگین منتشر شده که با نسخه بالاتر از ماژول پرستاپلاس سازگار است!','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

									</small>
								<?php }?>
							</div>
						</td>
						<td class="actions">
							<div class="btn-group-action">
								<div class="btn-group pull-right text-center">
									
									<?php if (!$_smarty_tpl->tpl_vars['plugin']->value->ws_version && !$_smarty_tpl->tpl_vars['plugin']->value->isCompatible()) {?>
									
										<small class="text-danger">
											<?php if ($_smarty_tpl->tpl_vars['plugin']->value->compatibleFrom && $_smarty_tpl->tpl_vars['plugin']->value->compatibleTo) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'سازگار با %s از نسخه %s تا %s','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>array($_smarty_tpl->tpl_vars['module']->value->displayName,$_smarty_tpl->tpl_vars['plugin']->value->compatibleFrom,$_smarty_tpl->tpl_vars['plugin']->value->compatibleTo)),$_smarty_tpl ) );?>

											<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->compatibleFrom) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'سازگار با %s از نسخه %s','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>array($_smarty_tpl->tpl_vars['module']->value->displayName,$_smarty_tpl->tpl_vars['plugin']->value->compatibleFrom)),$_smarty_tpl ) );?>

											<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->compatibleTo) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'سازگار با %s تا نسخه %s','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>array($_smarty_tpl->tpl_vars['module']->value->displayName,$_smarty_tpl->tpl_vars['plugin']->value->compatibleTo)),$_smarty_tpl ) );?>

											<?php }?>
										</small>
										
										<div class="alert bg-warning text-muted" style="padding: 5px;margin: 10px auto;">
											<i class="icon-warning"></i>&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'نسخه ناسازگار','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

										</div>

										<small class="text-danger"> 
											<?php if ($_smarty_tpl->tpl_vars['plugin']->value->compatiblePsFrom && $_smarty_tpl->tpl_vars['plugin']->value->compatiblePsTo) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'سازگار با پرستاشاپ از نسخه %s تا %s','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>array($_smarty_tpl->tpl_vars['plugin']->value->compatiblePsFrom,$_smarty_tpl->tpl_vars['plugin']->value->compatiblePsTo)),$_smarty_tpl ) );?>

											<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->compatiblePsFrom) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'سازگار با پرستاشاپ از نسخه %s','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>$_smarty_tpl->tpl_vars['plugin']->value->compatiblePsFrom),$_smarty_tpl ) );?>

											<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->compatiblePsTo) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'سازگار با پرستاشاپ تا نسخه %s','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>$_smarty_tpl->tpl_vars['plugin']->value->compatiblePsTo),$_smarty_tpl ) );?>

											<?php }?>
										</small>
										
									<?php } elseif (!$_smarty_tpl->tpl_vars['plugin']->value->ws_version && ($_smarty_tpl->tpl_vars['plugin']->value->zipUrl || $_smarty_tpl->tpl_vars['plugin']->value->buyUrl)) {?>
									
										<?php if ($_smarty_tpl->tpl_vars['plugin']->value->zipUrl) {?>
											<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=download&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
">
												<i class="icon-download"></i>&nbsp; 
												<?php if ($_smarty_tpl->tpl_vars['plugin']->value->ws_version) {?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'دانلود نسخه جدید','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

												<?php } else { ?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'دانلود','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

												<?php }?>
											</a>
										<?php } else { ?>
											<a class="btn btn-default label-tooltip" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value->buyUrl;?>
" <?php if ($_smarty_tpl->tpl_vars['plugin']->value->price) {?> data-toggle="tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s','mod'=>$_smarty_tpl->tpl_vars['module']->value->name,'sprintf'=>$_smarty_tpl->tpl_vars['plugin']->value->price),$_smarty_tpl ) );?>
"<?php }?>>
												<i class="icon-shopping-cart"></i>&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'خرید پلاگین','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

											</a>
										<?php }?>

									<?php } elseif (!$_smarty_tpl->tpl_vars['plugin']->value->isInstalled()) {?>
									
										<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=install&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
">
											<i class="icon-plus-sign-alt"></i>&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'نصب','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

										</a>
										
									<?php } elseif (!$_smarty_tpl->tpl_vars['plugin']->value->isEnabled()) {?>
									
										<a class=" btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=enable&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" onclick="" title="">
											<i class="icon-off"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'فعال','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

										</a>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
											<li>
												<a href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=uninstall&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" onclick="" title="">
													<i class="icon-minus-sign-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'حذف نصب','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

												</a>
											</li>
										</ul>
										
									<?php } elseif ($_smarty_tpl->tpl_vars['plugin']->value->isOnDisk() && $_smarty_tpl->tpl_vars['plugin']->value->isEnabled()) {?>
									
										<?php if (count($_smarty_tpl->tpl_vars['plugin']->value->upgradeList)) {?>
											<a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=upgrade&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
">
												<i class="icon-wrench"></i>&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ارتقا ماژول','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

											</a>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<span class="caret">&nbsp;</span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=disable&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" onclick="" title="">
														<i class="icon-off"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'غیرفعال','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

													</a>
												</li>
												<li>
													<a href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=uninstall&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" onclick="" title="">
														<i class="icon-minus-sign-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'حذف نصب','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

													</a>
												</li>
											</ul>
										<?php } elseif (version_compare($_smarty_tpl->tpl_vars['plugin']->value->ws_version,$_smarty_tpl->tpl_vars['plugin']->value->db_version,'>') && $_smarty_tpl->tpl_vars['plugin']->value->zipUrl) {?>
											<a class=" btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=download&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" onclick="" title="">
												<i class="icon-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'دانلود و نصب نسخه جدید','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

											</a>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<span class="caret">&nbsp;</span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=disable&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" onclick="" title="">
														<i class="icon-off"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'غیرفعال','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

													</a>
												</li>
												<li>
													<a href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=uninstall&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" onclick="" title="">
														<i class="icon-minus-sign-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'حذف نصب','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

													</a>
												</li>
											</ul>
										<?php } else { ?>
											<a class=" btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=disable&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" onclick="" title="">
												<i class="icon-off"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'غیرفعال','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

											</a>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<span class="caret">&nbsp;</span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
&paction=uninstall&pname=<?php echo $_smarty_tpl->tpl_vars['plugin']->value->name;?>
" onclick="" title="">
														<i class="icon-minus-sign-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'حذف نصب','mod'=>$_smarty_tpl->tpl_vars['module']->value->name),$_smarty_tpl ) );?>

													</a>
												</li>
											</ul>
										<?php }?>
										
									<?php }?>
									
								</div>
							</div>
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	<?php }?>
</div><?php }
}
