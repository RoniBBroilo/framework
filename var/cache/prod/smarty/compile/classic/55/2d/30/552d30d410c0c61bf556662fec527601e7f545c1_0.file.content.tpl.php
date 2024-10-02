<?php
/* Smarty version 4.3.4, created on 2024-10-02 18:19:47
  from 'C:\xampp\htdocs\framework\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fdb8f3cf97f4_42389373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '552d30d410c0c61bf556662fec527601e7f545c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1699447992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_66fdb8f3cf97f4_42389373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
