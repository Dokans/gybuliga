{extends "@layout.tpl"}
{block content}
    <form method="post" action="/gadmin/season/add">
        <div class="input-group">
            <label for="name">Jméno soutěže</label><input type="text" id="name" name="name" required>
        </div>
        <div class="input-group">
            <label for="from">Od: </label><input type="date" id="from" name="from" required>
            <label for="to">Do: </label><input type="date" id="to" name="to" required>
        </div>
        <div class="input-group">
            <label for="numberOfTeams">Počet týmů</label><input type="number" id="numberOfTeams" name="numberOfTeams" required>
        </div>
        <div class="custom-select">
            <label for="seasonType">Typ sezóny</label><select name="seasonType" id="seasonType" required>
                {foreach from=$seasonTypes item="seasonType"}
                    <option value="{$seasonType.typeId}">{$seasonType.name}</option>
                {/foreach}
            </select>
        </div>
        <input type="hidden" value="1" name="step">
        <input type="submit" value="Další krok">
    </form>
{/block}