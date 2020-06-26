{include file="templateEngine/templates/header_adm.tpl"}

<form action="addPlayer">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Nuevo nombre</label>
      <input type="text" class="form-control" id="name"  required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Nuevo apellido</label>
      <input type="text" class="form-control" id="surname"  required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Apodo</label>
      <input type="text" class="form-control" id="nickname" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Posicion</label>
      <select class="custom-select" id="id_postion" >
        <option> {foreach from=$positions item=position}
            <option value="{$position['id_position']}">{{$position['name']}}</option>
            {/foreach}</option>
      </select>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Terminar edición!</button>
</form>
{include file="templateEngine/templates/footer_adm.tpl"}