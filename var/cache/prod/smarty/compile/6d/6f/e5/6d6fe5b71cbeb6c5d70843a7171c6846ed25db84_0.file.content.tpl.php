<?php
/* Smarty version 4.3.4, created on 2024-10-02 17:32:08
  from 'C:\xampp\htdocs\framework\adminRoni\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fdadc87f6925_63333688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d6fe5b71cbeb6c5d70843a7171c6846ed25db84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\adminRoni\\themes\\default\\template\\content.tpl',
      1 => 1727264920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fdadc87f6925_63333688 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
