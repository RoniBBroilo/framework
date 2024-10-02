<?php
/* Smarty version 4.3.4, created on 2024-10-02 00:02:38
  from 'C:\xampp\htdocs\framework\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fcb7ced86702_32161617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '747d7eb209e58f30bf68f0bc269e70b3e650a908' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1708974042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcb7ced86702_32161617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '163192282166fcb7ced6a5f7_63617587';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94237438366fcb7ced84ca0_68682567', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_94237438366fcb7ced84ca0_68682567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_94237438366fcb7ced84ca0_68682567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
