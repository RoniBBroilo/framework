<?php
/* Smarty version 4.3.4, created on 2024-10-02 17:37:31
  from 'C:\xampp\htdocs\framework\themes\classic\templates\errors\forbidden.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fdaf0b656098_57391065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ed177dd44c0a5f63250422d7d493c4866e7b291' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\themes\\classic\\templates\\errors\\forbidden.tpl',
      1 => 1708974042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fdaf0b656098_57391065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106649483466fdaf0b64c224_28631620', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_173964653766fdaf0b64ee16_30092172 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_1364038766fdaf0b64ea03_50555677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173964653766fdaf0b64ee16_30092172', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_211261388966fdaf0b64c952_22795258 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header">
      <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1364038766fdaf0b64ea03_50555677', 'page_header', $this->tplIndex);
?>

    </header>
  <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_37395319766fdaf0b650252_49825848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'403 Forbidden','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You are not allowed to access this page.",'d'=>"Shop.Theme.Global"),$_smarty_tpl ) );?>
</p>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_209459639566fdaf0b64fef6_69447337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-content page-restricted">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37395319766fdaf0b650252_49825848', 'page_content', $this->tplIndex);
?>

    </section>
  <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_11514937666fdaf0b655792_17223144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_106649483466fdaf0b64c224_28631620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106649483466fdaf0b64c224_28631620',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_211261388966fdaf0b64c952_22795258',
  ),
  'page_header' => 
  array (
    0 => 'Block_1364038766fdaf0b64ea03_50555677',
  ),
  'page_title' => 
  array (
    0 => 'Block_173964653766fdaf0b64ee16_30092172',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_209459639566fdaf0b64fef6_69447337',
  ),
  'page_content' => 
  array (
    0 => 'Block_37395319766fdaf0b650252_49825848',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11514937666fdaf0b655792_17223144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211261388966fdaf0b64c952_22795258', 'page_header_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209459639566fdaf0b64fef6_69447337', 'page_content_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11514937666fdaf0b655792_17223144', 'page_footer_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
