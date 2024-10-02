<?php
/* Smarty version 4.3.4, created on 2024-10-02 00:02:39
  from 'C:\xampp\htdocs\framework\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fcb7cf4b3af9_73540515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2df7dc7c470196ee74d865f3d08feadc41c58ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\themes\\classic\\templates\\index.tpl',
      1 => 1708974042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fcb7cf4b3af9_73540515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91172943466fcb7cf4b1bf1_83646894', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_160577716166fcb7cf4b20e4_84108781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_115648966666fcb7cf4b2b14_14113892 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_166960679666fcb7cf4b27b7_42313303 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115648966666fcb7cf4b2b14_14113892', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_91172943466fcb7cf4b1bf1_83646894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_91172943466fcb7cf4b1bf1_83646894',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_160577716166fcb7cf4b20e4_84108781',
  ),
  'page_content' => 
  array (
    0 => 'Block_166960679666fcb7cf4b27b7_42313303',
  ),
  'hook_home' => 
  array (
    0 => 'Block_115648966666fcb7cf4b2b14_14113892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160577716166fcb7cf4b20e4_84108781', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166960679666fcb7cf4b27b7_42313303', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
