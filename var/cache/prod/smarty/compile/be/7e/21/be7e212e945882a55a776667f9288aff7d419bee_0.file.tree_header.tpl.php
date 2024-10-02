<?php
/* Smarty version 4.3.4, created on 2024-10-02 18:06:15
  from 'C:\xampp\htdocs\framework\adminRoni\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fdb5c7a824f4_34323320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be7e212e945882a55a776667f9288aff7d419bee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\adminRoni\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1727264920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fdb5c7a824f4_34323320 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
