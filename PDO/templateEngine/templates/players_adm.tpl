{include file="templateEngine/templates/header_adm.tpl"}

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestion de Jugadores</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
            <a href="index" class="btn btn-success" role="button" aria-pressed="true">Vista usuario</a>
        </div>
    </div>
    <h2>Sumar jugador al plantel</h2>

    <form action="addPlayer" mothod="GET">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="name" id="name"required>
                <p id="note">Los campos Nombre y Apellido tiene que ser de tipo 'string'. </p>
            </div>
            <div class="form-group col-md-5">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="surname" id="surname" required>
            </div>
        </div>

        <div class="form-row">
            <div class="dropdown">
                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ej: Arquero">
                    <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Posicion</button>
                  </span>                    
                        <select name="id_position" id="id_position">
                            {foreach from=$positions item=$position}
                            <option value="{$position['id_position']}">{{$position['name']}}</option>
                            {/foreach}
                          </select> 
                                                                        
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                </div>
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Ej: La Pulga">
                <label for="apodo">Apodo</label>
            </div>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Agregar Jugador">
        </div>
    </form>

    <br>
    <br>
    <h2>Jugadores</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Posicion</th>
                    <th>Apodo</th>
                    <th>Editado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- $players= getPlayers(); -->

                    {foreach from=$players item=player}

                    <td>
                        <p> {$player['name']} </p>
                    </td>
                    <td>
                        <p>{$player['surname']}</p>
                    </td>
                    <td>
                        <p>{$positions[$player['id_position']-2]['name']} </p>
                    </td>
                    <td>
                        <p>{$player['nickname']} </p>

                    </td>
                    <td>
                        {if $player['edit']}
                        <span data-feather="check"></span>                        
                        {else} <span data-feather="slash"></span> 
                        {/if}
                    </td>
                    <td>
                        <a href="editPlayer/{$player['id_player']}"><span data-feather="edit"></span>Editar</a>
                        <a href="deletePlayer/{$player['id_player']}"><span data-feather="trash"></span>Elimitar</a>
                        <a href="marckedPlayer/{$player['id_player']}"><span data-feather="check"></span>Editado</a>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</main>


{include file="templateEngine/templates/footer_adm.tpl"}