<?php
/* Smarty version 3.1.39, created on 2021-12-24 22:04:44
  from 'C:\xampp\htdocs\prestashop\admin096vm4ztc\themes\default\template\controllers\countries\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c612c4833748_91174000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c50519601e47a309dc6d9bc3245f03a243d1b9e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin096vm4ztc\\themes\\default\\template\\controllers\\countries\\helpers\\form\\form.tpl',
      1 => 1638617485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c612c4833748_91174000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109104550561c612c481d9a4_52576420', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182748784161c612c482c0b9_16963718', "input_row");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173155465461c612c4831cb4_03248586', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_109104550561c612c481d9a4_52576420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_109104550561c612c481d9a4_52576420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'address_layout') {?>
		<div class="col-lg-8">
			<div class="form-group">
				<div class="col-lg-4">
					<textarea id="ordered_fields" name="address_layout" style="height:150px;"><?php echo $_smarty_tpl->tpl_vars['input']->value['address_layout'];?>
</textarea>
				</div>
				<div class="col-lg-8">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some countries require different elements than others. Click on the button below to get the valid default address format for this country.','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>

					<?php echo $_smarty_tpl->tpl_vars['input']->value['display_valid_fields'];?>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This will restore your last registered address format.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
" data-html="true"><a id="useLastDefaultLayout" href="javascript:void(0)" onclick="resetLayout('<?php echo $_smarty_tpl->tpl_vars['input']->value['encoding_address_layout'];?>
', 'lastDefault');" class="btn btn-default">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use the last registered format','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</a></span>
					<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This will restore the default address format for this country.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
" data-html="true"><a id="useDefaultLayoutSystem" href="javascript:void(0)" onclick="resetLayout('<?php echo $_smarty_tpl->tpl_vars['input']->value['encoding_default_layout'];?>
', 'defaultSystem');" class="btn btn-default">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use the default format','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</a></span>
					<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This will restore your current address format.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
" data-html="true"><a id="useCurrentLastModifiedLayout" href="javascript:void(0)" onclick="resetLayout(lastLayoutModified, 'currentModified')" class="btn btn-default">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use my current modified format','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</a></span>
					<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This will delete the current address format','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
" data-html="true"><a id="eraseCurrentLayout" href="javascript:void(0)" onclick="resetLayout('', 'erase');" class="btn btn-default">
						<i class="icon-eraser"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear format','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</a></span>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "field"} */
/* {block "input_row"} */
class Block_182748784161c612c482c0b9_16963718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_182748784161c612c482c0b9_16963718',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'standardization') {?>
		<div class="form-group" id="TAASC" style="display: none;">
			<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</label>
			<div class="col-lg-9">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on" value="1" />
					<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off" value="0" checked="checked" />
					<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input_row"} */
/* {block 'script'} */
class Block_173155465461c612c4831cb4_03248586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_173155465461c612c4831cb4_03248586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	$(document).ready(function() {

		$('.addPattern').click(function() {
			addFieldsToCursorPosition($(this).attr("id"))
			lastLayoutModified = $("#ordered_fields").val();
		});

		$('#ordered_fields').keyup(function() {
			lastLayoutModified = $(this).val();
		});

		$('#need_zip_code_on, #need_zip_code_off').change(function() {
			disableZipFormat();
		});

		$('#iso_code').change(function() {
			disableTAASC();
		});
		disableTAASC();
	});

	function addFieldsToCursorPosition(pattern) {
		$("#ordered_fields").replaceSelection(pattern + " ");
	}

	function resetLayout(defaultLayout, type) {
		if (confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to restore the default address format for this country?','js'=>1,'d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
"))
		$("#ordered_fields").val(unescape(defaultLayout.replace(/\+/g, " ")));
	}

	$('#custom-address-fields a').click(function (e) {
  		e.preventDefault();
  		$(this).tab('show')
	})

<?php
}
}
/* {/block 'script'} */
}
