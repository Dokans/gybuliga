{extends "@layout.tpl"}
{block content}

    <form method="post" class="form-group" action="/gadmin/players/add">
        <label for="name">Jméno: </label><input id="name" name="player[name]" type="text" required><br>
        <label for="surname">Příjmení: </label><input id="surname" name="player[surname]" type="text" required><br>
        <label for="number">Číslo: </label><input id="number" name="player[number]" type="number" required><br>
        <label for="class">Třída: </label><input id="class" name="player[class]" type="text" required><br>
        <label for="birthday">Datum narození: </label><input id="birthday" name="player[birthday]" type="date"><br>
        <label for="team">Tým: </label><select id="team" name="player[current_team]" required>
            {foreach from=$teams item="team"}
                <option value="{$team.id}">{$team.name}</option>
            {/foreach}
        </select><br>
        <input type="submit" value="Přidat hráče">
    </form>
{/block}