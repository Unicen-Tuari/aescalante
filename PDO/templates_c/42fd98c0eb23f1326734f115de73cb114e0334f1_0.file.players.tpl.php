<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-06 19:49:13
  from 'C:\xampp\htdocs\PW-2020\aescalante\PDO\templateEngine\templates\players.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f03641938fa03_31369572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42fd98c0eb23f1326734f115de73cb114e0334f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PW-2020\\aescalante\\PDO\\templateEngine\\templates\\players.tpl',
      1 => 1594057751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templateEngine/templates/header.tpl' => 1,
    'file:templateEngine/templates/table_positions.tpl' => 1,
    'file:templateEngine/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f03641938fa03_31369572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templateEngine/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <article>
              <div class="conteiner">
              <ul class="players_list">
                <li>Sebastian Chavez</li><a href="#chavez"><img src="../Players/seba_chavez.jpg" alt="Sebastian Chavez" class="image_list"></a>
                <li>Lucio Mansilla</li><a href="#mansilla"><img src="../Players/lucio_mansilla.jpg" alt="Lucio Mansilla" class="image_list"></a>
                <li>Nahuel Tolosa</li><a href="#tolosa"><img src="../Players/nahuel_tolosa.jpg" alt="" class="image_list"></a>
                <li>Ruben Cucuchet</li><a href="#curuchet"><img src="../Players/ruben_curuchet.jpg" alt="" class="image_list"></a>
                <li>Facundo Garcia</li><a href="#garcia"><img src="../Players/facundo_garcia.jpg" alt="" class="image_list"></a>
                <li>Anibal Paez</li><a href="#paez"><img src="../Players/anibal_paez.jpg" alt="" class="image_list"></a>
                <li>Cristian Poggi</li><a href="#poggi"><img src="../Players/cristian_poggi.jpg" alt="" class="image_list"></a>
                <li>Enzo Tolosa</li><a href="#e_tolosa"><img src="../Players/enzo_tolosa.jpg"alt="" class="image_list"></a>
                <li>Agustin Escalante</li><a href="#escalante"><img src="../Players/agustin_escalante.jpg" alt="" class="image_list"></a>
                <li>Matias Ferro</li><a href="#ferro"><img src="../Players/matias_ferro.jpg" alt="" class="image_list"></a>
                <li>Diego Ordoqui</li><a href="#ordoqui"><img src="../Players/diego_ordoqui.jpg" alt="" class="image_list"></a>
                <li>Claudio Zinzunegui</li><a href="#calu"><img src="../Players/calu.png" alt="" class="image_list"></a>
              </ul>
              </div>
              <div class="datos_jugadores">
              <ul><a name="escalante"></a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
                <li id="Name_player">Apellido, Nombre: <?php echo $_smarty_tpl->tpl_vars['player']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['player']->value['surname'];?>
  </li>
                <li>Posicion : <?php echo $_smarty_tpl->tpl_vars['player']->value['name_position'];?>
</li>
                <li>Número : <?php echo $_smarty_tpl->tpl_vars['player']->value['number'];?>
</li>
                <li>Apodo : <?php echo $_smarty_tpl->tpl_vars['player']->value['nickname'];?>
</li>
                <li>Redes Sociales:--</li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
              <br>
              
            </div>
              </article>
          </section>
          <aside>
            <?php $_smarty_tpl->_subTemplateRender("file:templateEngine/templates/table_positions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <table id="scorers_table">
            <h4 id="our_scorers">NUESTROS GOLEADORES</h4>
            <thead>
              <tr>
                <th>Jugador</th>
                <th>Goles</th>
                <th>Partidos Jugados</th>
              </tr>
            </thead>
              <tr>
                <th>Tolosa, Enzo</th>
                <th>23</th>
                <th>19</th>
              </tr>
              <tr>
                <th>Poggi, Cristian</th>
                <th>18</th>
                <th>25</th>
              </tr>
              <tr>
                <th>Escalante, Agustin</th>
                <th>19</th>
                <th>19</th>
              </tr>
              <tr>
                <th>Anibal, Paez</th>
                <th>13</th>
                <th>19</th>
              </tr>
            </table>
          <?php $_smarty_tpl->_subTemplateRender("file:templateEngine/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
