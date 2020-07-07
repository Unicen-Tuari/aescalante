<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-07 19:46:59
  from 'C:\xampp\htdocs\PW-2020\aescalante\PDO\templateEngine\templates\rename.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f04b513bebd21_48567656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '808d07de71668178db5425d38a5ce82a807aff3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PW-2020\\aescalante\\PDO\\templateEngine\\templates\\rename.tpl',
      1 => 1594143629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templateEngine/templates/header_adm.tpl' => 1,
    'file:templateEngine/templates/footer_adm.tpl' => 1,
  ),
),false)) {
function content_5f04b513bebd21_48567656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templateEngine/templates/header_adm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="editFinish" method="GET">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Nuevo nombre</label>
      <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['player']->value['name'];?>
" class="form-control" id="name" name="name" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Nuevo apellido</label>
      <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['player']->value['surname'];?>
" id="surname" name="surname"  required>
    </div>
  </div>
  <input type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['player']->value['id_player'];?>
" id="id_player" name="id_player"  >
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Apodo</label>
      <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['player']->value['nickname'];?>
" id="nickname" name="nickname" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Posicion</label>
      <select class="custom-select" name="id_position" id="id_position" >
        <option> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['positions']->value, 'position');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['position']->value) {
?>
           
            <option <?php if ($_smarty_tpl->tpl_vars['position']->value['id_position'] == $_smarty_tpl->tpl_vars['player']->value['id_position']) {?> selected <?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['position']->value['id_position'];?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['position']->value['name'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></option>
      </select>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Terminar edición!</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:templateEngine/templates/footer_adm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
