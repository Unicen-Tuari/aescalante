{include file="templateEngine/templates/header.tpl"}
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
                <li id="Name_player">Nombre, Apellido:Agustin, Escalante</li>
                <li>Posicion:Delantero/Mediocampista</li>
                <li>Número:7</li>
                <li>Apodo:Esca</li>
                <li>Redes Sociales:<a href="https://www.instagram.com/aguss_escalante/"target="_blank">Instagram</a></li>
              </ul>
              <br>
              
            </div>
              </article>
          </section>
          <aside>
            {include file="templateEngine/templates/table_positions.tpl"}
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
          {include file="templateEngine/templates/footer.tpl"}
