<?php
/* Smarty version 4.3.4, created on 2024-10-01 23:29:04
  from 'C:\xampp\htdocs\framework\adminRoni\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fcaff07388c7_40624928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14947eda474684a1016c2a317faefd9b560b53df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\adminRoni\\themes\\new-theme\\template\\content.tpl',
      1 => 1727264920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcaff07388c7_40624928 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
