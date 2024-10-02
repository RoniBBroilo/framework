<?php
/* Smarty version 4.3.4, created on 2024-10-02 16:35:54
  from 'C:\xampp\htdocs\framework\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fda09aa869a8_19706327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea684da3ad355536f28fcdcfe494cccdb2d835db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1708974042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66fda09aa869a8_19706327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\framework\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\ea\\68\\4d\\ea684da3ad355536f28fcdcfe494cccdb2d835db_2.file.helpers.tpl.php',
    'uid' => 'ea684da3ad355536f28fcdcfe494cccdb2d835db',
    'call_name' => 'smarty_template_function_renderLogo_42813325766fda09a9ab741_65165897',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_42813325766fda09a9ab741_65165897 */
if (!function_exists('smarty_template_function_renderLogo_42813325766fda09a9ab741_65165897')) {
function smarty_template_function_renderLogo_42813325766fda09a9ab741_65165897(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_42813325766fda09a9ab741_65165897 */
}
