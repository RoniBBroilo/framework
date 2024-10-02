<?php
/* Smarty version 4.3.4, created on 2024-10-02 18:16:34
  from 'C:\xampp\htdocs\framework\modules\ps_emailsubscription\views\templates\admin\list_action_viewcustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fdb832544eb0_05517761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f9abf6c38068fabf2d626364b2d68c7c9c245fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\modules\\ps_emailsubscription\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1709814894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fdb832544eb0_05517761 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
