<?php
/* Smarty version 4.3.4, created on 2024-10-01 23:29:02
  from 'C:\xampp\htdocs\framework\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fcafeeeb7324_36719189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8aae7132e62ac8bf774e58f84a9eda980d447d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\modules\\psxdesign\\views\\templates\\hook\\displayModuleTag.tpl',
      1 => 1727264920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcafeeeb7324_36719189 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
