<?php
/* Smarty version 4.3.4, created on 2024-10-02 16:13:16
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66fd9b4c60d1e4_70765177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1708974042,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66fd9b4c60d1e4_70765177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\framework\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\ea\\68\\4d\\ea684da3ad355536f28fcdcfe494cccdb2d835db_2.file.helpers.tpl.php',
    'uid' => 'ea684da3ad355536f28fcdcfe494cccdb2d835db',
    'call_name' => 'smarty_template_function_renderLogo_173305980766fcb7cf9cc8f2_76726259',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost:3000/index.php?controller=my-account" rel="nofollow">
      Su cuenta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost:3000/index.php?controller=identity" title="Información" rel="nofollow">Información</a></li>
                  <li><a href="http://localhost:3000/index.php?controller=address" title="Añadir primera dirección" rel="nofollow">Añadir primera dirección</a></li>
                          <li><a href="http://localhost:3000/index.php?controller=history" title="Pedidos" rel="nofollow">Pedidos</a></li>
                          <li><a href="http://localhost:3000/index.php?controller=order-slip" title="Facturas por abono" rel="nofollow">Facturas por abono</a></li>
                                  <li>
    <a href="http://localhost:3000/index.php?fc=module&amp;module=blockwishlist&amp;controller=lists&amp;id_lang=1" title="Mi lista de deseos" rel="nofollow">
      Lista de deseos
    </a>
  </li>
<li>
  <a href="//localhost:3000/index.php?fc=module&module=ps_emailalerts&controller=account&id_lang=1" title="Mis alertas">
    Mis alertas
  </a>
</li>

        <li><a href="http://localhost:3000/index.php?mylogout=" title="Cerrar sesión" rel="nofollow">Cerrar sesión</a></li>
       
	</ul>
</div>
<?php }
}
