<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-26 05:22:56
  from 'C:\xampp\htdocs\PW-2020\aescalante\PDO\templateEngine\templates\positions_adm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef56a10f37289_15325245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f478d69fc4a56943114820eca252bd6a3fed797' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PW-2020\\aescalante\\PDO\\templateEngine\\templates\\positions_adm.tpl',
      1 => 1593141401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templateEngine/templates/header_adm.tpl' => 1,
    'file:templateEngine/templates/posit_player.tpl' => 1,
    'file:templateEngine/templates/footer_adm.tpl' => 1,
  ),
),false)) {
function content_5ef56a10f37289_15325245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templateEngine/templates/header_adm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestion de Posiciones</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
            <button type="button" class="btn btn-success">Vista Usuario</button>
        </div>
    </div>
    <h2>Agregar nueva posición</h2>

    <form action="addPosition" mothod="GET">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nombre">Nombre posición</label>
                <input type="text" class="form-control" name="name" id="name">
                <p id="note">El campo Nombre tiene que ser de tipo 'string'. </p>
            </div>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Agregar Posicion">
        </div>
    </form>

    <h2>Posiciones</h2>
    <div class="table-responsive" >
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['positions']->value, 'position');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['position']->value) {
?>
                    <td> 
                        <div class="list-group">
                            <a href="position/<?php echo $_smarty_tpl->tpl_vars['position']->value['id_position'];?>
" class="list-group-item list-group-item-action active">
                                <p><?php echo $_smarty_tpl->tpl_vars['position']->value['name'];?>
</p>
                            </a>
                        <div><a href="" class="list-group-item list-group-item-action"><p> 
                            <!-- <?php $_smarty_tpl->_subTemplateRender("file:templateEngine/templates/posit_player.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> -->
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['player']->value['id_position'] == $_smarty_tpl->tpl_vars['position']->value['id_position']) {?>
                            <p><?php echo $_smarty_tpl->tpl_vars['player']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['player']->value['surname'];?>
 </p>
                            <?php }?> 
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <!-- <?php echo $_smarty_tpl->tpl_vars['players']->value[$_smarty_tpl->tpl_vars['player']->value['id_position']-2]['name'];?>
 -->
                        </p></a>
                        </div>      
                    </div>
                    </td>
                    <td>
                        <a href="deletePosition/<?php echo $_smarty_tpl->tpl_vars['position']->value['id_position'];?>
"><span data-feather="trash"></span>Elimitar</a>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
            </tbody>
        </table>
    </div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:templateEngine/templates/footer_adm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
