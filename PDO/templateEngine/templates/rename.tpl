{include file="templateEngine/templates/header_adm.tpl"}
<form action="editFinish" method="GET">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Nuevo nombre</label>
      <input type="text" value="{$player['name']}" class="form-control" id="name" name="name" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Nuevo apellido</label>
      <input type="text" class="form-control" value="{$player['surname']}" id="surname" name="surname"  required>
    </div>
  </div>
  <input type="hidden" class="form-control" value="{$player['id_player']}" id="id_player" name="id_player"  >
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Apodo</label>
      <input type="text" class="form-control" value="{$player['nickname']}" id="nickname" name="nickname" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Posicion</label>
      <select class="custom-select" name="id_position" id="id_position" >
        <option> {foreach from=$positions item=position}
           
            <option {if $position['id_position'] eq $player['id_position'] } selected {/if}  value="{$position['id_position']}">{{$position['name']}}</option>
            {/foreach}</option>
      </select>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Terminar edición!</button>
</form>
{include file="templateEngine/templates/footer_adm.tpl"}