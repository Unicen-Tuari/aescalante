{include file="header.tpl"}
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Control de Jugadores</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
            <button type="button" class="btn btn-success">Compartir a Home</button>
        </div>
    </div>
    <h2>Sumar jugador al plantel</h2>

    <form action="add" mothod="GET">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group col-md-5">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="surname" id="surname">
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Posicion
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item" href="#" id="id_position">2</a>
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="apodo">Apodo</label>
                <input type="text" class="form-control" id="nickname" name="nickname" placeholder="--">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
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
                    <th>Condicion</th>
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
                        <p>{$player['id_position']} </p>
                    </td>
                    <td>
                        <p>{$player['nickname']} </p>

                    </td>
                    <td>
                    </td>
                    <td>
                        <a href="#"><span data-feather="edit"></span>Editar</a>
                        <a href="delete/{$player['id_player']}"><span data-feather="trash"></span>Elimitar</a>
                        <a href="#"><span data-feather="check"></span>Terminar</a>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>

    </div>
</main>
</div>
</div>
{include file="footer.tpl"}