<?php
/* Smarty version 4.3.4, created on 2024-10-02 17:39:52
  from 'C:\xampp\htdocs\framework\adminRoni\themes\default\template\controllers\images\modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fdaf988ebd70_33830407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af8753cd1cae0c800017e284f431138a912a9ae1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\adminRoni\\themes\\default\\template\\controllers\\images\\modal_regenerate_thumbnails.tpl',
      1 => 1727264920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fdaf988ebd70_33830407 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
